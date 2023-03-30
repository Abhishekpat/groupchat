<?php
session_start();
require 'conn.php';

function userLogin($userdata){
    $con = $GLOBALS['db']; // you can access global variables using global array
    $data=array();
    $error=0;
    if($userdata['Password']==''){
        $error++;
       // $data['status']=false;
        $data['message']='Enter Your Password !';
    }
    if($userdata['email_id']==''){
        $error++;
       // $data['status']=false;
        $data['message']='Enter Your Email Id !';
    }
    if($error>0){
        return $data;
    }
    $email_id=mysqli_real_escape_string($con,$userdata['email_id']);
    $password=mysqli_real_escape_string($con,$userdata['password']);
    $query="SELECT * FROM users WHERE email_id='$email_id' && password='$password'";
    $run = mysqli_query($con,$query);
    $user = mysqli_fetch_assoc($run) ?? array();
    if(count($user)>0){
        $_SESSION['user']=true;
        $_SESSION['userdata']=$user;

        $data['status']=true;
        $data['message']='User is logged in';
    }else{
        $data['status']=false;
        $data['message']='Incorrect Email Id / Password';
    }
    
    return $data;
}

function registerUser($userdata)
{
    $con = $GLOBALS['db']; // you can access global variables using global array
    $data=array();
    $error=0;
    


if($userdata['password']==''){
    $error++;
    $data['status']=false;
    $data['message']='Enter Your Password !';
}
if($userdata['email_id']==''){
    $error++;
    $data['status']=false;
    $data['message']='Enter Your Email Id !';
}
if($userdata['full_name']==''){
    $error++;
    $data['status']=false;
    $data['message']='Enter Your Full Name !';
}



$full_name=mysqli_real_escape_string($con,$userdata['full_name']);
$email_id=mysqli_real_escape_string($con,$userdata['email_id']);
$password=mysqli_real_escape_string($con,$userdata['password']);


// checking if email already registered
$q="SELECT * FROM users WHERE email_id='$email_id'";
$r = mysqli_query($con,$q);
$d = mysqli_fetch_all($r);
if(count($d)>0){
    $error++;
    $data['status']=false;
    $data['message']='Email Id Already Registered !';
}
if($error>0){
    return $data;
}

//ends 


    $query="INSERT INTO users(full_name,email_id,password) ";
    $query.="VALUES ('$full_name','$email_id','$password')";

    // return $query;

if(mysqli_query($con,$query)){
    $data['status']=true;
    $data['message']='Account Created !';
}else{
    $data['status']=false;
    $data['message']='Something Is Wrong !'; 
}
    return $data;
}