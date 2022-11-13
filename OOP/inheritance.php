<?php
 class Account{
    public $accountNumber;
    public $balance=1000;

    public function deposit($amount)
    {
        echo "Despositing " . $amount . '<br';
    }
 }

 $account = new Account();
//  $account->balance=10000;

 class CheckingAccount extends Account {
    public function transfer($x)
    {
        echo "You have " . $this->balance . ".00 in your account .Transerrfing  $x . So your total balance is " .( $this->balance + $x);
    }
 }
 $check = new CheckingAccount();

//  $check->deposit(10);

 $check->transfer(10);


//  TASK

 class Premium extends CheckingAccount
 {
    public $minimum=90;
 }
 $premium = new Premium();
 echo '<br>';

 $premium->transfer(20);
 echo '<br>';
 $premium->deposit(10);

 echo '<br>' .$premium->minimum; 

?>