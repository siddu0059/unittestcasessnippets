<?php

namespace Drupal\Tests\unittestexample\Unit;

use Drupal\Core\Url;
use Drupal\Tests\UnitTestCase;
use Drupal\unittestexample\UnitSum;

/**
 * Simple test to ensure that main page loads with module enabled.
 *
 * @group unittestexample
 */
class UnitSumTest extends UnitTestCase {
  protected $unit;
  /**
   * Before a test method is run, setUp() is invoked.
   * Create new unit object.
   */
  public function setUp() {
    $this->unit = new UnitSum();
  }
  /**
   * @covers Drupal\unittestexample\Unit::setLength
   */
  public function testSetSum() {
    $this->assertEquals(0, $this->unit->getSum());
    $this->unit->setSum(4, 7);
    $this->assertEquals(11, $this->unit->getSum());
  }
  /**
   * @covers Drupal\unittestexample\Unit::getLength
   */
  public function testGetSum() {
    $this->unit->setSum(4, 7);
    $this->assertNotEquals(10, $this->unit->getSum());
  }
  /**
   * Once test method has finished running, whether it succeeded or failed, tearDown() will be invoked.
   * Unset the $unit object.
   */
  public function tearDown() {
    unset($this->unit);
  }
}
