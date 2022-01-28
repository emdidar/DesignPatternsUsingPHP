<?php
class SMSNotifier implements Observer
{
    function update(Observable $observable, $info, $event)
    {
        echo "From SMSNotifier: ".$info." ". $event. "\n";
    }
}