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

namespace Gpupo\CnovaSdk\Entity;

use Gpupo\Common\Entity\Collection;

/**
 * @codeCoverageIgnore
 */
final class MetadataContainer extends MetadataContainerAbstract
{
    protected function getKey()
    {
        return 'foo';
    }

    protected function factoryEntity(array $data)
    {
        return new Collection($data);
    }
}
