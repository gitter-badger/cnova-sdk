<?php

/*
 * This file is part of gpupo/cnova-sdk
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @version 1
 */

namespace Gpupo\CnovaSdk\Entity\Product;

class ProductExtended extends Product
{
    public function getSchema()
    {
        return array_merge(parent::getSchema(), [
            'status'    => 'string',
            'href'      => 'string',
            'status'    => 'string',
            'createdAt' => 'string',
        ]);
    }
}
