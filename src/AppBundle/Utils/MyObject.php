<?php

namespace AppBundle\Utils;


class MyObject
{
    protected $changeMe;

    /**
     * @return mixed
     */
    public function getChangeMe()
    {
        return $this->changeMe;
    }

    /**
     * @param mixed $changeMe
     * @return MyObject
     */
    public function setChangeMe($changeMe)
    {
        $this->changeMe = $changeMe;
        return $this;
    }
}