<!DOCTYPE html>
<html>
    <head>
        <title>login Page</title>
    </head>
    <body>
    <?php  ?>
        <form action="loginphp.php" method="post">
        <pre> <?php print_r($_POST) ?></pre>
        <fieldset>
            <legend> Login </legend>
        <table>
            <tr>
                <th>
                    Email : 
                </th>
                <td>
                <input type="text" name="firstName" id="firstName"  placeholder="Email">
                </td>
            </tr>

            <tr>
                <th>
                    Password : 
                </th>
                <td>
                <input type="password" name="password" id="firstName"  placeholder="Password">
                </td>
            </tr>
        </table>


        <input type="submit" value="Login" name='login'>
        <input type="submit" value="registration" name='login'>
        </fieldset>
    </div>
    </form>
    </body>
</html>