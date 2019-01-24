<?php
namespace Drupal\unittestexample;
/**
 * Defines a Unit class.
 */
class UnitSum {
  private $a = 0;
  private $b = 0;
  private $sum = 0;
  /**
   * @param int $length
   */
  public function setSum(int $a, int $b) {
    $this->sum = $a + $b;
  }
  /**
   * @return int
   *   The length of the unit.
   */
  public function getSum() {
    return $this->sum;
  }
}
