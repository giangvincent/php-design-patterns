<?php

abstract class Calendar {
    abstract public function addEvent(Event $event, \DateTime $date);
}
