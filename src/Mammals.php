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
   * @inheritDoc
   */
  public function produceMilk() {
    return $this->name . " can produce milk";
  }

  /**
   * @inheritDoc
   */
  public function hasFeather() {
    return false;
  }
}
