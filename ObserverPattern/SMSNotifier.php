<?php
class SMSNotifier implements Observer
{
    function update(Observable $observable, $info, $event)
    {
        echo $info." ". $event. "\n";
    }
}