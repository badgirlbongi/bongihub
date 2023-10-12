<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
 
</head>
<style>
body {
    background-color: rgb(163, 159, 159);
}

.calc {
    margin: auto;
    background-color: black;
    border: 2px solid whitesmoke;
    width: 47%;
    height: 630px;
    border-radius: 20px;
    box-shadow: 10px 10px 40px;
}
.maininput {
    background-color: black;
    border: 1px solid grey;
    height: 125px;
    width: 98.2%;
    font-size: 80px;
    color: whitesmoke;
}
.numbtn {
    padding: 30px 35px;
    border-radius: 50px;
    font-weight: 500;
    font-size: large;
    background-color: rgb(155, 154, 154);
}
.numbtn:hover {
    background-color: rgb(136, 133, 133);
    color: whitesmoke;
}
.calbtn {
    padding: 30px 35px;
    border-radius: 50px;
    font-weight: 500;
    font-size: 30px;
    background-color: orange;
}
.calbtn:hover {
    background-color: rgb(211, 140, 7);
    color: whitesmoke;
}
.c {
    padding: 30px 35px;
    border-radius: 50px;
    font-weight: 500;
    font-size: large;
    background-color: red;
}
.c:hover {
    background-color: rgb(188, 16, 16);
    color: whitesmoke;
}
.equal {
    padding: 30px 35px;
    border-radius: 50px;
    font-weight: 500;
    font-size: large;
    background-color: rgb(8, 181, 8);
}
.equal:hover {
    background-color: green;
    color: whitesmoke;
}
</style>
<body>
   
<?php 
include 'operators.php';

$cookie_name1 = "num";
$cookie_value1 = "";
$cookie_name2 = "op";
$cookie_value2 = "";

if (isset($_POST['num'])) {
    $num = $_POST['input'] . $_POST['num'];
} else {
    $num = "";
}
if (isset($_POST['op'])) {
    $cookie_value1 = $_POST['input'];
    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

    $cookie_value2 = $_POST['op'];
    setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");
    $num = "";
}
if (isset($_POST['equal'])) {
    $num = $_POST['input'];
    $calculate = new operators();

    switch ($_COOKIE['op']) {
        case "+":
            $result = $calculate->add($_COOKIE['num'], $_POST['input']);
            break;
        case "-":
            $result = $calculate->subtract($_COOKIE['num'], $_POST['input']);
            break;
        case "*":
            $result = $calculate->multiply($_COOKIE['num'], $_POST['input']);
            break;
        case "/":
            $result = $calculate->divide($_COOKIE['num'], $_POST['input']);
            break;
        case "%":
            $result = $calculate->modulus($_COOKIE['num'], $_POST['input']);
            break;
        case "Sin":
            $result = $calculate->sine($_POST['input']);
            break;
        case "Cos":
            $result = $calculate->cosine($_POST['input']);
            break;
        case "Tan":
            $result = $calculate->tangent($_POST['input']);
            break;
        case "SQR":
            $result = $calculate->squareroot($_POST['input']);
            break;
        case "Pi":
            $result = $calculate->pie();
            break;
        case "Exp":
            $result = $calculate->exponent($_COOKIE['num'], $_POST['input']);
            break;
    }
    $num = $result;
}
?>

<div class="calc">
    <form action="" method="post">
        <br>
        <input type="text" class="maininput" name="input" value="<?php echo @$num ?>">
        <br><br>
        <input type="submit" class="numbtn" name="num" value="7" onclick="appendToDisplay('7')">
        <input type="submit" class="numbtn" name="num" value="8" onclick="appendToDisplay('8')">
        <input type="submit" class="numbtn" name="num" value="9" onclick="appendToDisplay('9')">
        <input type="submit" class="calbtn" name="op" value="+" onclick="appendToDisplay('+')">
        <input type="submit" class="calbtn" name="op" value="Sin" onclick="appendToDisplay('sin')">
        <input type="submit" class="calbtn" name="op" value="Hist"><br><br>
        <input type="submit" class="numbtn" name="num" value="4" onclick="appendToDisplay('4')">
        <input type="submit" class="numbtn" name="num" value="5" onclick="appendToDisplay('5')">
        <input type="submit" class="numbtn" name="num" value="6" onclick="appendToDisplay('6')">
        <input type="submit" class="calbtn" name="op" value="-" onclick="appendToDisplay('-')">
        <input type="submit" class="calbtn" name="op" value="Tan" onclick="appendToDisplay('tan')">
        <input type="submit" class="calbtn" name="op" value="SQR" onclick="appendToDisplay('sqr')"><br><br>
        <input type="submit" class="numbtn" name="num"value="1" onclick="appendToDisplay('1')">
        <input type="submit" class="numbtn" name="num"value="2" onclick="appendToDisplay('2')">
        <input type="submit" class="numbtn" name="num"value="3" onclick="appendToDisplay('3')">
        <input type="submit" class="calbtn" name="op"value="*" onclick="appendToDisplay('*')">
        <input type="submit" class="calbtn" name="op"value="Cos" onclick="appendToDisplay('cos')">
        <input type="submit" class="calbtn" name="op"value="Exp" onclick="appendToDisplay('exp')"><br><br>
        <input type="submit" class="c" name="num"value="c" onclick="clearDisplay()">
        <input type="submit" class="numbtn" name="num"value="0" onclick="appendToDisplay('0')">
        <input type="submit" class="equal" name="equal"value="=" onclick="appendToDisplay('=')">
        <input type="submit" class="calbtn" name="op"value="/" onclick="appendToDisplay('/')">
        <input type="submit" class="calbtn" name="op"value="%" onclick="appendToDisplay('%')">
        <input type="submit" class="calbtn" name="op"value="Pi" onclick="appendToDisplay('pi')">

        </form>
    </div>
</body>
<script>
/*onclick functions*/
function appendToDisplay(value) {
    document.getElementById('input').value += value;
}

function clearDisplay() {
    document.getElementById('input').value = '';
}
</script>
</html>

