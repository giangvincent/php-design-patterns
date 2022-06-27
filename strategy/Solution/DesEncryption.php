<?php

class DesEncryption implements EncryptionInterface {
    public function doEncrypt($message)
    {
        echo ("Encrypting message using DES");
    }
}