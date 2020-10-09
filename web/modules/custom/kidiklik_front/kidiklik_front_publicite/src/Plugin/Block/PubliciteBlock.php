<?php

namespace Drupal\kidiklik_front_publicite\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\views\Views;

/**
 * Provides a 'PubliciteBlock' block.
 *
 * @Block(
 *  id = "publicite_block",
 *  admin_label = @Translation("Publicite block"),
 * )
 */
class PubliciteBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
	$view_pub=Views::getView("blocs_publicites");
		
	$view_pub->setDisplay("bloc_publicites");
		
	$view_pub->execute();

	$result = \Drupal::service('renderer')->render($view_pub->render());
		
		
    $build = [
		"#theme"=>'publicite_block',
		"#content" => $result,
		"#cache" => [
			"max-age"=>0,
			"contexts"=>[],
			"tags"=>[],
		],
		//"#markup" 
    ];
    

    return $build;
  }

}
