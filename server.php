<?php
session_start();

//instialising variables
$username="";
$email="";
$errors=array();

//connect to db
$db=mysqli_connect('localhost','root','','registration') or die('could not connect');

//register a user
$username=mysqli_real_escape_string($db,$_POST ['username']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$password_1=mysqli_real_escape_string($db,$_POST['password_1']);
$password_2=mysqli_real_escape_string($db,$_POST['password_2']);

//form validation
if(empty($username)) {array_push($errors, "username is required");}
if(empty($email)) {array_push($errors, "email is required");}
if(empty($password_1)) {array_push($errors, "password is required");}
if($password_1 !=$password_2) {array_push($errors, "password does not match");}

//check for db existing user with username
$user_check_query="SELECT * FROM registration WHERE username='$username' or email='$email' LIMIT 1";
$results=mysqli_query($db,$user_check_query);
 $user= mysqli_fetch_assoc($result);
if($user){
    if($user['username'] === $username) {array_push($errors, "user alredy exisits");}
    if($user['email'] === $email) {array_push($errors, "email is already exisits");}
}

//register user if no error
if(count($errors)==0) {
    $password=md5($password_1);//md5 is encrypt password
    $query="INSERT INTO registration(username, email, password) VALUES ('$username','$email',$password')";
    mysqli_query($db,$query);
    $_SESSION['username']=$username;
    $_SESSION['success']="you are logged in";
    header('location:index.php');


}
?>

