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

namespace Gpupo\CnovaSdk\Entity\Product\Loads;

use Gpupo\CnovaSdk\Entity\ManagerAbstract;

class Manager extends ManagerAbstract
{
    protected $entity = 'Loads';

    protected $maps = [
        'fetch' => ['GET', '/loads/products?_offset={offset}&_limit={limit}&status={status}&createdAt={createdAt}'],
    ];

    protected function fetchDefaultParameters()
    {
        return [
            'status'    => '',
            'createdAt' => '',
        ];
    }

    protected function factoryEntityCollection($data)
    {
        return new Loads($data);
    }

}
