<?php
require_once 'TwitterClient.php';
require_once 'OAuth.php';

class TwitterService {
    private $appKey;
    private $appSecret;

    function __construct($appKey, $appSecret) {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
    }

    public function getRecentTweets() {
        $twitterClient = new TwitterClient();
        $twitterClient->getRecentTweets($this->getAccessToken());
    }

    private function getAccessToken() {
        $oauth = new OAuth();
        $requestToken = $oauth->requestToken($this->appKey, $this->appSecret);
        return $oauth->getAccessToken($requestToken);
    }
}