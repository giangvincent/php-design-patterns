<?php
require_once 'EmailClient.php';
require_once 'EmailProvider/GmailClient.php';
require_once 'EmailProvider/MicrosoftClient.php';

class Main {
    public function run() {
        // $gmailClient = new GmailClient();
        $microsoftClient = new MicrosoftClient();
        $emailClient = new EmailClient($microsoftClient);
        $emails = $emailClient->getEmails();
    }
}

$demo = new Main();
$demo->run();