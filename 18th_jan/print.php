<!-- print example -->
<?php 
// 1) print simple with ""
print "1hello";
// 2)print with ''
print '2hello';
// 3) print with ()
print ('hello');
// 4) print with html tag
print ("<input type='input' name='demo' value='print is slow' >");
echo ("<input type='input' name='demo' value='echo is fast'>");
// 5) print also use \ to escape
print 'heyy \i escape to check \'';
//6) just try print_r
print_r ('heyy print_r not work without ()');
print_r ('it also print some dark color in font');
// 7) just try printf
printf ('hii printf not work without ()');
printf ('<p>it also give some dark color in font</p>');

?>