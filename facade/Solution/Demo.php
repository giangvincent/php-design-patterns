<?php

use Demo as GlobalDemo;

require_once 'TwitterService.php';

class Demo {
  public static function show() {
    $twitterService = new TwitterService('appKey', 'secret');
    $twitterService->getRecentTweets();
  }
}

$demo = new Demo();
$demo->show();