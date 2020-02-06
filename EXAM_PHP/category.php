<!DOCTYPE html>
<html>
    <head>
        <title>Category Page</title>
    </head>
    <body>
    <?php require_once ("registrationphp.php");?>
        <form method="POST" enctype='multipart/form-data'>
        <pre> <?php print_r($_POST) ?></pre>
        <fieldset>
            <legend>ADD NEW CATEGORY</legend>
        <table>
            <tr>
                <th>
                    Title : 
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
                    URL : 
                </th>
                <td>
                    <input type="url" name="firstName" id="firstName"   placeholder="First Name" value="<?php echo getValue("firstName"); ?>">
                    <span style="color:red">
                    <?php echo (validate("firstName")) ? "Enter valide First name" : "" ;?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>
                    Meta Title : 
                </th>
                <td>
                    <input type="text" name="" id=""   placeholder="" value="<?php echo getValue("firstName"); ?>">
                    <span style="color:red">
                    <?php echo (validate("firstName")) ? "Enter valide First name" : "" ;?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>
                    Parents Category : 
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
                <th></th>
                <td></td>
            </tr>
        </table>
        </fieldset>
    </body>
</html>