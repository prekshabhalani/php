
<?php
    if (isset($_POST['oldAddress']) && isset($_POST['find']) && isset($_POST['replace']) )
    {
        $string = $_POST['oldAddress'];
        $find = $_POST['find'];
        $replace = $_POST['replace'];
        $length = strlen($find);
        $offset = 0;
        if ( !empty($string) && !empty($find) && !empty($replace)  ) {
            while ($strpos = @strpos($string, $find ,$offset)) {
                $offset = $strpos + $length;
                $string =substr_replace($string,$replace,$strpos,$length);
            }
        }
        else {
          echo "please enter all fields";   
        }
    }   

?>
<form method="POST">
<textarea name="oldAddress"  ><?php echo ((isset($string))? $string: ""); ?> </textarea>
search: <input  type="text" name="find" >
replace: <input type="text" name="replace">
<input type = "submit" >
</form>