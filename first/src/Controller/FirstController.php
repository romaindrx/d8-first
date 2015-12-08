<?php
/**
 * @file
 * Contains \Drupal\first\Controller\FirstController.
 */

namespace Drupal\first\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * FirstController.
 */
class FirstController extends ControllerBase{
  /**
   * Generates an example page.
   */
  public function first() {
    return array(
      '#markup' => $this->t('Hello, World!'),
    );
  }      
}
