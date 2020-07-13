<?php

namespace Drupal\kidiklik_event\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\kidiklik_event\Event\NodeInsertEvent;

class NodeInsertSubscriber implements EventSubscriberInterface {
	public function onNodeInsert(NodeInsertEvent $event) {
	    /* on récupére le département de la config */
		$dep=\Drupal::service("settings")->get("dep");
		
		$entity=$event->getEntity();
		/* on recherche le département dans le vocabulaire de taxonomie des département */
		$term=current(\Drupal::entityTypeManager()
			->getStorage("taxonomy_term")
			->loadByProperties(['name'=>$dep]));
		/* il existe */
		if($term!==FALSE) {
			$term_id=current($term->tid->getValue());
			$type=current($entity->type->getValue())["target_id"];
			/* le type d'entité correspond elle aux entités ayant un champ de département */
			if(in_array($type,\Drupal::service("settings")->get("available_content"))) {
			    /* on affecte le département */
				$entity->__set('field_departement',$term->id());
				$entity->save();
			}

		}
	}

	public static function getSubscribedEvents() {
		$events[NodeInsertEvent::NODE_INSERT][]=['onNodeInsert'];
		return $events;
	}
}
