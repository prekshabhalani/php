<!-- CODE TO DEMOSTRATE USE OF $_SERVER[] -->
<?php
    $server_name = $_SERVER['SCRIPT_NAME'];
?>
<form action = <?php echo $server_name ;?> method= "POST">
<input type='submit' name='submit' value='LOGIN YOUR SELF' >
</form>