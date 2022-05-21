<?php

class OAuth {
  public function requestToken($appKey, $appSecret) {
    printf("Get a request token");
    return "requestToken";
  }

  public function getAccessToken($requestToken) {
    printf("Get an access token");
    return "accessToken";
  }
}
