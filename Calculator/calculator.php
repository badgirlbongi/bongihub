<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

<style>
body {
    background-color: rgb(163, 159, 159);
}

.calc {
    /*margin: auto;*/
    left:0;
    background-color: black;
    border: 2px solid whitesmoke;
    width: 50%;
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
.history-box {
    position: fixed;
    top: 0;
    right: 0;
    background-color: black;
    width: 40%; /* Adjust the width as needed */
    border: 2px solid whitesmoke;
    border-radius: 20px;
    box-shadow: 10px 10px 40px;
}
.history-box h2 {
    text-align: center;
    color: whitesmoke;
    margin: 0;
    padding: 10px;
}
.history {
    width: 100%;
    height: 430px;
    background-color: black;
    font-weight: 500;
    font-size: large;
    color: whitesmoke;
    
}
</style>
</head>

<body>
<div class="calc">
    <form action="" method="post">
        <br>
        <input type="text" class="maininput" name="display" id="display" readonly>
        <br></br>
        <input type="button" class="numbtn" value="7" onclick="appendToDisplay('7')">
        <input type="button" class="numbtn" value="8" onclick="appendToDisplay('8')">
        <input type="button" class="numbtn" value="9" onclick="appendToDisplay('9')">
        <input type="button" class="calbtn" value="+" onclick="appendToDisplay('+')">
        <input type="button" class="calbtn" value="Sin" onclick="appendToDisplay('Math.sin(')">
        <input type="button" class="calbtn" value="History" onclick="showHistory()"><br><br>
        <input type="button" class="numbtn" value="4" onclick="appendToDisplay('4')">
        <input type="button" class="numbtn" value="5" onclick="appendToDisplay('5')">
        <input type="button" class="numbtn" value="6" onclick="appendToDisplay('6')">
        <input type="button" class="calbtn" value="-" onclick="appendToDisplay('-')">
        <input type="button" class="calbtn" value="Tan" onclick="appendToDisplay('Math.tan(')">
        <input type="button" class="calbtn" value="SQR" onclick="appendToDisplay('Math.sqrt(')"><br><br>
        <input type="button" class="numbtn" value="1" onclick="appendToDisplay('1')">
        <input type="button" class="numbtn" value="2" onclick="appendToDisplay('2')">
        <input type="button" class="numbtn" value="3" onclick="appendToDisplay('3')">
        <input type="button" class="calbtn" value="*" onclick="appendToDisplay('*')">
        <input type="button" class="calbtn" value="Cos" onclick="appendToDisplay('Math.cos(')">
        <input type="button" class="calbtn" value="Exp" onclick="appendToDisplay('Math.pow(')"><br><br>
        <input type="button" class="c" value="c" onclick="clearDisplay()">
        <input type="button" class="numbtn" value="0" onclick="appendToDisplay('0')">
        <input type="button" class="equal" value="=" onclick="calculate()">
        <input type="button" class="calbtn" value="/" onclick="appendToDisplay('/')">
        <input type="button" class="calbtn" value="%" onclick="appendToDisplay('%')">
        <input type="button" class="calbtn" value="Pi" onclick="appendToDisplay('Math.PI')">
        <input type="button" class="calbtn" value=")" onclick="appendToDisplay(')')">

        <div class="history-box">
        <h2>History</h2>
        <textarea id="historyDisplay" class="history" rows="5" cols="30" readonly></textarea><br><br>
    </div>
    </form>

    <script>
        var expressionArray = [];
        var historyArray = [];

        function appendToDisplay(value) {
            expressionArray.push(value);
            updateDisplay();
        }

        function clearDisplay() {
            expressionArray.pop(); // Remove the last element from the array
            updateDisplay();
        }

        function updateDisplay() {
            document.getElementById('display').value = expressionArray.join('');
        }

        function calculate() {
            var display = expressionArray.join('');
            try {
                var result = eval(display);
                document.getElementById('display').value = result;
                historyArray.push(display); //save the current expression in history
                expressionArray = [result]; // Update the array with the result
            } 
            catch (error) {
                document.getElementById('display').value = 'Error';
            }
        }

        function showHistory() {
            var historyDisplay = document.getElementById('historyDisplay');
            historyDisplay.value = historyArray.join('\n');
        }

    </script>
</div>
</body>
</html>
