<?php

namespace Drupal\kidiklik_admin\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\AfterCommand;
use Drupal\Core\Ajax\CssCommand;
use Drupal\views\Views;
use Drupal\node\Entity\Node;

/**
 * Class ContentController.
 */
class AdherentController extends ControllerBase {

  /**
   * 
   *
   * @return string
   *   Return Hello string.
   */
  public function content($action, $node_id) {
	  
	
		/*$v=Views::getView("contenus_adherent");
		
		$v->setDisplay("page_2");
		
		$v->setArguments([$type,$adherent_id]);
	//	$v->getDisplay()->setOption();
		//kint($v->getDisplay());
		//$v->setArguments([\Drupal::request()->get("node")->id()]);
		$v->execute();
		$list=drupal_render($v->render());
		$list=str_replace("[current-page:url]",\Drupal::request()->get("url"),$list);
		$list=str_replace("[adherent_id]",$adherent_id,$list);
		$list=str_replace("[type]",$type,$list);*/
		
		return $response;
	
  }
  
  
  /**
   * @Return response
   */
  public function page($adherent_id) {
	  $adherent=Node::load($adherent_id);
	  /*$date_deb=\Drupal::request()->get("date_deb");
	  $date_fin=\Drupal::request()->get("date_fin");
	 ksm($date_deb);*/


	  return [
		"#theme"=>"adherent_content",
		"#adherent"=>$adherent->getTitle(),
		"#date_deb"=>\Drupal::request()->get("date_deb"),
		"#date_fin"=>\Drupal::request()->get("date_fin"),
	  ];
  }

}
