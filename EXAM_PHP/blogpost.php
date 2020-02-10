<!DOCTYPE html>
<html>

<head>
    <title>BLOGPOST Page</title>
    <style>
        .image
        {
            height: 80px;
            width: 80px;
        }
    </style>
</head>

<body>
<?php require_once("header.php");
    if (isset($_GET['deleteId'])) {
        $query = " DELETE FROM `blog_post` WHERE `blog_id` = '$_GET[deleteId]' ";  
        $result = mysqli_query($conn,$query);
    }
?>
    <h3>Blog Posts</h3>
    <button><a href="add_blogpost.php">Add Category</a></button>
    <?php 
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'phptest');
        if(! $conn ) {
            echo "Connected failure<br>";
            die;
        }
        $query = 'SELECT * FROM `blog_post`';  
        $result = mysqli_query($conn,$query);
        echo "<table border=1>";
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            if($count != 1) {
                foreach ($row as $key => $value ) {
                    echo "<th>".$key."</th>";
                } 
                $count++; 
            }
            echo "<tr>";
            foreach ($row as $field ) {
                if ($field == $row['image']) 
                echo "<td><image src='blogpost_image/".$field."'  class='image'></td>";
                else
                echo "<td>".$field."</td>";
        }
            echo '<td><a href="blogpost_edit.php?id='.$row['blog_id'].'">Edit</a></td>';
            echo '<td><a href="blogpost.php?deleteId='.$row['blog_id'].'">Delete</a></td>';
            echo "</tr>";
        }
        
        echo "</table>";
    ?>
</body>
</html>