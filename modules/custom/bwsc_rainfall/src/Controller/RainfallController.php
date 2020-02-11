<?php

namespace Drupal\bwsc_rainfall\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class RainfallController.
 */
class RainfallController extends ControllerBase {

  /**
   * Fetchsites.
   *
   * @return string
   *   Return Hello string.
   */
  public function fetchSites() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: fetchSites')
    ];
  }

}
