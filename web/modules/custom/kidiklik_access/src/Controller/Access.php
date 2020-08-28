<?php

namespace Drupal\kidiklik_access\Controller;

use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\user\Entity\User;

class Access {
  /**
   * Randomly limit access to the things.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   */
  public function newsletterAccess(AccountInterface $account) {
  	$user=User::load($account->id());
  	
    if ($user->hasRole("administrateur_de_departement") || $user->hasRole("administrator") ) {
      return AccessResult::allowed();
    }
    return AccessResult::forbidden();
  }
}
