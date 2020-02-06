<!DOCTYPE html>
<html>
    <head>
        <title>ADD BLOG POST PAGE</title>
    </head>
    <body>
    <?php require_once ("registrationphp.php");?>
    <?php require_once("header.php"); ?>
        <form method="POST" enctype='multipart/form-data'>
        <pre> <?php print_r($_POST) ?></pre>
        <fieldset>
            <legend>ADD NEW BLOG POST</legend>
        <table>
            <tr>
                <th>
                    Title : 
                </th>
                <td>
                    <input type="text" name="title" id="title"   placeholder="Enter Title" value="<?php echo getValue("title"); ?>">
                    <span style="color:red">
                    <?php echo (validate("firstName")) ? "Enter valide First name" : "" ;?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>
                    Content : 
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
                <th>
                    URL : 
                </th>
                <td>
                    <input type="url" name="url" id="url"   placeholder="Enter Related url" value="<?php echo getValue("url"); ?>">
                    <span style="color:red">
                    <?php echo (validate("firstName")) ? "Enter valide First name" : "" ;?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>Published At :</th>
                <td><input type="date" name="publishedAt" id="publishedAt"  > </td>
            </tr>
            <tr>
                <th>
                    Category : 
                </th>
                <td>
                    <?php $prefix = [ "Mr","Miss","Mrs","Dr"]?>
                    <select name="prefix" id="prefix" multiple>
                        <?php foreach ($prefix as $title) :?>
                        <option value="<?php echo $title ;?>"
                            <?php echo (getValue("prefix") == $title ) ? 'selected="selected"' : ""; ?>>
                            <?php echo $title ;?></option>
                            <?php endforeach;?>        
                    </select>
                </td>
            </tr>
            <tr>
                <th>Image</th>
                <td>
                    <input type="file" value="Upload Image" name="image">
                </td>
            </tr>
            <tr>
                
                <td rospan=2>
                    <input type="submit" value="Add BlogPost" name='addBlog' >
                </td>
            </tr>
        </table>
        </fieldset>
    </body>
</html>