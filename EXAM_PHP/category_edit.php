<!DOCTYPE html>
<html>
    <head>
        <title>Category Page</title>
    </head>
    <body>
    <?php require("categoryphp.php");?>
    <?php require("header.php"); ?>
        <form method="POST" enctype='multipart/form-data'>
        <pre> <?php print_r($_POST);
            
        ?></pre>
        <fieldset>
            <legend>ADD NEW CATEGORY</legend>
        <table>
            <tr>
                <th>
                    Title : 
                </th>
                <td>
                    <input type="text" name="title" id="title"   placeholder="Enter Title" value="<?php echo getValue("title"); ?>">
                    <span style="color:red">
                    <?php echo (validate("title")) ? "Invalide Title" : "" ;?>
                    </span>

                </td>
            </tr>
            <tr>
                <th>
                    Content : 
                </th>
                <td>
                    <textarea name="content" ><?php echo(isset($_POST["content"])) ? getValue("content") : ''; ?>
                    </textarea>
                    <span style="color:red">
                    <?php echo (validate("content")) ? "Invalide content" : "";?>
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
                    <?php echo (validate("url")) ? "Invalide Url" : "" ;?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>
                    Meta Title : 
                </th>
                <td>
                    <input type="text" name="metaTitle" id="metaTitle"   placeholder="Enter Meta Title" value="<?php echo getValue("metaTitle"); ?>">
                    <span style="color:red">
                    <?php echo (validate("metaTitle")) ? "Invalide Meta Title" : "" ;?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>
                    Parents Category : 
                </th>
                <td>
                    <?php $parents_category = parents_array();?>
                    <select name="parents_category" id="parents_category">
                        <option value=""></option>
                        <?php foreach ($parents_category as $title) :?>
                        <option value="<?php echo $title ;?>"
                            <?php echo (getValue("parents_category") == $title ) ? 'selected="selected"' : ""; ?>>
                            <?php echo $title ;?>
                        </option>
                            <?php endforeach;?>        
                    </select>
                </td>
            </tr>
                <td>
                    <input type="submit" name="edit" value="Update">
                </td>
            </tr>
        </table>
        </fieldset>
    </body>
</html>