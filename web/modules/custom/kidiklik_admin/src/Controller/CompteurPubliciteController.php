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
 * Class CompteurPubliciteController.
 * 
 * 
 */

class CompteurPubliciteController extends ControllerBase {
	
	public function content() {
		$database = \Drupal::database();
		$query=$database->select("node_field_data","n");
		$query->join("node__field_date","periode","n.nid=periode.entity_id");
		$query->join("node__field_departement","dep","dep.entity_id=n.nid");
		$query->join("node__field_format","f","f.entity_id=n.nid");
		$query->join("paragraph__field_date_de_debut","ddd","ddd.entity_id=periode.field_date_target_id");
		$query->join("paragraph__field_date_de_fin","ddf","ddf.entity_id=periode.field_date_target_id");
		$query->fields("n",["nid"]);
		$query->fields("ddd",["field_date_de_debut_value"]);
		$query->fields("ddf",["field_date_de_fin_value"]);
		$query->condition("n.type","publicite","=");
		$query->condition("dep.field_departement_target_id",get_term_departement(),"=");
		
		$pub=$query->distinct()->execute()->fetchAll();
		ksm($pub);
		
		return [
			"#markup"=>"ola",
		];
	}
}
