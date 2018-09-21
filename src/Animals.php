<?php
namespace Classification;

use Classification\Types;

abstract class Animals
{
  public $type = Types::ANIMALIA;

  const HUMAN_READABLE_NAME = 'Animals';

  /**
   * Creates a new Animal
   *
   * @param string $name Provide a human readable name, if none given, a default will be use
   */
  public function __construct(string $name = null)
  {
    if ($name) {
      $this->name = $name;
    } else {
      $this->name = $this::HUMAN_READABLE_NAME;
    }
  }

  /**
   * Checks to see if animal produces milk
   *
   * @return mixed
   */
  abstract public function produceMilk();

  /**
   * Checks to see if animal has feather
   *
   * @return boolean
   */
  abstract public function hasFeather();
}
