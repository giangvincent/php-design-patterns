<?php
require_once 'OAuth.php';
require_once 'TwitterClient.php';

class Demo {
  public static function show() {
    $oauth = new OAuth();
    $requestToken = $oauth->requestToken("appKey", "secret");
    $accessToken = $oauth->getAccessToken($requestToken);

    $twitterClient = new TwitterClient();
    $tweets = $twitterClient->getRecentTweets($accessToken);
  }
}
