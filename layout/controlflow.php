

<?php include "header.php" ?>
<h1>In-class Task Control flow and loops 08.02.2023 (controlflow.php)</h1><br>

<h3>Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays</h3><br>


<?php
  $month = date("F");
  if ($month == 'August')
  {
    echo 'It\'s August, so it\'s still holiday.';
  }
  else
  {
    echo 'Not August, this is Month-name so I don\'t have any holidays.';
  }
?> 

<h3> Assign colour red to a variable name $color and check to print one the following responses (if else statement)
The color is red. 
The color is not red.</h3>

<?php
$color = "red";

if($color=='red')
{echo 'The color is red.';}
else
{echo 'The color is not red.';}

?>


<h3>Write a program to grade students based on their total score for a subject. Use variable to hold the total score. </h3>
<?php

$grade ="95";
if ($grade> 80)
{
    echo  'Excellent';
}
else
{
    if ($grade> 70 && $grade <= 80)
    {
        echo 'Great';
    }
    else
    {
        if ($grade > 60 && $grade <= 70)
        {
            echo 'Good ';
        }
        else
        {
            if ($grade > 50 && $grade < 60)
            {
                echo 'pass';
            }
            if ($grade<50)
            {
                echo'fail';
            }
        }
    }
}
 
?>

<h3>Write a program to get inputs (age and name) from the user and based on their age, 
    decide if he/she is eligible for voting.</h3>

<form action="actionn.php" method="post">   
    <dive class="row">
        <div class="col" >
<p style="float:left;">
    First Name: <input type="text" name="fname" placeholder="First Name" class="form-control" > </p> </div> 
   <div class="col">   <p style="float:left; padding-left: 5px; "> 
    Last Name: <input type="number"   name="Age" placeholder="Age" class="form-control"> </p></div>
    </dive>
    <input type="submit" value="submit" >
</form><br>

<h3>In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
Use Switch statement with strops function to print the name of the browser as below: 
</h3>
<?php
$browser = $_SERVER['HTTP_USER_AGENT'];

    switch ($httpUA) 

    {
    case strpos($browser, "Edg") == true;

        echo "<br> You are using Microsoft Edge";
        break;

    case strpos($browser, "Chrome") == true;

        echo "<br> You are using Goolge Chrome";
        break;
    
    case strpos($browser, "Firefox") == true;

        echo "<br> You are using Mozila Firefox";
        break;
    }
?>
<?php include "footer.php" ?>
  

