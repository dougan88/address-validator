<?php

namespace App\Validator;

interface ValidatorInterface
{
  public function validate(int $id) : bool;
}
