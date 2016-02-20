<?php

/**
 * @file
 * Contains Drupal\snazzy\Controller\SnazzyController.
 */

namespace Drupal\snazzy\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class SnazzyController.
 *
 * @package Drupal\snazzy\Controller
 */
class SnazzyController extends ControllerBase {
  /**
   * Snazzy.
   *
   * @return string
   *   Return Hello string.
   */
  public function snazzy($param) {
    return [
        '#type' => 'markup',
        '#markup' => $this->t('Implement method: snazzy with parameter(s): $param')
    ];
  }

}
