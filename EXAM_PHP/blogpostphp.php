<?php
    require_once ("registrationphp.php");
    function category_array()
    {
        global $conn;
        $category_category = array();
        $query = "SELECT `title` FROM `category` ;";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)){        
            foreach ($row as $key => $value) {
                array_push($category_category,$value);
            }    
        }
        return $category_category;
    }
    category_array();
?>