<!-- embadading //combining php with html and html with php  -->
<!-- without php  -->
<input type="text" value="without php html">
<!-- with php -->
<?php
$text1 = " and its text";
?>
<input type="text" value="with php html<?php echo $text1; ?>">
