<?php
   declare(strict_types = 1);
   include 'includes/autoloader.inc.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="post">
    <p>Simple Calculator</p>
    <input type="text" name="num1" placeholder="num1">
    <select name="oper">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="div">Divide</option>
        <option value="mul">Multiply</option>
    </select>
    <input type="text" name="num2" placeholder="num2">
    <button type="submit" name="submit">Calculate</button>
    </form> 
</body>
</html>