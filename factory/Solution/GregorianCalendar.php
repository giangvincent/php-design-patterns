<?php

class GregorianCalendar extends Calendar {
    public function addEvent(Event $event, \DateTime $date) {
        echo "GregorianCalendar: Adding event " . $event->getName() . " to " . $date->format('Y-m-d');
    }
}