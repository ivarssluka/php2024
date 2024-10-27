<?php

declare(strict_types=1);
class Transaction // Common convention is to use PascalCase and name the class after the filename
{
    private float $amount; // these are access modifiers - private/public/protected
    private string $description; // Type hinting is recommended but not mandatory

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate): Transaction
    {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }

    public function applyDiscount(float $rate): Transaction
    {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function __destruct()
    {
        echo 'Destruct ' . $this->description . '<br/>';
    }
}
// You can create object from class in the same file after closing bracket, but it is not recommended