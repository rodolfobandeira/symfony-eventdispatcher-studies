<?php
namespace AppBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use AppBundle\Event\FilterMyObjectEvent;
use AppBundle\Utils\MyObject;

class ChangeMyObjectListener extends Event {

    public function onChangeMyObject(FilterMyObjectEvent $event) {

        $myObject = $event->getMyObject();

        $myObject->setChangeMe('Rodolfo Bandeira is the new value!');

        echo '<p>ChangeMyObject event dispatched!</p>';
    }
}
