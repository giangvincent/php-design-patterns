<?php

interface EmailProviderInterface
{
    public function connect();
    public function getEmails();
    public function disconnect();
}