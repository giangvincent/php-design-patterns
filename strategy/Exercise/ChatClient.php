<?php


class ChatClient {
    private $encryptionAlgorithm;

    public function __construct($encryptionAlgorithm) {
        $this->encryptionAlgorithm = $encryptionAlgorithm;
    }

    public function send($message) {
        if ($this->encryptionAlgorithm == "DES")
            echo ("Encrypting message using DES");
        else if ($this->encryptionAlgorithm == "AES")
            echo ("Encrypting message using AES");
        else
            throw new Exception("Unsupported encryption algorithm");

        echo ("Sending the encrypted message...");
    }
}
