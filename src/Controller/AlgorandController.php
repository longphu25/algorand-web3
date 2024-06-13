<?php

namespace Drupal\algorand\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class AlgorandController.
 *
 * @package Drupal\algorand\Controller
 */
class AlgorandController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function algo() {
    return [
      '#theme' => 'algo_page',
    ];
  }

}
