<?php
namespace Classification;

use Classification\Animals;

class Mammals extends Animals
{
  public $class = 'Mammalia';
  public $name;

  public function __construct($name = null) {
    if ($name) {
      $this->name = $name;
    } else {
      $this->name = 'Mammals';
    }
  }

  public function produceMilk() {
    return $this->name . " can produce milk";
  }

  public function hasFeather() {
    return false;
  }
}
