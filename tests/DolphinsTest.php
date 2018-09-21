<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Classification\Dolphins;
use Classification\Types;

class DolphinsTest extends TestCase
{
  protected $dolphins;
  protected $name;

  /**
   * Fixtures
   * Sets up a state for our test
   * The setUp method is run before every test method
   *
   * @return void
   */
  public function setUp() {
    $this->name = 'Dolphins';
    $this->dolphins = new Dolphins();
  }

  /**
   * Fixtures
   * Resets our state once the test is completed
   * the tearDown method is run after every test method
   *
   * @return void
   */
  public function tearDown() {
    $this->dolphins = null;
  }

  public function testDolphinsName() {
    $this->assertEquals($this->name, $this->dolphins->name);
  }

  public function testDolphinsProduceMilk() {
    $this->assertEquals($this->name . ' can produce milk', $this->dolphins->produceMilk());
  }

  public function testCanSwim() {
    $this->assertEquals(true, $this->dolphins->canSwim());
  }
}
