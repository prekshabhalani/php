<?php
    require ("registrationphp.php");
    function parents_array()
    {
        global $conn;
        $parent_category = array();
        $query = "SELECT `title` FROM `category` 
                 where `parents_category_id` = '0';";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)){        
            foreach ($row as $key => $value) {
                array_push($parent_category,$value);
            }    
        }
        return $parent_category;
    }
    parents_array();

    function add_category()
    {
        if (isset($_POST['addCategory'])) {
           
            global $conn;
            $query = "SELECT `category_id` FROM `category` 
                 WHERE `title` = '$_POST[parents_category]';";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($result);
            $image = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],'category_image/'.$image);
            $query = "INSERT INTO `category`(`parents_category_id`, `title`, `meta_title`, `url`, `content`, `image`) 
            VALUES ('$row[category_id]', '$_POST[title]','$_POST[metaTitle]','$_POST[url]','$_POST[content]','$image');";                
            mysqli_query($conn,$query);
        }
    }

    
?>