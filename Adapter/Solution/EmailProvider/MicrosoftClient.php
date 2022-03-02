<?php

require_once 'EmailProviderInterface.php';

class MicrosoftClient implements EmailProviderInterface
{
    public function connect()
    {
        echo "Connecting to Microsoft\n";
    }

    public function getEmails()
    {
        echo "Getting emails from Microsoft\n";
    }

    public function disconnect()
    {
        echo "Disconnecting from Microsoft\n";
    }
}