<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>
</head>
<body>
<?php require_once ("registrationphp.php"); ?>
    <pre><?php print_r($_POST);?></pre>
    <form method="POST"> 
    <div>
        <span style="color:red">
            <?php echo login() ? "" : "Invalid Email or Password";?>
        </span>
    </div>
    <table>
        <tr>
            <th>
                Email : 
            </th>
            <td>
                <input type="text" name="userId" require id="userid" placeholder="Email" value="<?php echo getValue("email"); ?>">
            </td>
        </tr>
        <tr>
            <th>
                Password : 
            </th>
            <td>
                <input type="password" name="loginPassword" require id="password" placeholder="Password">
            </td>
        </tr>
    </table>
    <input type="submit" value="Login" name='login' >
    <input type="submit" value="registration" name='registration' >
</form>
</body>
</html>