<?php
require_once __DIR__ . "/CreditCard.php";

class Customer
{
    public $basket;
    private $payment;

    function __construct(public $name, public $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function addCreditCard(CreditCard $creditCard)
    {
        $this->paymentMethod = $creditCard;
    }

    // public function pay($total)
    // {
    //     if ($this->payment->year > date("Y") || ($this->payment->year === date("Y") && $this->payment->month <= date("m"))) {
    //         // $this->bastker->empty();
    //         return "La carta è valida";
    //     } else {
    //         return "errore di pagamento, carta scaduta";
    //     }
    // }
}
