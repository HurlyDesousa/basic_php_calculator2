<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Basic PHP Calculator 2</title>
</head>

<body>
<form action="calc.php" method="POST">
  <input type="text" name="num1" placeholder="Number 1">
  <input type="text" name="num2" placeholder="Number 2">
  <select name="cal">
    <option value="add">Add</option>
    <option value="sub">Subtract</option>
    <option value="mul">Multiply</option>
    <option value="div">Divide</option>
  </select>
  <button type="submit">Calculate</button>
</form>

</body>

</html>
