<?php
namespace Classification;

use Classification\Animals;
use Classification\Types;

class Mammals extends Animals
{
  public $type = Types::MAMMALIA;
  public $name;

  const HUMAN_READABLE_NAME = 'Mammals';

  /**
   * Creates a new Mammal
   *
   * @param string $name Provide a human readable name, if none given, a default will be use
   */
  public function __construct (string $name = null) {
    if ($name) {
      $this->name = $name;
    }
    else {
      $this->name = $this::HUMAN_READABLE_NAME;
    }
  }

  /**
   * @inheritDoc
   */
  public function produceMilk () {
    return $this->name . " can produce milk";
  }

  /**
   * @inheritDoc
   */
  public function hasFeather () {
    return false;
  }
}
