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

namespace Gpupo\Tests\CnovaSdk;

use Gpupo\CnovaSdk\Client\Client;
use Gpupo\Tests\CommonSdk\TestCaseAbstract as CommonSdkTestCaseAbstract;

abstract class TestCaseAbstract extends CommonSdkTestCaseAbstract
{
    public function factoryClient()
    {
        return Client::getInstance()
            ->setLogger($this->getLogger())
            ->setOptions([
                'client_id'     => $this->getConstant('CLIENT_ID'),
                'access_token'  => $this->getConstant('ACCESS_TOKEN'),
                'verbose'       => $this->getConstant('VERBOSE'),
            ]);
    }

    protected function hasToken()
    {
        return $this->hasConstant('ACCESS_TOKEN');
    }

    public function dataProviderProducts()
    {
        return $this->getResourceJson('fixture/Products.json');
    }

    public function dataProviderSkus()
    {
        return $this->getResourceJson('fixture/Skus.json');
    }

    public function dataProviderOrders()
    {
        return $this->getResourceJson('fixture/Orders.json');
    }
}
