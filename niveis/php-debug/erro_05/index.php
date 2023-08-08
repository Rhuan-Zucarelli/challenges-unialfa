<?php 
class BankAccount {
    private $balance;

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient balance.";
        }
    }

   public function getbalance($balance){
        $this->balance = $balance;
   } 
}

$account = new BankAccount();
$account->deposit(100);
$account->withdraw(50);
echo $balance;

?>