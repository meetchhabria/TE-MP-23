<?php 
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: ../");
    }
    
    $userdata = $_SESSION['userdata'];
    $groupsdata = $_SESSION['candidatesdata'];

    if($userdata['status']==0){
        $status = '<b>Not Voted</b>';
    }
    else{
        $status = '<b>Voted</b>';
    }

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
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
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
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
            <b>Name:</b> <?php echo $userdata['name'] ?>
            <b>Status:</b><?php echo $status ?>
        </div>

        <div class="Candidate">
            <?php 
            if($_SESSION['candidatesdata']){
            for($i=0; $i<count($candidatesdata); $i++){
                ?>
                <div>
                   <b>Candidate name:</b> <?php echo $groupsdata[$i]['email'] ?>
                   <!-- <b>Votes:</b><?php echo $groupsdata[$i]['votes'] ?><br><br> -->
                   <form action="#" method="POST">
                    <input type="hidden" name="gvotes" value="">
                    <input type="submit" name="votebtn" value="Vote" class="votebtn">
                   </form>
                </div>
                <?php
            }
            }
            else{

            }
            ?>
        </div>
        
        <script src="script.js" async defer></script>
    </body>
</html>