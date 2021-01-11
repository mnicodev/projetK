<?php

namespace Drupal\kidiklik_event\EventSubscriber;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\entity\User;
use Drupal\Core\Access\AccessResult;

class NodeViewSubscriber implements EventSubscriberInterface {

	public function checkNode(GetResponseEvent $event) {
		$node = \Drupal::routeMatch()->getParameters()->get("node");
	    $request = $event->getRequest();
	    $route_name = $request->attributes->get('_route');

		if(!empty($node) && $route_name=="entity.node.canonical") {
	      $type=current($node->get("type")->getValue())["target_id"];
	      switch($type) {
	        case "jeu_concours":
	          if($node->__isset("field_date")) {

	            $periode_id=current($node->get("field_date")->getValue())["target_id"];
	            $periode=\Drupal::entityTypeManager()->getStorage("paragraph")->load($periode_id);
	            $date=["debut"=>strtotime($periode->get('field_date_de_debut')->value),"fin"=>strtotime($periode->get('field_date_de_fin')->value)];
	            if($date["fin"]<strtotime(date("Y-m-d"))) {
	              $event->setResponse(new RedirectResponse('/jeux-concours-termine.html'));
	            }
	          }
	          break;
	      }
	  } 






  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[KernelEvents::REQUEST][] = array('checkNode');
    return $events;
  }

}
