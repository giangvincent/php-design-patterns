<?php


class History {
    private $mementos = [];

    public function addMemento(DocumentMemento $memento) {
        $this->mementos[] = $memento;
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

    public function toString() {
        $str = "";
        foreach ($this->mementos as $memento) {
            $str .= $memento->toString() . "\n";
        }
        return $str;
    }

    public function __toString() {
        return $this->toString();
    }

    public function save(Document $document) {
        $this->addMemento($document->createMemento());
    }

    public function undo(Document $document) {
        $memento = $this->getLastMemento();
        if ($memento) {
            $document->restore($memento);
            array_pop($this->mementos);
        }

        return $memento;
    }
}