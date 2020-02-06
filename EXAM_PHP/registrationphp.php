<?php
//connection
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'phptest');
    if(! $conn ) {
        echo "Connected failure<br>";
        die;
    }   
     
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
    $isthereemail = "temp";
    // return the enter email already exit or not
    function isEmailFound($fieldName)
    {
        global $conn,$isthereemail;
        $query = 'SELECT email FROM `usertable`';  
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value ) {
                    $isthereemail = ($_POST[$fieldName] == $value) ? 1 : $isthereemail ;
                }
        }
        return ($isthereemail == 1) ? true : false;
    }
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
                    if (!preg_match('/^[0-9]{11}$/',$_POST[$fieldName]) ){
                        return true;
                    }
            break;
                case 'email':
                    if (!filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL)) {    
                        return true;
                    }
                    else if (isEmailFound($fieldName) == 'true')
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
    }
    function redirect(){
        if( isset($_POST['submit'])
            && !validate('firstName') && !validate('lastName') 
            && !validate('email') && !validate('phoneNumber') 
            && !validate('information') && !@validate('password')
            && !validate('confirmPassword') && (isset($_POST['terms'])))
            {
                store_usertable();
                header( "Location: blogspot.php");
            }
    }
    redirect();

    function store_usertable(){
        global $conn;
        $prefix = date("d-m-Y(h:i:sa)");
        $query = "INSERT INTO `usertable` (`user_prefix`, `first_name`, `last_name`, `phone_no`, `email`, `password`, `last_login_at`, `information`, `created_at`, `update_at`)
        VALUES ( '$_POST[prefix]','$_POST[firstName]','$_POST[lastName]','$_POST[phoneNumber]',
        '$_POST[email]','$_POST[password]','$prefix', '$_POST[information]', NULL, NULL);";
        $result = mysqli_query($conn, $query) or die;
        //echo mysqli_insert_id($conn);
    }

?>