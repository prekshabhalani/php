<?php
$india = ['Gujrat'=>['morbi','rajkot'],'Maharastra' => ['pune','mumbai','nagpur','nasic'],'UP'=> ['agara','lucknow'],'MP'=>['bhopal','indor','ujjen'] ];
echo "<strong>demostration of the multidemention array </strong><br>";
echo "<strong>I Love My india</strong><hr>";
foreach ($india as $state => $district) {
    echo "<ul>$state";
    foreach ($district as $district)
    echo "<li>$district</li>";
    echo "</ul>";
    
}
?>
<!-- is it called as an multidimention 
// $india['Gujrat'] = ['morbi','rajkot'];
// print_r ($india);
// print_r ($india['Gujrat']);

 -->