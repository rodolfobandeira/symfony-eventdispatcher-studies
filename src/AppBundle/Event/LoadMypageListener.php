<?php
namespace AppBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class LoadMypageListener extends Event {

    public function onLoadMypage(Event $event) {
        echo '<p>LoadMyPage event was dispatched!</p>';
    }
}
