<?php
$title = "Update your info";
include '../layout/header.php';
$a = $_GET['id'];
include 'db.php';
$result = mysqli_query($conn,"select * from studentinfo 
where id= '$a'");
$row =mysqli_fetch_array($result);
?>
 <h2>Update your information below </h2>

 
<form name = "update" method = "post" action = "">

    <input type ="text" name ="fname" placeholder="First Name" required value = "<?php echo $row['fname'];?>"> <br><br>
    <input type ="text" name ="lname" placeholder="Last Name" required value = "<?php echo $row['lname'];?>"> <br><br>
    <input type ="text" name ="city" placeholder="City" required value = "<?php echo $row['city'];?>"><br><br>
        
        <select name="groupid" value = "<?php echo $row['groupid'];?>">
            <option value="Group1"> Group1 </option>
            <option value="Group2"> Group2 </option>
            <option value="Group3"> Group3 </option>
        </select><br><br>

        <input type ="submit" value ="Update your info" name="update"> <br></br>
        <input type ="submit" value ="Delete your info" name="delete"> <br></br>

</form>

<?php

if (isset($_POST['update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    $query = mysqli_query($conn, "UPDATE studentinfo set fname = '$fname', lname = '$lname' ,city = '$city' ,groupid = '$groupid' where id = '$a'");

        if ($query){

            echo "<h2> success </h2>";
        }
        else{
            echo "<h2> fail to update </h2>";
        }
}


if (isset($_POST['delete'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    $query = mysqli_query($conn, "delete from studentinfo  where id = '$a'");

        if ($query){

            echo "<h2> success </h2>";
        }
        else{
            echo "<h2> fail </h2>";
        }
}

?>