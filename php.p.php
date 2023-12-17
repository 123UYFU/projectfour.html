







<?php
// Retrieve the submitted username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];
$address =$_REQUEST['address'];
if(isset($_POST['btntest']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="bis_level_four";
    $conn = mysqli_connect($host,$user,$password,$db);
    $insert="insert into studentsbisinfo values"('$firstname','$secondname','$address')";
    

}


