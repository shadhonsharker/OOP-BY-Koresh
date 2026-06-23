<?php

interface bankAccount{
    public function credit(int $amount,string $time,string $acc);
    public function debit(int $amount,string $time,string $acc, int $balance);

}

class ManageBankAccount implements bankAccount{

    public function credit(int $amount,string $time,string $acc){
        echo "Your account number is $acc and your account has been credited with $amount at $time\n";
    }
    public function debit(int $amount,string $time,string $acc, int $balance){
        if($balance>=$amount){
            echo "Your account number is $acc and your account has been debited with $amount at $time\n";
        }else{
            echo "Your account number is $acc and your account has insufficient balance to debit $amount at $time\n";
        }
    }

}