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


<h3>PHP script to calculate and display average temperature, five lowest and highest temperatures.</h3> 

<?php
$month_temp = " 78, 60, 62, 68, 71, 68, 73,85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}   
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."<br>";

sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>";
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>


<?php include "footer.php" ?>
