<?php

/**
 * @file
 * Contains Drupal\snazzy\Tests\SnazzyController.
 */

namespace Drupal\snazzy\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the snazzy module.
 */
class SnazzyControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "snazzy SnazzyController's controller functionality",
      'description' => 'Test Unit for module snazzy and controller SnazzyController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests snazzy functionality.
   */
  public function testSnazzyController() {
    // Check that the basic functions of module snazzy.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
