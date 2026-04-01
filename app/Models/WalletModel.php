<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WalletModel extends Model
{
    protected $fillable = ['user_id', 'balance'];

    // Method to add funds to the wallet
    public function addFunds($amount)
    {
        $this->balance += $amount;
        $this->save();
    }

    // Method to withdraw funds from the wallet
    public function withdrawFunds($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            $this->save();
        } else {
            throw new Exception('Insufficient balance.');
        }
    }

    // Method to check wallet balance
    public function getBalance()
    {
        return $this->balance;
    }
}