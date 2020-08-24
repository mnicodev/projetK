<?php

namespace Drupal\kidiklik_event\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\kidiklik_event\Event\NodeInsertEvent;

class NodeUpdateSubscriber implements EventSubscriberInterface {
	public function onNodeUpate(NodeUpdateEvent $event) {
		$entity=$event->getEntity();
		kint($entity->url());
		exit;
		/* on récupére le type du contenu */
		$type=current($entity->type->getValue())["target_id"];
		if(in_array($type,\Drupal::service("settings")->get("available_content_for_maj"))) {
			kint($entity->get("field_mise_en_avant")->getValue());exit;
		//	$entity->__set("field_lien",\Drupal::service('path.alias_manager')->getAliasByPath($entity->url()));
			//$entity->save();
		}

	}

	public static function getSubscribedEvents() {
		$events[NodeUpdateEvent::NODE_UPDATE][]=['onNodeUpdate'];
		return $events;
	}
}
