<?php

class OAuth {
  public function requestToken($appKey, $appSecret) {
    printf("Get a request token\n");
    return "requestToken";
  }

  public function getAccessToken($requestToken) {
    printf("Get an access token\n");
    return "accessToken";
  }
}
