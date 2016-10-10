<?php
/**
 * Created by PhpStorm.
 * User: kilica
 * Date: 2016/10/10
 * Time: 8:30
 */

namespace Kilica\Test\Resource\App;


use BEAR\Resource\ResourceObject;
use Ray\Di\Di\Inject;
use Ray\Di\Di\Named;

class NamedSample extends ResourceObject
{
    /**
     * @param null $testkey
     * @return $this
     *
     * @Inject
     * @Named("test=test")
     */
    public function onGet($test=null)
    {
        echo ' hello!!! ' . $test;

        return $this;
    }

}
