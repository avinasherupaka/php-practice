<?php



class BankAccount{

public $balance = 100.5;


const cashback = 3.14; // this is a static and can be directly over class name need not be/cannot be accesed via object creation
public function displayBalance(){

return 'Balance: '.$this->balance;
}


public function withDraw($amount){


	 $this->balance = $this->balance - $amount;
}


public function deposit($amount){


	 $this->balance = $this->balance + $amount + self::cashback;// this is how you access the constant
}

}


$avinashAccount = new BankAccount;

$avinashAccount->withDraw(30);
$avinashAccount->deposit(100);

echo $avinashAccount->displayBalance();


?>