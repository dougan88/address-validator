<?php

namespace App\Validator;

use App\Entity\Address\AddressProviderInterface;

class Validator implements ValidatorInterface
{
  private $addressProvider;

  public function __construct(AddressProviderInterface $addressProvider)
  {
    $this->addressProvider = $addressProvider;
  }

  public function validate(int $id) : bool
  {
    $addressList = $this->addressProvider->getAddressList();
    $matchingAddressList = array_filter($addressList, function ($value) use($id) {
      return $value['id'] === $id && !empty($value['city']);
    });

    return !empty($matchingAddressList);
  }
}