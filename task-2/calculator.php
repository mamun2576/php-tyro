<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculator</title>
</head>

<body>
  <form>
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator" id="">
      <option value="none">None</option>
      <option value="add">Add</option>
      <option value="subtract">Subtract</option>
      <option value="multiply">Multiply</option>
      <option value="divide">Divide</option>
    </select>
    <br />
    <button type="submit" name="submit" value="submit">Calculate</button>
  </form>
  <p>The answer is:</p>
  <?php
  if (isset($_GET['submit'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];
    if ($operator == 'none') {
      echo "You need to select a method";
    } elseif ($operator == 'add') {
      echo $num1 + $num2;
    } elseif ($operator == 'subtract') {
      echo $num1 - $num2;
    } elseif ($operator == 'multiply') {
      echo $num1 * $num2;
    } elseif ($operator == 'divide') {
      echo $num1 / $num2;
    }
  } ?>

</body>

</html>