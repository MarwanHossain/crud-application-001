<?php
include('dbcon.php');
if(isset($_POST["Add_students"])){

$fname= $_POST["f_name"];
$lname = $_POST["l_name"];
$age = $_POST["age"];

if($fname == "" || empty($fname))
{
    header("location:index.php?message=you need to fill in the first name");
    exit();
}

if($lname == "" || empty($lname))
{
    header("location:index.php?message=you need to fill in the last name");
    exit();
}

if($age == "" || empty($age))
{
    header("location:index.php?message=you need to fill in the age");
    exit();
}

else{
   $query = "INSERT INTO `students`(`first_name`,`last_name`,`age`) VALUES ('$fname','$lname','$age')";


$result = mysqli_query($connection, $query);

if(!$result){
    die("Query Failed".mysqli_error($connection));
}
else{
    header("location:index.php?insert_msg= Your data has been added successfully");
}


}




}


?>