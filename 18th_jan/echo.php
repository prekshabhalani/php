<!--  for diffrent type of echo -->
<?php
//1) echo with ''  //faster than 2nd coz '' can't chack for the variable
echo 'hello';
// 2)echo with "" // slower than 1nd coz "" chack for the variable
echo "hello again";
//3) echo with html attribut 
echo '<br>hello with html attribute';
//4) echo with breakets
echo ('hey its me with breakets');
//5) echo with \ to escape the character
echo 'hello it \'s again me with *\'* in me ';
//6) echo reson why "" slow even we use it reason is becoz for inside quotation value we have to again right '' or double more time
// ******************echo "<input type='input' value='it \'s me with \"\" outside'> ";//Question to ask
echo '<input type="input" value="echo with the double quotes">';
echo  "<input type='input' value='echo with single quotes'>";

?>