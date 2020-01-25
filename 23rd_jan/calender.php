<form method="POST">
<h1>code to display calender</h1><hr>
<strong>Select Startrting month&year:</strong>
<input type="month" name="year">
<hr>
<input type="submit" name='submit'>
</form>
<?php
    function display($fullyear)
    {   
        $max_day = date('t', strtotime($fullyear));
        $offset = getdate(strtotime($fullyear))['wday'] -1; 
        $offset < 0 ? $offset +=7 : $offset ;
        echo "<table border=1><tr>";
        echo "<caption>". date('M Y', strtotime($fullyear)) ."</caption></tr><tr>";
        for ($i=0; $i < 7 ; $i++)
            echo "<td>".$d = date('D', strtotime("mon this week +$i day"))."</td>";
            echo "</tr><tr>";
        for ($i = 1; $i <= $offset ; $i++)
            echo "<td></td>";      
        for ($i = 1; $i <= $max_day ; $i++){
            $offset++;
            echo "<td>" . $i . "</td>";
             if( ($offset % 7) == 0)
            echo "</tr><tr>";
        }
        echo "</tr></table>";
    }
    session_start();
    if(isset($_POST['year']) ) 
    {
        if($_POST['year'] != "") {
            $year = $_POST['year'];
            $_SESSION['year'] = $year;
        }
        else {
            if(isset($_SESSION['year'])){
                $year = $_SESSION['year'];
            }
            else {
                die;
            }
        }
        display($year);
    }
?>