<?php
namespace AppBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class ChangeMyObjectListener extends Event {

    public function onChangeMyObject(Event $event) {

        // Here it will change my Object and return it to the controller modified.

        echo 'modified!';
    }
}
