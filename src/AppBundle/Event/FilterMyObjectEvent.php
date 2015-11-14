<?php

namespace AppBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use AppBundle\Utils\MyObject;

class FilterMyObjectEvent extends Event
{
    protected $myObject;

    public function __construct(MyObject $myObject)
    {
        $this->myObject = $myObject;
    }

    public function getMyObject()
    {
        return $this->myObject;
    }
}
