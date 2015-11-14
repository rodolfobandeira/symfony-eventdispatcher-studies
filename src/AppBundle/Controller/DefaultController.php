<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Event\FilterMyObjectEvent;
use AppBundle\Utils\MyObject;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request, $values = [])
    {
        $myOriginalObject = new MyObject(); // Creating our Object
        $myOriginalObject->setChangeMe('Hi! This is my value before the event touch me!'); // Setting a value

        $values = [
            $myOriginalObject->getChangeMe() // Saving the value on this array
        ];

        $event = new FilterMyObjectEvent($myOriginalObject); // Passing the object to be changed

        $eventDispatcher = $this->get('event_dispatcher'); // Where is the Event Dispacher? Here!
        $eventDispatcher->dispatch('app.event.load_my_page'); // Execute first event
        $eventDispatcher->dispatch('app.event.change_my_object', $event); // Execute second event


        // Here we append the value changed to compare in our view.
        array_push(
            $values, // The old values
            $myOriginalObject->getChangeMe()  // Here is the same call but after the event being dispached
        );


        return $this->render('AppBundle:default:index.html.twig', [
            'values' => $values
        ]);
    }
}
