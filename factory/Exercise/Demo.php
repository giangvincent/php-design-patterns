<?php

class Demo {
    public static function show() {
        $scheduler = new Scheduler();
        $scheduler->schedule(new Event());
    }
}
