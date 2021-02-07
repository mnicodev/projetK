<?php

namespace Drupal\kidiklik_migrate\Commands;

use Drush\Commands\DrushCommands;
use Drupal\Core\Database\Connection;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * A Drush commandfile.
 *
 * In addition to this file, you need a drush.services.yml
 * in root of your module, and a composer.json file that provides the name
 * of the services file to use.
 */
class KidiklikCommands extends DrushCommands {
  /**
   * @var \Drupal\Core\Database\Connection
   */
  private $connection;

  /**
  * Constructs a DefaultController object.
  *
  * @param \Drupal\Core\Database\Connection $database
  *   The database connection.
  */
  public function __construct(Connection $connection) {
    $this->connection=$connection;

  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('database')
    );
  }

  /**
   * Echos back hello with the argument provided.
   *
   * @param string $name
   *   Argument provided to the drush command.
   *
   * @command kidiklik_migrate:cmd
   * @aliases kdk
   * @options arr An option that takes multiple values.
   * @options msg Whether or not an extra message should be displayed to the user.
   * @usage drush9_example:hello akanksha --msg
   *   Display 'Hello Akanksha!' and a message.
   */
  public function commande($name=NULL, $options = ['dept' => FALSE,'contact'=>FALSE, "adherent"=>FALSE,"delcontact"=>FALSE,'ville'=>FALSE]) {
    if($name=="help") {
      echo "Migration de la base kidiklik : \n";
      echo "1er paramétre prend les valeurs client, adherent, contact, article, reportage, activite, agenda; jeu_concours\n";
      echo "les options possibles :\n";
      echo "- pour tous: --dept\n";
      echo "- pour client : --contact, --adherent, --delcontact\n";
      echo "- pour adherent : --contact, --delcontact\n";


    } else if($name=="dept") {
      $rs=\Drupal::entityTypeManager()
      ->getStorage("taxonomy_term")
      ->loadByProperties(["vid"=>"departement"]);
      foreach($rs as &$item) {
        //kint($item);
        if($item->get("field_code")->value) {
          $item->set("field_ref_dept",$item->getName());
          $item->setName($item->get("field_code")->value);
          //
          $item->save();
        }
        
      }

     
    }else if($name) {
     

      echo "Chargement de la base '$name' ...";
      $rs=\Drupal::entityTypeManager()->getStorage("node")->loadByProperties(
        [
          "type"=>$name,
          //"field_type_contact"=>"client"
        ]
      );
      echo count($rs);
      echo " ... OK\n";
      foreach($rs as $id_rs=>&$item) {
        //echo $item->id();echo "\n";
        foreach($options as $key=>$option) {
          
          if($option) {
            switch($key) {
              case 'ville':
                //$db= \Drupal::database();
                echo $item->id()."---";
                if(!empty($item) && $item->get("field_ref_ville")->value) {
                 // print($item->get("field_ref_ville")->value."-");
                 
                    echo $item->get("field_ref_ville")->value."\n";         
                
                  $query=$this->connection->query("select * from villes where id_ville='".(int)$item->get("field_ref_ville")->value."'");
                  $rs=$query->fetchAll();
                 // print_r("select * from villes where id_ville='".$item->get("field_ref_ville")->value."'\n");
  
                
                }

                break;
              case "delcontact":
                echo "Suppression des contacts ... ".$item->id();
                $item->__unset("field_contact");
                $item->save();
                echo " ... OK\n";
                break;
              case "dept":
              
                  
                
                
                  if($item->get("field_ref_dept")->value) {
                      echo "Traitement dept ";
                
                      $term=\Drupal::entityTypeManager()->getStorage("taxonomy_term")->loadByProperties(
                      [
                        "field_ref_dept"=>$item->get("field_ref_dept")->value,
                        "vid"=>"departement",
                        //"field_type_contact"=>"client"
                      ]
                      );
                      if($term) {
                        $rs[$id_rs]->__set("field_departement",current($term)->id());
                        $rs[$id_rs]->validate();
                        $rs[$id_rs]->save();
                        echo ".";
                      }
                      echo "OK\n";
                  }
                
                
                  
                  break;
              case "contact":
                if(!empty($item->get("field_ref_client")->value)) {
                  echo "Traitement contacts du $name ".$item->id()." ...\n";
                  echo "Chargement de la base contact clients ... ";
                  //echo $item->get("field_ref_client")->value;echo " \n";
                  $contacts=\Drupal::entityTypeManager()->getStorage("node")->loadByProperties(
                    [
                      "type"=>"contact",
                      "field_type_contact"=>$name,
                      "field_ref_".$name=>$item->get("field_ref_".$name)->value,
                    ]
                  );
                  echo count($contacts)." OK\n";
                  if(count($contacts)) {
                    echo "Enregistrement des contacts ... ";
                    $item->__set("field_contact",$contacts);
                    $item->validate();
                    $item->save();
                    echo " OK\n";
                  }
                  
                  
                }
                

                

                break;
            } // fin switch
          } // fin if option
          
        } // fin foreach options
      } // fin foreach rs
    }
  }

  /**
   * Echos back hello with the argument provided.
   *
   * @param string $name
   *   Argument provided to the drush command.
   *
   * @command kidiklik_migrate:adherent
   * @aliases kma
   * @options arr An option that takes multiple values.
   * @options msg Whether or not an extra message should be displayed to the user.
   * @usage drush9_example:hello akanksha --msg
   *   Display 'Hello Akanksha!' and a message.
   */
  public function adherent($name, $options = ['msg' => FALSE]) {
    $rs=\Drupal::entityTypeManager()->getStorage("node")->loadByProperties(
      [
        "type"=>"contact",
        "field_type_contact"=>"adherent"
      ]
    );
    kint(count($rs));
    if ($options['msg']) {
      $this->output()->writeln('Hello ' . $name . '! This is your first Drush 9 command.');
    }
    else {
      $this->output()->writeln('Hello ' . $name . '!');
    }
  }


}
