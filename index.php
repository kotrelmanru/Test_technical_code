<!DOCTYPE html>
<html>
<head>
    <title>Form dan Button</title>
</head>
<body>
    <form>
        <label for="number">Masukkan Angka:</label>
        <input type="text" id="number" name="number">
        <button type="button" onclick="generateGanjil()">Generate Bilangan Ganjil</button>
        <button type="button" onclick="generatePrima()">Generate Bilangan Prima</button>
        <button type="button" onclick="generateSegitiga()">Generate Segitiga</button>
    </form>
    <div id="result"></div>

    <script>
        function generateGanjil() {
            var numberInput = document.getElementById('number').value;
            if (validateNumber(numberInput)) {
                var result = "";
                for (var i = 1; i <= numberInput; i += 2) {
                    result += i + " ";
                }
                document.getElementById('result').innerHTML = "Bilangan Ganjil: " + result;
            } else {
                document.getElementById('result').innerHTML = "Masukkan angka yang valid.";
            }
        }

        function generatePrima() {
            var numberInput = document.getElementById('number').value;
            if (validateNumber(numberInput)) {
                var result = "";
                for (var i = 2; i <= numberInput; i++) {
                    if (isPrima(i)) {
                        result += i + " ";
                    }
                }
                document.getElementById('result').innerHTML = "Bilangan Prima: " + result;
            } else {
                document.getElementById('result').innerHTML = "Masukkan angka yang valid.";
            }
        }

        function generateSegitiga() {
            var numberInput = document.getElementById('number').value;
            if (validateNumber(numberInput)) {
                var result = "";
                for (var i = 1; i <= numberInput; i++) {
                    for (var j = 1; j <= i; j++) {
                        result += j + " ";
                    }
                    result += "<br>";
                }
                document.getElementById('result').innerHTML = "Segitiga: <br>" + result;
            } else {
                document.getElementById('result').innerHTML = "Masukkan angka yang valid.";
            }
        }

        function validateNumber(number) {
            return !isNaN(number) && number !== "";
        }

        function isPrima(number) {
            for (var i = 2; i < number; i++) {
                if (number % i === 0) {
                    return false;
                }
            }
            return number > 1;
        }
    </script>
</body>
</html>
