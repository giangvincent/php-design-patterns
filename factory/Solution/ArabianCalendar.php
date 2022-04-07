<?php

class ArabianCalendar extends Calendar {
    public function addEvent(Event $event, \DateTime $date)
    {
        echo "ArabianCalendar: Adding event " . $event->getName() . " to " . $date->format('Y-m-d');
    }
}