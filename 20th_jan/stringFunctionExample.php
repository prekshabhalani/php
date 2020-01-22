<!-- string function example  -->

<?php
/************ main string in which we perform some opration *************/

$mainString = "  @ Hey!! Preksha How are you? it's your code! .....@";
echo "<h3>MAIN STRING:$mainString</h3> <br> ";

/************ strtolower() *************/
echo "<strong>" . str_repeat("-",10)." Example of strtolower(string)</strong>" . str_repeat("-",10)." <br>";
echo "  'it return string in to lowercase.'<br>";
echo "<strong>Example:</strong>". strtolower($mainString) ."<hr>";

/************ strtoupper() *************/
echo "<strong> " . str_repeat("-",10)."  Example of strtoupper(string)</strong>" . str_repeat("-",10)."  <br>";
echo "  'it return string in to uppercase.'<br>";
echo "<strong>Example:</strong>". strtoupper($mainString) ."<hr>";


/************ ucfirst() *************/
echo "<strong>" . str_repeat("-",10)." Example of ucfirst(string)</strong>" . str_repeat("-",10)."  <br>";
echo "  'it return string with first character in uppercase.'<br>";
echo "<strong>Example:</strong>". ucfirst($mainString)."<br>";
echo "<strong>Note:</strong>it can't show any reflection instring becoz first letter is already in capital<hr>";


/************ lcfirst() *************/
echo "<strong> " . str_repeat("-",10)." Example of lcfirst(string)</strong>.".str_repeat("-",10). "<br>";
echo "  'it return string with first character in lowercase.'<br>";
echo "<strong>Example:</strong>". lcfirst($mainString) ."<hr>";


/************ strrev() *************/
echo "<strong> " . str_repeat("-",10)."  Example of strrev(string)</strong>" . str_repeat("-",10)."  <br>";
echo "  'it return string in reverse order.'<br>";
echo "<strong>Example:</strong>". strrev($mainString) ."<hr>";

/************ strlen() *************/
echo "<strong>" . str_repeat("-",10)." Example of strlen(string)</strong>" . str_repeat("-",10)."  <br>";
echo "  'it return length of the string in decimal value.'<br>";
echo "<strong>Example:</strong>". strlen($mainString) ."<hr>";

/************ addcslashes() *************/
echo "<strong>" . str_repeat("-",10)." Example of addcslashes(string , \$string)</strong>" . str_repeat("-",10)."  <br>";
echo "  'it is use to return string with blckslashes before define character.'<br>";
echo "<strong>Example:</strong>". addcslashes($mainString , "a") ."<hr>";
/************ diffrent between addcslashes and addslases *************/

/************ addslashes() *************/
echo "<strong> " . str_repeat("-",10)." Example of addslashes(string)</strong>" . str_repeat("-",10)." <br>";
echo "  'it is use to return string with blckslashes before particular character.'<br>";
echo "<strong>Example:</strong>". addslashes($mainString) ."<hr>";

/************ bin2hex() *************/
echo "<strong> " . str_repeat("-",10)." Example of bin2hex(string)</strong>" . str_repeat("-",10)." <br>";
echo "  'it is use to convert a string of ASCII character to hexadecimal values.'<br>";
echo "<strong>Example:</strong>". bin2hex($mainString) ."<hr>";

/************ chop() *************/
echo "<strong> " . str_repeat("-",10)." Example of chop(string)</strong>" . str_repeat("-",10)." <br>";
echo "  'it is use to remove white space or other characters from the right end of a string.'<br>";
echo "<strong>Example:</strong>". chop($mainString) ."<br>";
echo "<strong>Note:</strong>it only remove space's from right side in string<hr>";


/************ chr() and ord()*************/
echo "<strong> " . str_repeat("-",10)." Example of chr(byte) and ord(string)</strong>" . str_repeat("-",10)." <br>";
echo " 'ord() is return ASCII value of the first character of the string. '<br>";
echo " 'chr() is return string from the ASCII value. '<br>";
$pChrASCII = ord($mainString);
echo "<strong>Example(ord()):</strong>".ord($mainString) ."<br>";
echo "<strong>Example(chr()):</strong>". chr($pChrASCII) ."<hr>";


/************ strpos() *************/
echo "<strong> " . str_repeat("-",10)." Example of strpos(string , mixed[sub_string] ,offset)</strong>" . str_repeat("-",10)." <br>";
echo "  'it is use to find a possition of substring into the string.'<br>";
echo "<strong>Example:</strong> it find Preksha's possition in string ". strpos($mainString ,'Preksha',0) ."<hr>";

/************ str_replace() *************/
echo "<strong> " . str_repeat("-",10)." Example of str_replace(mix[sub_string] , mixed[replace_string] ,string)</strong>" . str_repeat("-",10)." <br>";
echo "  'it is use to replace substring as a specific string.'<br>";
echo "<strong>Example:</strong> it find replace Preksha with ' alex ' in to string :". str_replace('Preksha','alex' ,$mainString) ."<hr>";

/************ trim() *************/
echo "<strong> " . str_repeat("-",10)." Example of trim(string)</strong>" . str_repeat("-",10)." <br>";
echo "  'it is use to remove whitespaces and specific character from start and end of the string.'<br>";
echo "<strong>Example:</strong>". trim($mainString,'@') ."<hr>";


?>