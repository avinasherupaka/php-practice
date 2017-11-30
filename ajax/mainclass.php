<?php


include 'testClass.php';


$avinashAccount = new BankAccount;

$avinashAccount->withDraw(30);
$avinashAccount->deposit(100);

echo $avinashAccount->displayBalance();
?>