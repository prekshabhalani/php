<!DOCTYPE html>
<html>
    <head>
        <title>Registartion Page</title>
        <script>
            function ischeck(othercheck) {
                var otherInfo = document.getElementById('otherInfo');
                otherInfo.style.display = othercheck.checked?"block":"none";
            }
        </script>
    </head>
    <body>
    <?php require_once ("loginphp.php"); ?>
        <form action="blogspot_listing.php" method="POST" enctype='multipart/form-data'>
        <pre> <?php print_r($_POST) ?></pre>
        <fieldset>
            <legend>YOUR ACCOUNT DETAILS</legend>
        <table>
            <tr>
                <th>
                    Prefix : 
                </th>
                <td>
                <?php $prefix = [ "Mr","Miss","Mrs","Dr"]?>
                    <select name="prefix" id="prefix">
                       <?php foreach ($prefix as $title) :
                        ?><option value="<?php echo $title ;?>" <?php if (@getValue("prefix") == $title ) echo 'selected="selected"'; 
                        ?>><?php echo $title ;?></option>
                       <?php endforeach;?>        
                    </select>
                </td>
            </tr>
            <tr>
                <th>
                    First Name : 
                </th>
                <td> <input type="text" name="firstName" id="firstName"   placeholder="First Name" value="<?php echo getValue("firstName"); ?>"> </td>           </tr>
            <tr>
                <th>
                    Last Name : 
                </th>
                <td> <input type="text" name="lastName" id="lastName"   placeholder="LastName" value="<?php echo getValue("lastName"); ?>">
                </td>
            </tr>
           
            <tr>
                <th>
                    Phone Number : 
                </th>
                <td>
                    <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" value="<?php echo getValue( "phoneNumber"); ?>"> 
                </td>
            </tr>
            <tr>
                <th>
                    Email : 
                </th>
                <td>
                    <input type="text" name="email" id="email" placeholder="Email" value="<?php echo getValue("email"); ?>">
                </td>
            </tr>
            <tr>
                <th>
                    Password : 
                </th>
                <td>
                    <input type="password" name="password" id="password" placeholder="Password">
                </td>
            </tr>
            <tr>
                <th>
                    Confirm Password : 
                </th>
                <td>
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
                </td>
            </tr>
            <tr>
                <th>
                    Informaton : 
                </th>
                  <td>
                        <textarea name="information"><?php echo getValue("information"); ?> </textarea>
                </td>
            </tr>
            <tr>
                <td>
                <input type="checkbox" name="other" id="other" onclick="ischeck(this)">Hereby, I accept terms and conditions.
                </td>
            </tr>

         </table>
        </fieldset>
        <input type="submit" value="Submit" name='submit'>
    </div>
    </form>
    </body>
</html>