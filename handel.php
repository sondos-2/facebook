<?php

if(isset ($_POST['register']))
{
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email-mobile'];
    $up_password = $_POST['up-password'];
    $birth_day = $_POST['birth-day'];
    $birth_month =$_POST['birth-month'];
    $birth_year =$_POST['birth-year'];
    $gen= $_POST['gen'];
    
    echo "hello your first name is $firstName and the last name is $lastName <br> your email is $email  <br> your password is $up_password   <br> 
    your birth <br>$birth_day/$birth_month/$birth_year <br>" ;
    
    if($gen=="female")
    {
    echo "your gender is female";}
    else{
    echo "your gender is male";} 
}
else {
    echo "error 404";
}
?>
    