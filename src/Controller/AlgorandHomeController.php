<?php

declare(strict_types=1);

namespace Drupal\algorand\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Algorand Web3 routes.
 */
final class AlgorandHomeController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
