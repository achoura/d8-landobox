<?php

namespace Drupal\bwsc_rainfall\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'RainfallDataBlock' block.
 *
 * @Block(
 *  id = "rainfall_data_block",
 *  admin_label = @Translation("Rainfall Data React App"),
 * )
 */
class RainfallDataBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [
      '#markup' => $this->t('Rainfall Data Block!'),
    ];

    return $build;
  }

}
