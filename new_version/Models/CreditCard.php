<?php
class CreditCard
{
    private $number;
    private $cvv;
    private $month;
    private $year;

    function __construct($number, $cvv, $month, $year)
    {
        $this->number = $number;
        $this->cvv = $cvv;
        $this->month = $month;
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getMonth()
    {
        return $this->month;
    }
}
