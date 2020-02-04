<!DOCTYPE html>
<html>

<head>
    <title>Blogspot Page</title>
</head>

<body>
   <pre>    
        <input type="submit" value="Manage Category" name='category'>
        <input type="submit" value="My Profile" name='profile'>
        <input type="submit" value="Logout" name='logout'>
       
   </pre>
    <?php 
        require 'database_con.php';
        $query = 'SELECT * FROM `usertable`';  
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
            echo '<td><a href="http://localhost/xampp/php_test/registration.php?id='.$row['user_id'].'">Edit</a></td>';
            echo '<td><a href="http://localhost/xampp/delete.php?id='.$row['user_id'].'">Delete</a></td>';
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>

</html>