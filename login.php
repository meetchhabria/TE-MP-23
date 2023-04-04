<?php 
session_start();
include("connect.php");

$email = $_POST['email'];
$password = $_POST['password'];

$check = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' AND password='$password'");

if(mysqli_num_rows($check)>0){
    $userdata = mysqli_fetch_array($check);
    $candidates = mysqli_query($connect, "SELECT * FROM users WHERE role=2");
    $candidatesdata = mysqli_fetch_all($candidates, MYSQLI_ASSOC);

    $_SESSION['userdata'] = $userdata;
    $_SESSION['candidatesdata'] = $candidatesdata;

    echo "
    <script>
    window.location = '/dashboard.php';
    </script>;
    ";
}
    else{
        echo "
        <script>
        alert('Invalid credentials');
        window.location = '/index.html';
        </script>;
        "; 
       }
    ?>