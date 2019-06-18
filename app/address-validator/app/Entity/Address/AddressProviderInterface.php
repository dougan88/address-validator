<?php

namespace App\Entity\Address;

interface AddressProviderInterface
{

  public function getAddressList() : array;
}