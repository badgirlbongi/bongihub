<?php
class operators {
    public function add($cookie_value1, $cookie_value2) {
        return $cookie_value1 + $cookie_value2;
    }

    public function subtract($cookie_value1, $cookie_value2) {
        return $cookie_value1 - $cookie_value2;
    }

    public function multiply($cookie_value1, $cookie_value2) {
        return $cookie_value1 * $cookie_value2;
    }

    public function divide($cookie_value1, $cookie_value2) {
        return $cookie_value1 / $cookie_value2;
    }
    public function modulus($cookie_value1, $cookie_value2) {
        return fmod($cookie_value1, $cookie_value2);
    }

    public function squareroot($cookie_value1) {
        return sqrt($cookie_value1);
    }

    public function exponent($cookie_value1) {
        return pow($cookie_value1, 2);
    }

    public function cosine($cookie_value1) {
        return cos($cookie_value1);
    }

    public function sine($cookie_value1) {
        return sin($cookie_value1);
    }

    public function tangent($cookie_value1) {
        return tan($cookie_value1);
    }

    public function pie() {
        return pi();
    }
}
?>
