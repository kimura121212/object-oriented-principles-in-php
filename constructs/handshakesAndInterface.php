<?php

interface Newsletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    // protected $apiKey;

    // public function __construct($apiKey)
    // {
    //     $this->apiKey = $apiKey;
    // }

    public function subscribe($email)
    {
        die('subscribing with Campaign Montor');
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with Drip');
    }
}

class NewslettersSubscriptionsController
{
    public function store(Newsletter $newsletter)
    {
        $email = 'joe@example.com';
        $newsletter->subscribe($email);
    }
}

$controller = new NewslettersSubscriptionsController();

$controller->store(new CampaignMonitor());