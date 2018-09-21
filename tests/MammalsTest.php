<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Classification\Mammals;
use Classification\Types;

/**
 * Although not required, tests should correspond to the classes they are testing
 * A good way to organize your test is to use the ClassNameTest.php naming scheme
 * But this is not always the case, and will differ based on how your project is structured
 *
 * By default PHPUnit command like tester will look for files with *Test.php name
 */
class MammalsTest extends TestCase
{
  protected $dolphins;
  protected $name;
  protected $newSpecies;

  /**
   * Fixtures
   * Sets up a state for our test
   * The setUp method is run before every test method
   *
   * @return void
   */
  public function setUp() {
    $this->name = 'Dolphins';
    $this->dolphins = new Mammals($this->name);
    $this->newSpecies = new Mammals();
  }

  /**
   * Fixtures
   * Resets our state once the test is completed
   * the tearDown method is run after every test method
   *
   * @return void
   */
  public function tearDown() {
    $this->name = null;
    $this->dolphins = null;
    $this->newSpecies = null;
  }

  public function testMammalType () {
    $this->assertEquals(Types::MAMMALIA, $this->dolphins->type);
  }

  public function testMammalsName()
  {
    $this->assertEquals($this->name, $this->dolphins->name);

  }

  public function testMammalsNoName () {
    $this->assertEquals('Mammals', $this->newSpecies->name);
  }

  public function testProduceMilk() {
    $produceMilk = $this->dolphins->produceMilk();
    $this->assertEquals($this->name . ' can produce milk', $produceMilk);
  }

  public function testHasFeather() {
    $hasFeather = $this->dolphins->hasFeather();
    $this->assertEquals(false, $hasFeather);
  }
}
