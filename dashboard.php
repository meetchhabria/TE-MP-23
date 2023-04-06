<?php 
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Secure Voting System using Blockchain</title>
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
                <button class="btnLogin-popup">Logout</button>
            </nav>
        </header>

        <div class="Profile">
            <b>Name:</b> 
            <b>Status:</b>
        </div>

        <div class="Candidate">
            
                <div>
                   <b>Candidate name:</b> 
                   <form action="#" method="POST">
                    <input type="hidden" name="gvotes" value="">
                    <input type="submit" name="votebtn" value="Vote" class="votebtn">
                   </form>
                </div>
        </div>
        
        <script src="script.js" async defer></script>
    </body>
</html>