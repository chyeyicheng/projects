<?php
class IdGenerator
{
    private $id;
    public function __construct()
    {
        $this->id = $this->generatePrimeString();
    }
    private function generatePrimeString()
    {
        $primeString = '';
        $prime = 2;
        while (strlen($primeString) < 10005) {
            $isPrime = true;
            for ($i = 2; $i < $prime; $i++) {
                if ($prime % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                $primeString .= $prime;
            }
            $prime++;
        }
        return $primeString;
    }
    public function getId($n)
    {
        return substr($this->id, $n, 5);
    }

    public function getPrimeString()
    {
        return $this->id;
    }
}
