

<?php include "header.php" ?>

<h3>Excersise 3. In-class Task Variable & Operators 07.02.2023 (variable.php)</h3>
<h2>
Create a simple html form to get Firstname and Lastname from the user and use echo 
echo statement to print using  tag: Hello …., You are welcome to my site.  (Form Tutorial: https://www.youtube.com/watch?v=nLPlDHrsyYA  
</h2>
<form action="action.php" method="post">   
    <dive class="row">
        <div class="col" >
<p style="float:left;">
    First Name: <input type="text" name="fname" placeholder="First Name" class="form-control" > </p> </div> 
   <div class="col">   <p style="float:left; padding-left: 5px; "> 
    Last Name: <input type="text"   name="lname" placeholder="Last Name" class="form-control"> </p></div>
    </dive>
    
       
    Birth Date: <input type="date" name="bdate"><br>
       
    Salect fav Color: <input type="color" name="color"><br>
   

    <input type="submit" value="submit" >

<!--mdn web docs (mitoonim formhaye mokhtalefi peya konim)-->
</form><br>
<h3> Prepare a simple html table and apply bootstrap style to the table. 
    You may use the same table that you did in 3.5.
 </h3>

$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col"> Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pekka</td>
      <td>$g1 </td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Johanna</td>
      <td>$g2 </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>$g3</td>
    </tr>
  </tbody>
</table>
?>  
<h3>Write a PHP script with two string variables.
     Assign any text to these variables. Join them together.  
     Print the length of the string. (Hint: string function)</h3>
<?php
 
$A = 'Welcome   ';
$B = 'this page.';
$c = $A.$B;
echo" $c \n";
echo "<br>"; 
echo "The length of " . $c ." is: " .strlen($c);
?><br><br>

<h3>Write a script to add up the numbers: 298, 234, 46.
     Use variables to store these numbers and echo statement to output your answer.</h3>

     <?php
 
 $A1 = 298;
 $A2 = 234;
 $A3 = 46;
     $sum = $A1 + $A2 + $A3;
 echo  "The sum of $A1 + $A2 +$A3 is: $sum" ;
 ?><br><br>

 <h3>Write a PHP script to detect the browser being used to view your pages. 
    (Use predefined variables: $_SERVER)
</h3>
 <?php
echo $_SERVER['HTTP_USER_AGENT'];
?><br><br>

<h3>Write a PHP script in the footer section of your universal 
    footer to display the last modification time of a file. 

    <?php
$filename = 'footer.php';
if (file_exists($filename)) {
    echo "$filename was last modified: " . date ("l, dS F, Y, h:i a", filemtime($filename));
}
?><br>

<?php include "footer.php" ?>


