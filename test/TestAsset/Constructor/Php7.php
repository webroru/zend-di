<?php
/**
 * @see       https://github.com/zendframework/zend-di for the canonical source repository
 * @copyright Copyright (c) 2017 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-di/blob/master/LICENSE.md New BSD License
 */

namespace ZendTest\Di\TestAsset\Constructor;

class Php7
{
    public function __construct(string $stringDep, int $numDep, callable $callbacDep)
    {
    }
}