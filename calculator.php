<?php

declare(strict_types = 1);

class Calculator
{
    // properties
    public $operator;
    public $num1;
    public $num2;

    // set values with construct
    public function __construct(string $op, int $firstNum, int $secondNum)
    {
        $this->operator = $op;
        $this->num1 = $firstNum;
        $this->num2 = $secondNum;
    }

    // method that calculates
    public function calculate()
    {
        switch ($this->operator) {
            case 'divide':
                return $this->num1 / $this->num2;
                break;
            case 'multiply':
                return $this->num1 * $this->num2;
                break;
            case 'add':
                return $this->num1 + $this->num2;
                break;
            case 'minus':
                return $this->num1 - $this->num2;
                break;

            default:
               return "Operator Not Found !";
                break;
        }
    }
}

if (isset($_POST['calc-btn'])) {
    // print_r($_POST);
    $num1 = (int)$_POST['num1'];
    $operator = $_POST['operator'];
    $num2 = (int)$_POST['num2'];

    // instaniate calculator class
    $calc = new Calculator($operator, $num1, $num2);
    try {
        echo $calc->calculate();
    } catch (TypeError $e) {
        echo "Error : " . $e->getMessage();
    }
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <center>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" style="border: 1px solid black; padding:1rem;">
            <input type="number" placeholder="Enter First Number" name="num1"> <br><br>
            <select name="operator" id="">
                <option value="divide">Divide</option>
                <option value="multiply">Multiply</option>
                <option value="add">Addition</option>
                <option value="minus">Subtraction</option>
            </select> <br><br>
            <input type="number" placeholder="Enter Second Number" name="num2"> <br><br>

            <button type="submit" name="calc-btn">Calculate</button>

        </form>
    </center>
</body>

</html>