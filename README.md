Event Dispatcher Studies
-

#### This is a simple project to study Event Dispatcher Component from Symfony PHP Framework

#### Setup:
- `git clone https://github.com/rodolfobandeira/symfony-eventdispatcher-studies.git`
- `cd symfony-eventdispatcher-studies`
- `composer install --prefer-dist`
- `php app/console server:run`
- Browse to the http://localhost:8000 URL


**Results:**

The idea was successfully achieved. Two events was registred as a service on the application. 
First we can see the event `LoadMyPage` executed.

The second event is responsible to change the object and send it back to the controller. It was a 
kind of hack injecting a new value to the object through events every time it' dispached. 

Really cool stuff!


output:

```
LoadMyPage event was dispatched!

ChangeMyObject event dispatched!

array:2 [▼
  0 => "Hi! This is my value before the event touch me!"
  1 => "Rodolfo Bandeira is the new value!"
]
```
