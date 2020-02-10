    <?php
        session_name("php_exam");
        session_start();
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
    
    function getValue($fieldName , $returntype="") {
        if (isset($_POST[$fieldName]) ){    
                return $_POST[$fieldName];
        } else 
            return $returntype;
    }
// REGISTARTION: return the enter email already exit or not
    function isEmailFound($email)
    {
        global $conn;
        $query = "SELECT email FROM `usertable` where `email`='$email';" ;  
        $result = mysqli_query($conn,$query);
            return (mysqli_fetch_assoc($result))? true:false ;
    }
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
    
// LOGIN: set updatetime at last loginat time
    function update_usertable(){
        global $conn;
        $updatedDate = date("d M Y (h m)");
        $query = " UPDATE `usertable` SET `last_login_at` = '$updatedDate' 
        WHERE `email` = '$_POST[userId]' ;";
        $result = mysqli_query($conn, $query) or die;
    }
// LOGIN:  return user is valid or not for login
    function login()
    {
        global $conn;
        if (isset($_POST['login'])) {
            $query = "SELECT `user_id`,`email`,`password` FROM `usertable` 
                    where `email`='$_POST[userId]' AND `password`='$_POST[loginPassword]';";
            $result = mysqli_query($conn,$query);
            //print_r ($result);
            if ($row = mysqli_fetch_assoc($result)){
                storeUserIdSession($row['user_id']); // store into session   
                update_usertable(); // store last  login time
                header( "Location: blogpost.php"); 
                return true;//not execute
            }
            else{
                return false;
            }
        }
    }
// session to store data
    function storeUserIdSession($userId)
    {
        global $conn;
        $query = "SELECT user_id FROM `usertable` where `user_id`='$userId';" ;  
        $result = mysqli_query($conn,$query);
            if ($row = mysqli_fetch_assoc($result))
            $_SESSION["current_user"] = $row['user_id'];  
    }
?>