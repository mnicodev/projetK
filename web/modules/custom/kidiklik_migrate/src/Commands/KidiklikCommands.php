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
   * @command kidiklik_migrate:client
   * @aliases kmc
   * @options arr An option that takes multiple values.
   * @options msg Whether or not an extra message should be displayed to the user.
   * @usage drush9_example:hello akanksha --msg
   *   Display 'Hello Akanksha!' and a message.
   */
  public function client($name, $options = ['msg' => FALSE]) {
    $rs=\Drupal::entityTypeManager()->getStorage("node")->loadByProperties(
      [
        "type"=>"contact",
        "field_type_contact"=>"client"
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
