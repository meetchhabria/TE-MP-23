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
                <button class="btnLogin-popup"><a href = "login.php">Login</a></button>
            </nav>
        </header>

        <!-- <div class="wrapper">
            <span class="icon-close"><ion-icon name="close"></ion-icon></span>
            <div class="form-box login">
                <h2>Login</h2>
                <form action="/login.php" method="POST">
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
                    <button type="submit" class="btn">Login</button>
                    <div class="login-register">
                        <p>New here? <a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <h2>Register</h2>
                <form action="/register.php" method="POST">
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
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required name="cpassword">
                        <label> Confirm Password</label>
                    </div>
                    <div class="role-input">
                        <select class="role" name="role">
                            <option value="1">Voter</option>
                            <option value="2">Candidate</option>
                        </select>
                    </div>
                    <button type="submit" class="btn">Register</button>
                    <div class="login-register">
                        <p>Already registered? <a href="#" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>
        </div> -->
        
        
        <script src="script.js" async defer></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>