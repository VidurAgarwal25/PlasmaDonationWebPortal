<?php
session_start();
//the header is used to tell the system that after user registers
//where he/she should be redirected

//establishin connection with local server
//second and third argument are username and password of server respectively
$con = mysqli_connect('localhost', 'root', '1234');

//selecting which database is to be used
mysqli_select_db($con, 'mainuserregistration');

//used to fetch the name entered by the user in the form
$name = $_POST['user'];

//used to fetch the name of the user
$fn = $_POST['fname'];

//used to fetch the contact number
$contact = $_POST['contact'];

//used to fetch the password entered by the user in the form
$password = $_POST['regpassword'];

//query for database to select all rows having the name same as entered by user
//this is done so that further we can check whether the username already exists in database or not
$s = " select * from userinfo where username= '$name'";

//storing the query in result variable
$result = mysqli_query($con, $s);

//using mysqli_num_rows to see how many rows are there in result
//if the rows are ore than 0 that means a username already exists by the same username 
$num = mysqli_num_rows($result);
if ($num == 1) {
    echo "username already taken";
} else {
    $reg = " insert into userinfo(name,username,contactnumber,password,code) values ('$fn','$name','$contact','$password','0') ";
    mysqli_query($con, $reg);
    echo "Registration Successful";
    header('location:login.php');
}