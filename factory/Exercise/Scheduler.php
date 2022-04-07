<?php

use \DateTime;

class Scheduler {
    private $calendar;

    public function schedule(Event $event) {
        $today = new DateTime();
        $this->calendar = new Calendar();
        $this->calendar->addEvent($event, $today);
    }
}
