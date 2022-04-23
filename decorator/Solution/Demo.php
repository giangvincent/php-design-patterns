<?php
require_once "Editor.php";

class Demo {
    public static function show() {
        $editor = new Editor();
        $editor->openProject("...");
    }
}

Demo::show();