<?php

namespace Kilica\Test\Resource\Page;

use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

class Index extends ResourceObject
{
    use ResourceInject;

    public function onGet($cond = null)
    {
        $books = $this->resource->get->uri('app://self/namedSample')->request();

        $this['books'] = json_decode($books(), true);

        return $this;
    }
}
