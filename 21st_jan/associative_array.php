<form method='POST'>
<P>ENTER SUBJECT INTO CAPITAL : </P>
<input type='text' name='subjectName' placeholoder="enter subject name in capital">
<input type='submit' value='submit'>
</form>

<?php
if(isset($_POST['subjectName']))
{
    $subjectName = $_POST['subjectName'];

    $computerSubject = ['PHP'=>'30-01-2020','IOT'=>'31-01-2020','ANDROID'=>'1-02-2020'];
    echo "Your subjects is: <br>";
    foreach ($computerSubject as $name => $date) {
        echo $name."<br>";
        if($name == $subjectName)
        {    
            print_r($name .' : '.$date .'<br>' ) ;       
        }
    }
}
else
{

}
?>