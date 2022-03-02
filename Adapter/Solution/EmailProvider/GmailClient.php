<?php

require_once 'EmailProviderInterface.php';

class GmailClient implements EmailProviderInterface
{
    public function connect()
    {
        echo "Connecting to Gmail\n";
    }

    public function getEmails()
    {
        echo "Getting emails from Gmail\n";
    }

    public function disconnect()
    {
        echo "Disconnecting from Gmail \n";
    }
}