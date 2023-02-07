<?php include "header.php" ?>
<h1>3.1 Write a simple PHP script to print your information (Name and your groupid). </h1>
<?php
echo "Fatemeh Ajam <br>";
echo "BBCAP15";

?>  
<h1>3.2 Write PHP code to display the following message.</h1>
<?php
echo "Hello world ! My name is \"David\"";

?>
<h1> Current Date</h1>
<?php echo date("d.m.Y")?>
<h3> 3.4 vaiable in php </h3>
<?php
$title1 = "PHP is interesting";
echo "<h1>". $title1. "</h1>";
?>

<h3> 3.5 Table & Variables </h3>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "
<table >
<tr>
<th> S.N </th><th> Name </th><th> Grade</th>
</tr>
<tr>
<td> 1 </td><td> Pekka </td><td> $g1 </td>
</tr>
<tr>
<td> 2 </td><td>Johanna </td><td> $g2 </td>
</tr>
<tr>
<td> 3 </td><td> John </td><td> $g3 </td>
</tr>
</table>
";

?>
<h3> 4 Screenshot of the development environment </h3>
<img src="images/jpg.jpg " alt="Screen docker" style="width: 400px; height: 2   00px; margin-bottom:15px ;">
<?php include "footer.php" ?>


