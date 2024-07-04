<?php
$servername = "localhost";
$username = "root";  // Replace with your actual MySQL username
$password = "";  // Replace with your actual MySQL password
$dbname = "mydatabasess";

$conn = new mysqli($servername, $username, $password, $dbname);





// Proceed with delete logic



// Proceed with the delete logic



// Proceed with the delete logic





if(isset($_GET['username']))
{
    $user_id=$_GET['username'];

    $sql="DELETE FROM `users` WHERE `username`='$user_id'";

    $result=$conn->query($sql);

    if($result==TRUE)
    {
        echo "Records deleted Successfully";
    }
    else
    {
        echo "Errors".$sql."<br>".$sql->error;
    }
}
?>
