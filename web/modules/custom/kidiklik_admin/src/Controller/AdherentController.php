<?php

namespace Drupal\kidiklik_admin\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\views\Views;
use Drupal\node\Entity\Node;
use Drupal\Core\Routing\RouteMatch; 

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

  /**
   * Delete adherent
   */
  public function delete($nid) {
	
	$adherent=Node::load($nid);
	
	$adherent->delete();

	
	return new RedirectResponse(\Drupal::request()->query->get("destination"));
	
  }


	/**
	 * confirmation delete adherent
	 */
  public function confirme_delete($nid) {
	
	$adherent=Node::load($nid);
	/* recherche de contenu ayant l'adhérent enregistré */
	$nodes=\Drupal::entityTypeManager()->getStorage("node")->loadByProperties(["field_adherent"=>$nid]);
	if(count($nodes)) {
		$msg="Attention, cet adhérent est présent dans plusieurs contenus !";
	}
	
	
	return [
		"#theme"=>"adherent_confirme_delete",
		"#nid"=>$nid,
		"#message"=>$msg,
	  ];
	
	
  }
}
