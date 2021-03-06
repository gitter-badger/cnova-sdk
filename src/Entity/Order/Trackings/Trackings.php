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

namespace Gpupo\CnovaSdk\Entity\Order\Trackings;

use Gpupo\CommonSdk\Entity\CollectionAbstract;

class Trackings extends CollectionAbstract
{
    public function factoryElement($data)
    {
        if (!empty($data)) {
            return  new Tracking\Tracking($data);
        }
    }
}
