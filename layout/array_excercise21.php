<?php include "header.php";?>
<form action="" method="get">
    <input type="number" placeholder="Enter your first number" name="num1">
    <input type="number" placeholder="Enter your second number" name="num2">
    <select name="operator">
    <option value="add">add</option>
    <option value="sub">subtract</option>
    <option value="mul">mulitply</option>
    <option value="div">Divide</option>
</select>
<input type="submit" name="cal" value="calculate">
</form>
<?php include "footer.php" ?>