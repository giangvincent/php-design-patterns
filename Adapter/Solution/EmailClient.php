<?php

class EmailClient {
    private $emails;
    private $emailProvider;

    function __construct(EmailProviderInterface $provider) {
        $this->emailProvider = $provider;
    }

    public function getEmails()
    {
        $this->emailProvider->connect();
        $this->emails = $this->emailProvider->getEmails();
        $this->emailProvider->disconnect();
        return $this->emails;
    }
}