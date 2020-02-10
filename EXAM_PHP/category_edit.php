<!DOCTYPE html>
<html>
    <head>
        <title>UPDATE CATEGORY PAGE</title>
    </head>
    <body>
    <?php require("categoryphp.php");?>
    <?php require("header.php"); ?>
        <form method="POST" enctype='multipart/form-data'>
        <pre> <?php print_r($_POST); print_r($_GET);
        ?></pre>
        <fieldset>
            <legend>UPDATE CATEGORY</legend>
        <table>
            <tr>
                <td colspan= "2">
                <image height="150px"width="150px"src="category_image/a.jpg" /> 
                 <!--make image  dynamic  -->
                </td>
            </tr>
            <tr>
                <th>
                    Title : 
                </th>
                <td>
                    <input type="text" name="title" id="title"   placeholder="Enter Title" value="<?php echo update_category("title"); ?>">
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
                    <textarea name="content" ><?php echo( update_category("content")); ?>
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
                    <input type="url" name="url" id="url"   placeholder="Enter Related url" value="<?php echo update_category("url"); ?>">
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
                    <input type="text" name="metaTitle" id="metaTitle"   placeholder="Enter Meta Title" value="<?php echo update_category("metaTitle"); ?>">
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
                            <?php echo (update_Category("parents_category") == $title ) ? 'selected="selected"' : ""; ?>>
                            <?php echo $title ;?>
                        </option>
                            <?php endforeach;?>        
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="Update" value="Upadte Category" >
                </td>
            </tr>
        </table>
        </fieldset>
    </body>
</html>