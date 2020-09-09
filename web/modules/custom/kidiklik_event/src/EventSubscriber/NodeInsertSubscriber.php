<?php

namespace Drupal\kidiklik_event\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\kidiklik_event\Event\NodeInsertEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\HttpResponse;


class NodeInsertSubscriber implements EventSubscriberInterface {
	public function onNodeInsert(NodeInsertEvent $event) {
	    /* on récupére le département de la config */
		$dep=\Drupal::service("settings")->get("dep");
		
		$entity=$event->getEntity();
		/* on récupére le type du contenu */
		$type=current($entity->type->getValue())["target_id"];
		/* on recherche le département dans le vocabulaire de taxonomie des département */
		$term=current(\Drupal::entityTypeManager()
			->getStorage("taxonomy_term")
			->loadByProperties(['name'=>$dep]));
		/* il existe */
		if($term!==FALSE) {
			$term_id=current($term->tid->getValue());
			/* le type d'entité correspond elle aux entités ayant un champ de département */
			if(in_array($type,\Drupal::service("settings")->get("available_content"))) {
			    /* on affecte le département */
				$entity->__set('field_departement',$term->id());
				$entity->save();
			}

		}
		
		if($type=="message_contact") {
			$entity->__set("field_date_envoi",date("Y-m-d"));
			$entity->save();
			$mailManager = \Drupal::service('plugin.manager.mail');
			 $module = ‘kidiklik_event’;
			 $key = 'create_message';
			 $to = current($term->get("field_e_mail")->getValue())["value"];
			 $params['message'] = $entity->get("field_votre_question")->value;
			 $params['node_title'] = $entity->label();
			 $langcode = "fr";
			 $send = true;
			//kint($entity->get("field_votre_question")->value);exit;
			 $result = $mailManager->mail($module, $key, $to, $langcode, $params, NULL, $send);
			 if($result['result'] !== true) 	drupal_set_message("Un probléme d'envoi est survenu.","error");
			 else	drupal_set_message("Votre message a bien été envoyé");
		}
		
	}

	public static function getSubscribedEvents() {
		$events[NodeInsertEvent::NODE_INSERT][]=['onNodeInsert'];
		return $events;
	}
}
