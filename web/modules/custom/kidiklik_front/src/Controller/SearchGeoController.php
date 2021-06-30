<?php

namespace Drupal\kidiklik_front\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class SearchGeoController.
 */
class SearchGeoController extends ControllerBase {

  /**
   * searchCity.
   *
   * @return string
   *   Return Hello string.
   */
  public function searchCity() {
		$search = \Drupal::request()->query->get('search');
		$database=\Drupal::database();
		
		$sql = "select * from villes where code_postal like '%".$search."' or commune like '%".$search."%' group by commune order by commune";
		if($search === null || $search === '')
			$sql.=' limit 0, 100';
		$query=$database->query($sql);
		$villes=$query->fetchAll();
		$output = [];
		foreach($villes as $ville) {
			$output[] = [
				'id' => (int)($ville->code_postal / 1000),
				'text' => $ville->commune,
			];
		}
	  
 	  
		return new JsonResponse(['results'=>$output ]);
  }

	/**
   * searchDep.
   *
   * @return string
   *   Return Hello string.
   */
  public function searchDep() {
		
		$deps=\Drupal::entityTypeManager()->getStorage("taxonomy_term")->loadByProperties(["vid"=>"departement"]);
		$output = [];
		
		foreach($deps as $dep) {
			if($dep->getName()!=="0") {
				$val = (int)$dep->getName();
				if($val<10) $val="0$val";
				$output[] = [
					'id' => $val,
					'text' => $dep->get('field_nom')->value." - ".$val,
				];
			}
		}
	  
 	  
		return new JsonResponse(['results'=>$output]);
  }
}
