<?php
    require_once ("registrationphp.php");
    function parents_array()
    {
        global $conn;
        $parent_category = array();
        $query = "SELECT `meta_title` FROM `category` 
                 where `parents_category_id` is NULL;";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)){        
            foreach ($row as $key => $value) {
                array_push($parent_category,$value);
            }    
        }
        return $parent_category;
    }
    parents_array();
?>