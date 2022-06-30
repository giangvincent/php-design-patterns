<?php

interface AudioFilterInterface {
    public function FactSegmentFilter(FactSegment $factSegment);
    public function FormatSegmentFilter(FormatSegment $formatSegment);
}