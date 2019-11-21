<?php

namespace Drupal\kidiklik_event\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\kidiklik_event\Event\NodeInsertEvent;

class NodeInsertSubscriber implements EventSubscriberInterface {
	public function onNodeInsert(NodeInsertEvent $event) {
		$dep=\Drupal::service("settings")->get("dep");
		$entity=$event->getEntity();
		$term=current(\Drupal::entityTypeManager()
			->getStorage("taxonomy_term")
			->loadByProperties(['name'=>$dep]));
		if($term!==FALSE) {
			$term_id=current($term->tid->getValue());
			$type=current($entity->type->getValue())["target_id"];
			if(in_array($type,\Drupal::service("settings")->get("available_content"))) {
				$entity->__set('field_departement',4);
				$entity->save();
			}

		}
	}

	public static function getSubscribedEvents() {
		$events[NodeInsertEvent::NODE_INSERT][]=['onNodeInsert'];
		return $events;
	}
}
