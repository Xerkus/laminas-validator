<?php

/**
 * @see       https://github.com/laminas/laminas-validator for the canonical source repository
 * @copyright https://github.com/laminas/laminas-validator/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-validator/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Validator\Barcode;

use Laminas\Validator\Barcode\AbstractAdapter;

class MyBarcode2 extends AbstractAdapter
{
    public function __construct()
    {
        $this->setLength(array(1, 3, 6));
        $this->setCharacters(128);
        $this->setChecksum('_mod10');
    }
}
