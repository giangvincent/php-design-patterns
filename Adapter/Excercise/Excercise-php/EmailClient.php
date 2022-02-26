<?php

class EmailClient
{
    private $emailProviders = [];

    public function addProvider(EmailProvider $emailProvider)
    {
        $this->emailProviders[] = $emailProvider;
    }

    public function downloadEmails()
    {
        foreach ($this->emailProviders as $emailProvider) {
            $emailProvider->downloadEmails();
        }
    }
}
