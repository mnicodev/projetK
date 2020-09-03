<?php

namespace Drupal\kidiklik_front\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class PageController.
 */
class PageController extends ControllerBase {
	

	
	
	/**
	 * return render node
	 */
	public function getContent($page) {
		//kint($page);
		if($page) {
			$term_dep=\Drupal::entityTypeManager()->getStorage("taxonomy_term")->load(get_term_departement());
	  	
		  	$node=\Drupal::entityTypeManager()
		  			->getStorage("node")
		  			->load(current($term_dep->get("field_".$page)->getValue())["target_id"]);
		  	//kint($node);
		  	$view=node_view($node,'full');
		  	$output=drupal_render($view);
		} else $output="";
		//exit;
		return $output;
		
		
	}

  /**
   * Content.
   *
   * @return string
   *   Return Hello string.
   */
  public function kidiklik() {
  	
  	
    return [
      '#type' => 'markup',
      '#markup' => $this->getContent("qui_est_kidiklik")
    ];
  }
  
  /**
   * Content.
   *
   * @return string
   *   Return Hello string.
   */
  public function recrute() {
    return [
      '#type' => 'markup',
      '#markup' => $this->getContent("kidiklik_recrute")
    ];
  }

	/**
   * Content.
   *
   * @return string
   *   Return Hello string.
   */
  public function annonceur() {
    return [
      '#type' => 'markup',
      '#markup' => $this->getContent("devenir_annonceur")
    ];
  }
  
  /**
   * Content.
   *
   * @return string
   *   Return Hello string.
   */
  public function fan() {
    return [
      '#type' => 'markup',
      '#markup' => $this->getContent("fan_de_kidiklik")
    ];
  }
}
