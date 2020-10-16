<?php

namespace Drupal\kidiklik_event\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\kidiklik_event\Event\NodeInsertEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\HttpResponse;


class NodeInsertSubscriber implements EventSubscriberInterface {
	public function onNodeInsert(NodeInsertEvent $event) {
		global $_POST;
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
		
		if($type=="publicite" || $type=="activite" || $type=="agenda" || $type=="article" || $type=="reportage" || $type=="reportage" /*|| $type=="bloc_de_mise_en_avant"*/) {
			
			$adherent=\Drupal::entityTypeManager()
				->getStorage("node")
				->load(current($entity->get("field_adherent")->getValue())["target_id"]);
			if(!empty($adherent)) {
				$adherent->__set("field_activites",$entity);
				$adherent->save();
			}
			
			
			
		}
		
		if($type=="client" || $type=="adherent" || $type=="activite"|| $type=="agenda") {
			$ville=\Drupal::entityTypeManager()
			->getStorage("taxonomy_term")
			->load($entity->get("field_ville_save")->value);
			$entity->__set("field_ville",$ville);
			$entity->save();
		}
		
		if($type=="bloc_de_mise_en_avant") {
			
			$adherent=\Drupal::entityTypeManager()
				->getStorage("node")
				->load(current($entity->get("field_adherent_cache")->getValue())["value"]);
			//kint($entity);kint($adherent);exit;
			if(!empty($adherent)) {
				$adherent->__set("field_activites",$entity);
				$adherent->save();
				
				$entity->__set("field_adherent",$adherent);
				$entity->save();
			}
			
			/**
			 *  On ne prend plus en compte le champ bloc mise en avant
			 * les bloc de newsletter seront indépendants et marqué par le champs newsletter du bloc
			 */
			/*$newsletter=\Drupal::entityTypeManager()
				->getStorage("node")
				->load(current($entity->get("field_newsletter")->getValue())["target_id"]);
				
			if(!empty($newsletter)) {
			
				$newsletter->get("field_bloc_de_mise_en_avant")->appendItem($entity);
				$newsletter->validate();
				$newsletter->save();
			}*/
		}
		
	}

	public static function getSubscribedEvents() {
		$events[NodeInsertEvent::NODE_INSERT][]=['onNodeInsert'];
		return $events;
	}
}
