<?php
require_once 'Element.php';

interface ExportFormat {
    public function getContent($elements);
}