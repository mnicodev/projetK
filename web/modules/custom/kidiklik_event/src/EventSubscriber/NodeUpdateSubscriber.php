<?php

namespace Drupal\kidiklik_event\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\kidiklik_event\Event\NodeUpdateEvent;


class NodeUpdateSubscriber implements EventSubscriberInterface {
	
	public function onNodeUpdate(NodeUpdateEvent $event) {
		$entity=$event->getEntity();
		
		$type=current($entity->type->getValue())["target_id"];
		if(in_array($type,\Drupal::service("settings")->get("available_content_for_mea"))) {

			$path=\Drupal::service('path.alias_manager')->getAliasByPath($entity->url());
			$blocs=$entity->get("field_mise_en_avant")->getValue();
			foreach($blocs as $bloc) {
				$node=\Drupal::entityTypeManager()->getStorage("node")->load($bloc["target_id"]);
				$node->set("field_lien",$path);
				$node->set("field_adherent",$entity->get("field_adherent")->getValue());
				if($entity->__isset("field_image"))
					$node->set("field_image",$entity->get("field_image")->getValue());
				if($type=="agenda") {
					$node->set("field_date",$entity->get("field_date")->getValue());
				}
				$node->validate();
				$node->save();
			}
		}

		if($type=="adherent") {
			//kint($entity->get("field_client")->getValue());
			$client=\Drupal::entityTypeManager()
			->getStorage("node")
			->load(current($entity->get("field_client")->getValue())["target_id"]);
			if(!empty($client)) {
				// on liste les adhérents du client afin de vérifier si l'adhérent est déjà enregistré
				$ok=TRUE;
				//kint($entity->id());
				foreach($client->get("field_adherent")->getValue() as $id) {
				//	kint($id);
					if($id["target_id"]==$entity->id()) $ok=FALSE;
				}
				//exit;
				if($ok) {
					$client->__get("field_adherent")->appendItem($entity);
					$client->save();
				}
				
			}
			
		}


		if($type=="publicite" || $type=="activite" || $type=="agenda" || $type=="article" || $type=="reportage" ) {

			$adherent=\Drupal::entityTypeManager()
				->getStorage("node")
				->load(current($entity->get("field_adherent")->getValue())["target_id"]);
			if(!empty($adherent)) {
				$adherent->__set("field_activites",$entity);
				$adherent->save();
			}

		}
		
		

	}

	public static function getSubscribedEvents() {
		$events[NodeUpdateEvent::NODE_UPDATE][]=['onNodeUpdate'];
		return $events;
	}
}
