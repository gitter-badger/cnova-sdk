<?php

/*
 * This file is part of gpupo/cnova-sdk
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gpupo\Tests\CnovaSdk\Entity\Order;

use Gpupo\Common\Entity\Collection;
use Gpupo\CnovaSdk\Entity\Order\Manager;
use Gpupo\CnovaSdk\Entity\Order\Order;
use Gpupo\Tests\CnovaSdk\TestCaseAbstract;

abstract class OrderTestCaseAbstract extends TestCaseAbstract
{
    protected function factoryManager()
    {
        return new Manager($this->factoryClient());
    }

    protected function getList()
    {
        if (!$this->hasToken()) {
            $list = [];
            foreach ($this->dataProviderOrderCollection() as $array) {
                $list[] = current($array);
            }

            return new Collection($list);
        }

        return $this->factoryManager()->fetch();
    }

    public function dataProviderOrderCollection()
    {
        $list = [];
        foreach ($this->dataProviderOrders() as $order) {
            $list[][] = new Order($order);
        }

        return $list;
    }
}
