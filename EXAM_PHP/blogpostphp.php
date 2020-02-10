<?php
    require_once ("registrationphp.php");
    // BLOGPOST: function to return category array for blogpost
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
    }    category_array();// call everytime 
    //BLOGPOST: it insert blog into the database
    function addBlog()
    {   global $conn;
            if (isset($_POST['addBlog'])) {
                
            echo "else call in addBlog";
                // $user_id = $_SESSION['current_user'];
                // $image = $_FILES['image']['name'];
                // move_uploaded_file($_FILES['image']['tmp_name'],'blogpost_image/'.$image);
                // $query = "INSERT INTO `blog_post` (`user_id`, `title`, `url`, `content`, `image`,`published_at`) 
                // VALUES ('$user_id', '$_POST[title]','$_POST[url]','$_POST[content]','$image','$_POST[publishedAt]');";                
                // echo $last_query = mysqli_query($conn,$query);
                // if (isset($_POST["category"])) {
                //     // echo mysql_insert_id($last_query);    
                // }
                // $query = "INSERT INTO `blog_post` (`user_id`, `title`, `url`, `content`, `image`,`published_at`) 
                // VALUES ('$user_id', '$_POST[title]','$_POST[url]','$_POST[content]','$image','$_POST[publishedAt]');";                
            }
        elseif (isset($_POST['Update_blog'])) {
            echo "hiii";
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
        else
        {
            echo "else call in addBlog";
        }
    }
?>