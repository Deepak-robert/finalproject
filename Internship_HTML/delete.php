<?php
$servername = "localhost";
$username = "root";  // Replace with your actual MySQL username
$password = "";  // Replace with your actual MySQL password
$dbname = "mydatabasess";

$conn = new mysqli($servername, $username, $password, $dbname);



session_start();

// Debugging output
echo 'Session Token: ' . htmlspecialchars($_SESSION['csrf_token']) . '<br>';
echo 'GET Token: ' . htmlspecialchars($_GET['csrf_token']) . '<br>';

// Validate CSRF token
if (!isset($_GET['csrf_token']) || $_GET['csrf_token'] !== $_SESSION['csrf_token']) {
    die('Invalid CSRF token');
}

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