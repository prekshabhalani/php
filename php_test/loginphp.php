<?php
    session_start();
    
    function getValue(  $fieldName , $returntype="" ){
        if (isset($_POST[$fieldName]) )
            {    
                return $_POST[$fieldName];
            }
        else{
                if (isset($_SESSION[$fieldName]) )
                {
                    return $_SESSION[$fieldName];
                }           
                else{
                    return $returntype;
                }
            }    
    }
    setSession();
    function setSession ()
    {
        
        $_SESSION =  $_POST;   
    }

    if(isset($_POST["login"]))
    {
        if ($_POST["login"]=="Login") {
            isValidUser();
        }
        else {
            header("Location: registration.php"); 
        }
    }

function validate($fieldName) {
    if(isset($_POST['submit']))  {
        switch ($fieldName) {
            case 'firstName':
            case 'lastName':
                if (!preg_match("/^(?=.*[A-Za-z])[a-zA-Z]*$/",$_POST[$fieldName])) {    
                    return true;
                }
                 break;
            case 'phoneNumber':
                if (!preg_match('/^[0-9]{10}+$/',$_POST[$fieldName]) || strlen($_POST[$fieldName]) != 10) {    
                    return true;
                }
                break;
            case 'email':
                if (!filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL)) {    
                    return true;
                }
                break;
            case 'password':
                if (!preg_match('/^(?=.*[0-9])(?=.*[A-Z])[0-9A-Za-z!@#$%]{8,12}+$/', $_POST[$fieldName])) {    
                    return true;
                }
                break;
            case 'confirmPassword':
                if($_POST[$fieldName] != $_POST['password']) {    
                    return true;
                }
                break;
          
            default:
        }               
    }   
}
function insertuserdetail()
{
    
    require 'database_con.php';
    if ($_POST) {
    //      $query = 'INSERT INTO `usertable` ( `user_prefix`, `first_name`, `last_name`, `phone_no`, `email`, `password`, `information`)
    //      VALUES '("$_POST['prefix']",
    //               "$_POST['firstName']",
    //               "$_POST['lastName']",
    //               "$_POST['phoneName']",
    //               "$_POST['email']" ,
    //               "$_POST['password']",
    //               "$_POST['information']")'
    //               ';
         print_r($query);
    }
    
}