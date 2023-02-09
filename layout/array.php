<?php include "header.php";?>
<h3> 1. Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
</h3><br>
<?php
$courses=array("PHP ", "HTML ", "JavaScript ", "CMS ", "Project ");
for ($y = 0; $y < count($courses); $y++) {
    echo "<li> $courses[$y]";
}
?>
<h3> 2. Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
</h3><br>
<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");

unset($courses1["2"]);
 echo implode( ',',$courses1)
?>

<h3>3. Sort the following array </h3><br>
<h3>a) ascending order sort by value</h3>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3);
echo implode( ',',$courses3)
?>
<h3>b) ascending order sort by Key</h3>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
ksort($courses3);
echo implode( ',',$courses3)
?>
<h3>c) descending order sort by Value</h3>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
arsort($courses3);
echo implode( ',',$courses3)
?>
<h3>d) descending order sort by Key</h3>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
krsort($courses3);
echo implode( ',',$courses3)
?>

<h3>4. Change the following array's all values to upper case.</h3>

<?php
$courses4=array("php", "html", "javascript", "cms", "project");
for($y=0 ; $y<count($courses4) ; $y++){
    $courses4[$y] = strtoupper($courses4[$y]);
   }
   echo implode(',' ,$courses4)
?>

<h3>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h3>

<?php
$fcolor = array(
  "red" => "#ff0000",
  "green" => "#00ff00",
  "blue" => "#0000ff",
);

$arraykey = array_keys($fcolor);

for ($y = 0; $y < count($arraykey); $y++) {
    echo $arraykey[$y] . "( " . $fcolor[$arraykey[$y]] ." )". "<br>";
}
?>


<h3>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h3> 

<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
//The explode function receives a string and divides it into different parts based on a delimiter and places it inside the array cells.
//The explode() function breaks the text string and places each element in a cell of the array
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
//count() function is an in-built function available in PHP, which counts and returns the number of elements in an array. 
//It also counts the number of properties in an object.
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
//The sort() function sorts an indexed array in ascending order.
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
//Considering that the $temp_array_length function previously sorted the temperature in ascending order, 
//this loop takes the last 5 and shows that they are five highest temperatures.
//For example, if we have 50 temperatureS , it will add 46 first and then one by one it adds to it.
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>



<?php include "footer.php" ?>
