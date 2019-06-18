<?php
/**
 * Created by PhpStorm.
 * User: eugene
 * Date: 6/17/19
 * Time: 9:09 PM
 */

namespace App\Entity\Address;


class AddressProvider implements AddressProviderInterface
{

  public function getAddressList() : array
  {
    return [
      [
        'id' => 1,
        'line1' => '',
        'city' => 'Kyiv',
      ],
      [
        'id' => 2,
        'line1' => '',
        'city' => 'Odesa',
      ],
      [
        'id' => 3,
        'line1' => 'line1',
        'city' => 'Vinnitsia',
      ],
      [
        'id' => 4,
        'line1' => 'line1',
        'city' => '',
      ],
      [
        'id' => 5,
        'line1' => 'line1',
        'city' => '',
      ],
    ];
  }

}
