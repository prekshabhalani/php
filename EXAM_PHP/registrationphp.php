<?php
// ALL: connection
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'phptest');
    if(! $conn ) {
        echo "Connected failure<br>";
        die;
    }   
// REGISTARTION: returnm all correct value     
    function getValue($fieldName , $returntype="" ){
        if (isset($_POST[$fieldName]) ){    
                return $_POST[$fieldName];
            }
        else{
                if (isset($_SESSION[$fieldName]) ){
                    return $_SESSION[$fieldName];
                }           
                else{
                    return $returntype;
                }
            }    
    }
// REGISTARTION: return the enter email already exit or not
    function isEmailFound($email)
    {
        global $conn;
        $query = "SELECT email FROM `usertable` where `email`='$email';" ;  
        $result = mysqli_query($conn,$query);
            return (mysqli_fetch_assoc($result))? true:false ;
    }
// REGISTARTION: field validation return true if data incorrerct
    function validate($fieldName){
        if (isset($_POST["submit"])){
            switch ($fieldName) {
                case 'firstName':
                    if (!preg_match('/^([A-Za-z]+)$/' , $_POST[$fieldName])){
                        return true;
                    }
            break;
                case 'lastName':
                    if (!preg_match("/^([A-Za-z]+)$/",$_POST[$fieldName])) {
                        return true;
                    }
            break;
                case 'phoneNumber':
                    if (!preg_match('/^[0-9]{10}$/',$_POST[$fieldName]) ){
                        return true;
                    }
            break;
                case 'email':
                    if (!filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL)) {    
                        return true;
                    }
                    else if (isEmailFound($_POST[$fieldName]) == 'true')
                    {
                        return  'Email Exist';
                    }
            break;
                case 'password':
                    if (!preg_match('/^[^@][a-zA-Z@0-9]{4}[a-zA-Z@0-9]+$/', $_POST[$fieldName])) {    
                        return true;
                    }
            break;
                case 'confirmPassword':
                    if (!($_POST["password"] == $_POST["confirmPassword"])) {
                        return true;
                    }
            break;
                case 'information':
                    if ($_POST['information'] == "") {
                        return true;
                    }      
            break;
            
            default:
            break;
            }
        }
        if (isset($_POST["addCategory"])){
            switch ($fieldName) {
                case 'title':
                    if (!preg_match('/^([A-Za-z]+)$/' , $_POST[$fieldName])){
                        return true;
                    }
            break;
                case 'content':
                    if (!preg_match("/^([A-Za-z]+)$/",$_POST[$fieldName])) {
                        return true;
                    }
            break;
                case 'url':
                    if (!preg_match('/^([A-Za-z]+)$/' , $_POST[$fieldName])){
                        return true;
                    }
            break;
                case 'metaTitle':
                    if (!preg_match('/^([A-Za-z]+)$/' , $_POST[$fieldName])){
                        return true;
                    }
            break;
                case 'parents_category':
            break;
                case 'confirmPassword':
                    if (!($_POST["password"] == $_POST["confirmPassword"])) {
                        return true;
                    }
            break;
            default:
            break;
            }
        }
    }
// REGISTARTION: check for the sucssesfull registration and redirect 
    function redirect(){
        if( isset($_POST['submit'])
            && !validate('firstName') && !validate('lastName') 
            && !validate('email') && !validate('phoneNumber') 
            && !validate('information') && !@validate('password')
            && !validate('confirmPassword') && (isset($_POST['terms'])))
            {
                store_usertable();
                header( "Location: blogpost.php");
            }
    }    redirect();
// REGISTARTION:  insert data into user_table at dataBase
    function store_usertable(){
        global $conn;
        $time = time();
        $createdDate = date("d M Y (h m)",$time);
        $query = "INSERT INTO `usertable` (`user_prefix`, `first_name`, `last_name`, `phone_no`, `email`, `password`, `last_login_at`, `information`, `created_at`, `update_at`)
        VALUES ( '$_POST[prefix]','$_POST[firstName]','$_POST[lastName]','$_POST[phoneNumber]',
        '$_POST[email]','$_POST[password]','$createdDate', '$_POST[information]', '$createdDate', NULL);";
        $result = mysqli_query($conn, $query) or die;
    /*****password md5 remaining****/
    }
    
// set updatetime at last loginat time
    function update_usertable(){
        global $conn;
        $updatedDate = date("d M Y (h m)");
        $query = " UPDATE `usertable` SET `last_login_at` = '$updatedDate' 
        WHERE `email` = '$_POST[userId]' ;";
        echo "$query";
        $result = mysqli_query($conn, $query) or die;
    }
// LOGIN:  return user is valid or not for login
    function login()
    {
        global $conn;
        if (isset($_POST['login'])) {
            $query = "SELECT `email`,`password` FROM `usertable` 
                    where `email`='$_POST[userId]' AND `password`='$_POST[loginPassword]';";
            $result = mysqli_query($conn,$query);
            if (mysqli_fetch_assoc($result)){
                update_usertable(); // store last  login time
                header( "Location: blogpost.php");
            }
            else{
                return false;
            }
        }
    }
// LOGIN: redirect to registration page when registration click
    if (isset($_POST['registration'])){
        header( "Location: registration.php");
    }
?>