<?php
namespace Classification;

use Classification\Mammals;

class Dolphins extends Mammals
{
  public function __construct()
  {
    parent::__construct('Dolphins');
  }

  public function canSwim() {
    return true;
  }
}
