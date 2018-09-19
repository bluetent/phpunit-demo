<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Classification\Mammals;

class MammalsTest extends TestCase
{
  public function testMammalsName()
  {
    $name = 'Dolphins';
    $dolphins = new Mammals($name);

    $this->assertEquals($name, $dolphins->name);

  }

  public function testMammalsNoName() {
    $newSpecies = new Mammals();

    $this->assertEquals('Mammals', $newSpecies->name);
  }

  public function testProduceMilk() {
    $name = 'Dolphins';
    $dolphins = new Mammals($name);
    $produceMilk = $dolphins->produceMilk();

    $this->assertEquals('Dolphins can produce milk', $produceMilk);
  }

  public function testHasFeather() {
    $name = 'Dolphins';
    $dolphins = new Mammals($name);
    $hasFeather = $dolphins->hasFeather();

    $this->assertEquals(false, $hasFeather);
  }
}
