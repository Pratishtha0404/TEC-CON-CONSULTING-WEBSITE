<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM projects WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Project Deleted Successfully!";
    header("Location:admin.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Book does not exist";
}
?>