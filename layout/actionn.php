<?php include "header.php";

$fname =$_POST['fname'];
$age =$_POST['Age'];


if($age>=18){
    echo $fname +"is eligible for voting.";
}
else { echo $fname +"is not eligible for voting.";}
?>
