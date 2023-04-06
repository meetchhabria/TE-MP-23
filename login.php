<?php 

require_once("connect.php");

if(isset($_POST['login-submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    // var_dump($check);
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
        window.location = '/index.php';
        </script>;
        "; 
       }

}


    ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <header>
            <h2 class="logo">Logo</h2>
            <nav class="navigation">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>
        </header>

        <!-- <div class="wrapper">
            <span class="icon-close"><ion-icon name="close"></ion-icon></span>
            <div class="form-box login">
                <h2>Login</h2>
                <form action=" (((($_SERVER['PHP_SELF'];))))  method="POST">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required name="email">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required name="password">
                        <label>Password</label>
                    </div>
                    <button type="submit"  name="login-submit" class="btn">Login</button>
                    <div class="login-register">
                        <p>New here? <a href="register.php" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>
        </div> -->

        <div class="form-box register">
                <h2>Login</h2>
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required name="email">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required name="password">
                        <label>Password</label>
                    </div>
                    <button type="submit" name = "login-submit" class="btn">Login</button>
                    <div class="login-register">
                        <p>Already registered? <a href="register.php" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>
        </div> 
        
        
        <script src="script.js" async defer></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>