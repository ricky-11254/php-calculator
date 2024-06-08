<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Calculator</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    fieldset {
      border: none;
    }
    legend {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    label {
      display: block;
      margin-top: 10px;
      font-size: 16px;
    }
    input[type="number"],
    select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <form method="post">
    <fieldset>
      <legend>CALCULATOR</legend>
      <label>Enter the first Number</label>
      <input type="number" name="number1">
      
      <label>Enter the second Number</label>
      <input type="number" name="number2">
      
      <label>Find the Percentage:</label>
      <input type="number" name="value" placeholder="Enter the Value">
      <input type="number" name="total_value" placeholder="Enter the Total Value">
      
      <label>Find the Squareroot</label>
      <input type="number" name="squareroot" placeholder="Enter the Number">
      
      <label>Find the Logarithm</label>
                <input type="number" name="logarithm" placeholder="Enter the Number">

      <label>Enter operation</label>
      <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="^">^ (Power)</option>
        <option value="%">%</option>
        <option value="sqrt">√ (Square Root)</option>
        <option value="log">log (Logarithm)</option>
      </select>

      <input type="submit" name="submit" value="Calculate">
    </fieldset>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $value = $_POST['value'];
    $total_value = $_POST['total_value'];
    $squareroot = $_POST['squareroot'];
    $logarithm = $_POST['logarithm'];

    function percentage($value, $total_value) {
        $result = ($value / $total_value) * 100;
        echo "<h2>Result: $result%</h2>";
    }

    function squareroot($number) {
        $result = sqrt($number);
        echo "<h2>Result: $result</h2>";
    }

    function logarithm($number) {
        if ($number > 0) {
            $result = log($number);
            echo "<h2>Result: $result</h2>";
        } else {
            echo "Error! There is no logarithm for a non-positive number.";
        }
    }

    if (!empty($number1) && !empty($number2)) {
        switch ($operation) {
            case '+':
                $result = $number1 + $number2;
                echo "<h2>Result: $result</h2>";
                break;
            case '-':
                $result = $number1 - $number2;
                echo "<h2>Result: $result</h2>";
                break;
            case '*':
                $result = $number1 * $number2;
                echo "<h2>Result: $result</h2>";
                break;
            case '/':
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                    echo "<h2>Result: $result</h2>";
                } else {
                    echo "Error! Division by zero.";
                }
                break;
            case '^':
                $result = pow($number1, $number2);
                echo "<h2>Result: $result</h2>";
                break;
            default:
                echo "Invalid operation.";
                break;
        }
    } elseif (!empty($value) && !empty($total_value) && $operation == '%') {
        percentage($value, $total_value);
    } elseif (!empty($squareroot) && $operation == 'sqrt') {
        squareroot($squareroot);
    } elseif (!empty($logarithm) && $operation == 'log') {
        logarithm($logarithm);
    } else {
        echo "<h2>Error! Please fill in the required fields for the selected operation.</h2>";
    }
  }
  ?>

</body>
</html>
