<?php

$directionService = new DirectionService(new Driving());
echo $directionService->getETA();
echo $directionService->getDirection();