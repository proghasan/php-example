<?php

class Account {
    private $accountHolderName;
    private $accountType;
    private $deposit;
    private $withdraw;
    private $initBalance;
    private $balance;

    public function __construct($accountHolderName, $accountType)
    {
        $this->accountHolderName = $accountHolderName;
        $this->accountType = $accountType;
    }

    public function getAccountHolderName()
    {
        return $this->accountHolderName;
    }

    public function getAccountType() {
        return $this->accountType;
    }

    public function setInitBalance($initBalance) {
        $this->initBalance = $initBalance;
    }

    public function setDeposit($amount)
    {
        return $this->deposit = $amount;
    }

    public function getDeposit()
    {
        return $this->deposit;
    }

    public function getWithdraw()
    {
        return $this->withdraw;
    }

    public function setWithdraw($amount)
    {
        $this->withdraw = $amount;
        // return $this->balance -= $amount;
    }

    public function balance()
    {
        return ($this->initBalance + $this->balance + $this->deposit) - $this->withdraw;
    }

    public function accountInfo() {
        return "Account Holder Name: {$this->getAccountHolderName()}\nAccount Type: {$this->getAccountType()}\nBalance: {$this->balance()}";
    }
}

// create account account
$account =  new Account('Mohammad Hasan', 'Saving');
//opening balance
$account->setInitBalance(100);
// opening balance show
echo "Opening Balance: {$account->balance()} \n";
//deposit amount
$account->setDeposit(50);
echo "Deposit Amount: {$account->getDeposit()} \n";
echo "Balance: {$account->balance()} \n";

// withdraw 
$account->setWithdraw(10);
echo "Withdraw Amount: {$account->getWithdraw()} \n";
echo "Balance: {$account->balance()} \n";

echo "-----------------------------------".PHP_EOL;
echo  $account->accountInfo();
