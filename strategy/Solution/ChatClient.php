<?php
require_once 'EncryptionInterface.php';
require_once 'DesEncryption.php';
require_once 'AesEncryption.php';

class ChatClient {
    private $encryptionAlgorithm;

    public function __construct(EncryptionInterface $encryptionAlgorithm) {
        $this->encryptionAlgorithm = $encryptionAlgorithm;
    }

    public function setEncryption(EncryptionInterface $encryption)
    {
        $this->encryptionAlgorithm = $encryption;
    }

    public function send($message) {
        $this->encryptionAlgorithm->doEncrypt($message);

        echo ("Sending the encrypted message...");
    }
}

$desEncryption = new DesEncryption();
$aesEncryption = new AesEncryption();
$chatClient = new ChatClient($desEncryption);
$chatClient->send('abc');

$chatClient->setEncryption($aesEncryption);
$chatClient->send('aes');