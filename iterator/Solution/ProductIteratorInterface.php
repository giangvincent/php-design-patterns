<?php

interface ProductIteratorInterface {
    public function hasNext();
    public function current();
    public function next();
}