<?php

class BankAccount implements Observable
{
    private $observers=[];
    function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }
    function notify($info, $event)
    {
        foreach($this->observers as $observer)
        {
            $observer->update($this, $info, $event);
        }
    }
    function withdraw($money)
    {
        $this->notify($money, 'MONEY_WITHDRAW');
    }
    function deposit($money)
    {
        $this->notify($money, 'MONEY_DEPOSIT');
    }
}