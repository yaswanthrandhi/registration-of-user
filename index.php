<?php
session_start();
if(isset($_SESSION['username'])){
    $_SESSION['msg']="you must login first to view this page";
    header("location:login.php");
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>welcome page</title>
    </head>
    <body>
        <h1>welcome to home page</h1>
        <?php
        if(isset($_SESSION['success']));?>
        <div>
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
        <?php 'endif' ?>
        //if user logs in print information about him
        <?php if(isset($_SESSION['username']));?>
        <h3>welcome<strong><?php echo $_SESSION['username'];?></strong></h3>
        <button><a href="login.php"></a></button>
        <?php 'endif' ?>
    


    </body>
</html>