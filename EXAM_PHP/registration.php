<!DOCTYPE html>
<html>
    <head>
        <title>Registartion Page</title>
    </head>
    <body>
    <?php require_once ("registrationphp.php"); ?>
        <form method="POST" enctype='multipart/form-data'>
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
                        <?php foreach ($prefix as $title) :?>
                        <option value="<?php echo $title ;?>"
                            <?php echo (getValue("prefix") == $title ) ? 'selected="selected"' : ""; ?>>
                            <?php echo $title ;?></option>
                            <?php endforeach;?>        
                        </select>
                </td>
            </tr>
            <tr>
                <th>
                    First Name : 
                </th>
                <td>
                    <input type="text" name="firstName" id="firstName"   placeholder="First Name" value="<?php echo getValue("firstName"); ?>">
                    <span style="color:red">
                    <?php echo (validate("firstName")) ? "Enter valide First name" : "" ;?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>
                    Last Name : 
                </th>
                <td>
                    <input type="text" name="lastName" id="lastName"   placeholder="LastName" value="<?php echo getValue("lastName"); ?>">
                    <span style="color:red">
                    <?php echo (validate("lastName")) ? "Enter valide Lastname" : "";?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>
                    Phone Number : 
                </th>
                <td>
                   <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" value="<?php echo getValue( "phoneNumber"); ?>"> 
                   <span style="color:red">
                    <?php echo (validate("phoneNumber")) ? "Enter valide PhoneNumber" : "";?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>
                    Email : 
                </th>
                <td>
                    <input type="text" name="email" id="email" placeholder="Email" value="<?php echo getValue("email"); ?>">
                    <span style="color:red">
                    <?php echo (validate("email")) ? "Enter valide Email" : "";?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>
                    Password : 
                </th>
                <td>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <span style="color:red">
                    <?php echo (validate("password")) ? "Enter valid Password" : "";?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>
                    Confirm Password : 
                </th>
                <td>
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
                    <span style="color:red">
                    <?php echo (validate("confirmPassword")) ? "Enter password you enter above" : "";?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>
                    Informaton : 
                </th>
                <td>
                    <textarea name="information"><?php echo(isset($_POST["information"])) ? getValue("information") : ''; ?>
                    </textarea>
                    <span style="color:red">
                    <?php echo (validate("information")) ? "Information must not be empty" : "";?>
                    </span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="terms" id="terms" >Hereby, I accept terms and conditions.
                    <span style="color:red">
                    <?php echo (isset($_POST['submit']))?
                        ((!isset($_POST['terms'])) ? "You must have to accept terms and conditions." : ""):"";?>
                    </span>
                </td>
            </tr>
         </table>
        </fieldset>
        <input type="submit" value="Submit" name='submit' >
    </div>
    </form>
    </body>
</html>