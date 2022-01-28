<?php
class EmailNotifier implements Observer
{
    function update(Observable $observable, $info, $event)
    {
        echo "From EmailNotifier: ".$info." ". $event. "\n";
    }
}