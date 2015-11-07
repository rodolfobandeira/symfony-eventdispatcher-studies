Event Dispatcher Studies
==============

####Setup:
- `git clone https://github.com/rodolfobandeira/symfony-eventdispatcher-studies.git`
- `cd symfony-eventdispatcher-studies`
- `composer install --prefer-dist`
- `php app/console server:run`
- Browse to the http://localhost:8000 URL


**Results:**

You'll see the word *dispached* on the screen. That means the listener was registred as a service and it was dispached by the *indexAction* from *DefaultController*

---

**Todo:**

- Send an Object to the `onLoadMypage` method, change it and send it back to the controller.
- Explore more features available on Symfony2 Documentation about the Event Dispatcher component.
