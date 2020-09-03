<?php

namespace Drupal\kidiklik_admin\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;

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

}
