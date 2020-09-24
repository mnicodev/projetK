<?php

namespace Drupal\kidiklik_admin\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\AfterCommand;
use Drupal\Core\Ajax\CssCommand;
use Drupal\views\Views;
use Drupal\node\Entity\Node;
/**
 * Class ContentController.
 */
class ContentController extends ControllerBase {

  /**
   * Redirect.
   *
   * @return string
   *   Return Hello string.
   */
  public function pages() {
  	$dep=get_term_departement();
  	$response = new RedirectResponse("/taxonomy/term/".$dep."/edit");
  	$response->send();
  	return;
   /* return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: redirect')
    ];*/
  }
  
  /**
   * lance une action sur un noeud en ajax
   * @return Ajax response
   * 
   */
   public function action($action, $node_id){
	  
		$node=Node::load($node_id);
		if($action=="status") {
			if($node->get("status")->value) {
				$node->set("status",false);
				$css=["background"=>"red"];
			} else {
				$node->set("status",true);
				$css=["background"=>"green"];
			}
		}	
		
		$node->save();
		
		$response=new AjaxResponse();
		$Selector = '.node-status-'.$node_id; 
		

		$response->addCommand(new CssCommand($Selector, $css));
		
		
		
		return $response;
	
  }

}
