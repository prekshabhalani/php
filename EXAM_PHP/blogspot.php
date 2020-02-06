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
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'phptest');
        if(! $conn ) {
            echo "Connected failure<br>";
            die;
        }
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
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>

</html>