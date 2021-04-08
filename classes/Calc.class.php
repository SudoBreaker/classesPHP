<?php

class Calc{
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $ope,int $one,int $two){
        $this->operator = $ope;
        $this->num1 = $one;
        $this->num2 = $two;
    }

    public function calculate(){
        switch ($this->operator) {
            case 'add':
                $results = $this->num1 + $this->num2;
                return $results; 
                break;
            case 'sub':
                $results = $this->num1 - $this->num2;
                return $results; 
                break;
            case 'div':
                $results = $this->num1 / $this->num2;
                return $results; 
                break;
            case 'mul':
                $results = $this->num1 * $this->num2;
                return $results; 
                break;    
            default:
                echo "An Error Occured!";
                break;
        }
    }


}