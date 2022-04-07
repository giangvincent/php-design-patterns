<?php

require_once 'Calendar.php';
require_once 'Event.php';
require_once 'ArabianCalendar.php';
require_once 'Scheduler.php';
require_once 'GregorianCalendar.php';

class Demo {
    public static function show() {
        $scheduler = new Scheduler(new ArabianCalendar());
        $scheduler->schedule(new Event('New Year'));

        $scheduler = new Scheduler(new GregorianCalendar());
        $scheduler->schedule(new Event('New Year'));
    }
}

$demo = new Demo();
$demo->show();