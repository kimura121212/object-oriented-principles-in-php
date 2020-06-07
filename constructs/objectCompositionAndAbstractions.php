<?php

class Subscription
{
    protected Gateway $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }
    public function create()
    {

    }

    public function cancel()
    {
        $this->gateway->findCustomer();

    }

    public function invoice()
    {

    }

    public function swap($newPlan)
    {

    }
}

interface Gateway
{
    public function findCustomer();
    public function findStripeSubscriptionByCustomer();
}

class StripeGateway implements Gateway
{
    public function findCustomer()
    {

    }

    public function findStripeSubscriptionByCustomer()
    {

    }
}

class BraintreeGateway implements Gateway
{
    public function findCustomer()
    {

    }

    public function findStripeSubscriptionByCustomer()
    {

    }
}

new Subscription(new BraintreeGateway());