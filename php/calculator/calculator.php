<?php
function performOperation($choice, $num1, $num2) {
    switch ($choice) {
        case 1:
            return $num1 + $num2;
        case 2:
            return $num1 - $num2;
        case 3:
            return $num1 * $num2;
        case 4:
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                echo "Error: Division by zero\n";
                return PHP_INT_MIN;
            }
        case 6:
            return pow($num1, $num2);
        case 7:
            if ($num1 >= 0) {
                return sqrt($num1);
            } else {
                echo "Error: Cannot calculate square root of a negative number\n";
                return PHP_INT_MIN;
            }
        case 8:
            return $num1 % $num2;
        case 9:
            return sin(deg2rad($num1));
        case 10:
            return cos(deg2rad($num1));
        case 11:
            return tan(deg2rad($num1));
        default:
            echo "Invalid choice\n";
            return PHP_INT_MIN;
    }
}

while (true) {
    echo "1. Addition\n";
    echo "2. Subtraction\n";
    echo "3. Multiplication\n";
    echo "4. Division\n";
    echo "5. Quit\n";
    echo "6. Exponentiation\n";
    echo "7. Square Root\n";
    echo "8. Modulus\n";
    echo "9. Sine\n";
    echo "10. Cosine\n";
    echo "11. Tangent\n";

    echo "Enter your choice (1/2/3/4/5/6/7/8/9/10/11): ";
    $choice = intval(fgets(STDIN));

    if ($choice == 5) {
        echo "Exiting the calculator.\n";
        break;
    }

    echo "Enter number: ";
    $num1 = floatval(fgets(STDIN));

    $num2 = 0; // Initialize num2

    if ($choice != 7 && $choice != 9 && $choice != 10 && $choice != 11) {
        echo "Enter number: ";
        $num2 = floatval(fgets(STDIN));
    }

    $result = performOperation($choice, $num1, $num2);

    if ($result != PHP_INT_MIN) {
        echo "Result: " . $result . "\n";
    }

    echo "\n";
}
?>