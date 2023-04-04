<?php
    include("connect.php");

    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword']; 
    $role = $_POST['role'];

    if($password == $cpassword){
        $insert = mysqli_query($connect, "INSERT INTO users (email, password, role, status, votes) VALUES ('$email', '$password', '$role', 0, 0)");
        if($insert){
            echo "
            <script>
            alert('Registration successful');
            window.location = '/index.html';
            </script>;
            ";
        }
        else{
            echo "
            <script>
            alert('Registration unsuccessful');
            window.location = '/index.html';
            </script>;
            ";
        }
    }
    else{
        echo "
        <script>
        alert('Password does not match');
        window.location = '/index.html';
        </script>;
        ";
    }
?>