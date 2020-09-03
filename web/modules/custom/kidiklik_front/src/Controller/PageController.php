<?php

namespace Drupal\kidiklik_front\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class PageController.
 */
class PageController extends ControllerBase {

  /**
   * Content.
   *
   * @return string
   *   Return Hello string.
   */
  public function kidiklik() {
  	
  	$term_dep=get_term_departement();
  	//kint(current(\Drupal::entityTypeManager()->getStorage("taxonomy_term")->load($term_dep))["tid"]);
  	$node=\Drupal::entityTypeManager()
  			->getStorage("node")
  			->load(current(\Drupal::entityTypeManager()->getStorage("taxonomy_term")->load($term_dep))["tid"]);
  	kint($node);
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: content')
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
      '#markup' => $this->t(' recrute Implement method: content')
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
      '#markup' => $this->t('annonceur Implement method: content')
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
      '#markup' => $this->t('fan Implement method: content')
    ];
  }
}
