<?php
include_once 'BankAccount.php';
include_once 'SMSNotifier.php';

$bankAccount = new BankAccount();
$smsNotifier = new SMSNotifier();

interface Observable
{
    function attach(Observer $observer);
    function notify($info, $event);
}
interface Observer
{
    function update(Observable $observable, $info, $event);
}

$bankAccount->attach($smsNotifier);
$bankAccount->withdraw(500);
$bankAccount->deposit(1000);