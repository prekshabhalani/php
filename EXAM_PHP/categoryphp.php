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
    {   global $conn;
        if (isset($_POST['addCategory'])) {
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
        elseif (isset($_POST['Update'])) {
            $query = "SELECT `category_id` FROM `category` 
                 WHERE `title` = '$_POST[parents_category]';";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($result);
            $query = "UPDATE `category` SET `parents_category_id`= '$row[category_id]',`title`='$_POST[title]',
                        `meta_title`='$_POST[metaTitle]',`url`='$_POST[url]',`content`='$_POST[content]' 
                         WHERE `category_id` = '$_GET[id]' ";                
            mysqli_query($conn,$query);
            return true;
        }
    }
    function update_category($field){
    //     [title]  
    // [content] =>                     
    // [url] => 
    // [metaTitle] => 
    // [parents_category] => 
    // [edit] => Update
        if ($_GET["id"]) {
            global $conn;
            $query = "SELECT * FROM `category` 
                 WHERE `category_id` = '$_GET[id]';";
            $result = mysqli_query($conn,$query); 
            $row = mysqli_fetch_assoc($result);
            foreach ($row as $key) {
                switch ($field) {
                        case 'title':
                            return $row['title'];
                            break;
                        case 'content':
                            return $row['content'];
                                break;
                        case 'url':
                            return $row['url'];
                            break;
                        case 'metaTitle':
                            return $row['meta_title'];
                        break; 
                        case 'parents_category':
                            $query = "SELECT title FROM `category` 
                                 WHERE `category_id` = '$row[parents_category_id]';";
                            $result1 = mysqli_query($conn,$query); 
                            if ($row1 = mysqli_fetch_assoc($result1)) {
                                return $row1['title'];
                            }
                        break; 
                        default:
                            # code...
                            break;
                    }
                }    
            
        }

    }

    
?>