<form method="POST" action='#'>
    <hr>
    <p>Enter row: </p>
    <input type="number" name="row" min=0 >
    <p>Enter column: </p>
    <input type="number" name="column" min=0 >
    
    <input type="submit" value='submit' > <hr>
</form>
<?php
$row = 0;
$column = 0;
    if(isset($_POST['row']) && isset($_POST['column']))
    {

        $row = $_POST['row'];
        $column = $_POST['column'];
        
    }
?>