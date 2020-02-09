<!DOCTYPE html>
<html>

<head>
    <title>BLOGPOST Page</title>
</head>

<body>
<?php require_once("header.php");
    if (isset($_GET['deleteId'])) {
        $query = " DELETE FROM `category` WHERE `category_id` = '$_GET[deleteId]' ";  
        $result = mysqli_query($conn,$query);
    }
?>
    <h3>Blog Category</h3>
    <button><a href="add_category.php">Add Category</a></button>
    <?php 
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'phptest');
        if(! $conn ) {
            echo "Connected failure<br>";
            die;
        }
        $query = 'SELECT * FROM `category`';  
        $result = mysqli_query($conn,$query);
        echo "<table border=1>";
        $cnt = 0;
        while($row = mysqli_fetch_assoc($result)) {
            if($cnt != 1) {
                foreach ($row as $key => $value ) {
                    echo "<th>".$key."</th>";
                } 
                $cnt++; 
            }
            echo "<tr>";
            foreach ($row as $field ) {
                echo "<td>".$field."</td>";
            }
            echo '<td><a href="registration.php?id='.$row['category_id'].'">Edit</a></td>';
            echo '<td><a href="category.php?deleteId='.$row['category_id'].'">Delete</a></td>';
            echo "</tr>";
        }
        
        echo "</table>";
    ?>
</body>
</html>