<?php

class maths
{
  public $number1;
  public $number2;
  public $operator;

  public function __construct($numberone,$numbertwo,$operators)
  {
    $this->number1 = $numberone;
    $this->number2=$numbertwo;
    $this->operator = $operators;
  }

  public function domaths()
  {

    switch ($this->operator) {
      case 'none':
        return "please select operators to calculate instead of none.";
        break;
      case '+':
        $result =  $this->number1 + $this->number2;
        return $result;
        break;
        case '-':
        $result =  $this->number1 - $this->number2;
        return $result;
          break;
        case '/':
        $result =  $this->number1 / $this->number2;
        return $result;
        break;
        case '*':
        $result =  $this->number1 * $this->number2;
        return $result;
        break;
      default:
        echo "something went wrong";
        break;
    }

  }
}
