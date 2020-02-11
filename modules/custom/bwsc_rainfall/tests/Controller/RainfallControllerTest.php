<?php

namespace Drupal\bwsc_rainfall\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the bwsc_rainfall module.
 */
class RainfallControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "bwsc_rainfall RainfallController's controller functionality",
      'description' => 'Test Unit for module bwsc_rainfall and controller RainfallController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests bwsc_rainfall functionality.
   */
  public function testRainfallController() {
    // Check that the basic functions of module bwsc_rainfall.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
