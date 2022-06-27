<?php

class AesEncryption implements EncryptionInterface {
    public function doEncrypt($message)
    {
        echo ("Encrypting message using AES");
    }
}