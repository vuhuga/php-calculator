<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST["operation"];
        $result = "";

        switch ($operation) {
            case "add":
                $result = $number1 + $number2;
                break;
            case "subtract":
                $result = $number1 - $number2;
                break;
            case "multiply":
                $result = $number1 * $number2;
                break;
            case "divide":
                if ($number2 == 0) {
                    $result = "Error: Cannot divide by zero";
                } else {
                    $result = $number1 / $number2;
                }
                break;
            case "exponent":
                $result = pow($number1, $number2);
                break;
            case "percentage":
                $result = ($number1 / 100) * $number2;
                break;
            case "sqrt":
                $result = sqrt($number1);
                break;
            case "log":
                $result = log($number1);
                break;
        }

        header("Location: index.html?result=" . $result);
    }
?>
