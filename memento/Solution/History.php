<?php


class History {
    private $mementos = [];

    public function push(DocumentMemento $memento) {
        $this->mementos[] = $memento;
    }

    public function pop() {
        return array_pop($this->mementos);
    }

    public function getMemento($index) {
        return $this->mementos[$index];
    }

    public function getLastMemento() {
        return end($this->mementos);
    }

    public function getSize() {
        return count($this->mementos);
    }

    public function clear() {
        $this->mementos = [];
    }
}