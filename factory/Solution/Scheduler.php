<?php

class Scheduler {
    private $calendar;

    public function __construct(
        Calendar $calendar
    ) {
        $this->calendar = $calendar;
    }

    public function schedule(Event $event) {
        $today = new \DateTime();
        $this->calendar->addEvent($event, $today);
    }
}
