<?php
namespace Classification;

use Classification\Types;

abstract class Animals
{
  public $type = Types::ANIMALIA;

  const HUMAN_READABLE_NAME = 'Animals';

  /**
   * Checks to see if animal produces milk
   *
   * @return mixed
   */
  abstract public function produceMilk ();

  /**
   * Checks to see if animal has feather
   *
   * @return boolean
   */
  abstract public function hasFeather ();
}
