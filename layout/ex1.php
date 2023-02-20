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
<?php echo date("d.m.Y")?><br>
<script>
   
document.write("Hello world this is javascript");


</script>
<noscript>
    please enable javascript to to view this content,
    </noscript>

<h3> 3.4 vaiable in php </h3>
<?php
$title1 = "PHP is interesting";
echo "<h1>". $title1. "</h1>";
?>

<script>
    //window.alert
    //window.alert("this will trigger an alert box");
  // window.alert(5+10);
  document.write("Hello this is interesting");
</script>

<h3> 3.5 Table & Variables </h3>
<button onclick="add()" >Click to add</button>
<hr>
<p id="place1" style="color:red; background-color:yellow;"></p> 
<span id="place2" style="color:red; background-color:green;"></p> 
<script>
    document.getElementById("place1").innerHTML= "this is will go to place1";
    document.getElementById("place2").innerHTML= "this is will go to span";
    </script>
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
<h2>Changing background-color</h2>
<form>
<input type="color" name="background"
 onchange="changeColor('background', this.value)">
</form>


<?php include "footer.php" ?>

