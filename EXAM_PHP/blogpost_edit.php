<!DOCTYPE html>
<html>
    <head>
        <title>ADD BLOG POST PAGE</title>
    </head>
    <body>
    <?php require_once("blogpostphp.php");?>
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
                    <input type="text" name="title" id="title"   placeholder="Enter Title" value="<?php echo update_blogpost("title"); ?>">
                    <span style="color:red">
                    <?php echo (validate("title")) ? "Enter valide title" : "" ;?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>
                    Content : 
                </th>
                <td>
                    <textarea name="content"><?php echo(isset($_POST["content"])) ? update_blogpost("content") : ''; ?>
                    </textarea>
                    <span style="color:red">
                    <?php echo (validate("content")) ? "Content must not be empty" : "";?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>
                    URL : 
                </th>
                <td>
                    <input type="url" name="url" id="url"   placeholder="Enter Related url" value="<?php echo update_blogpost("url"); ?>">
                    <span style="color:red">
                    <?php echo (validate("Url")) ? "Enter valide Url" : "" ;?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>Published At :</th>
                <td><input type="date" name="publishedAt" id="publishedAt"  > 
                    <span style="color:red">
                        <?php echo (validate("publishedAt")) ? "published date must not empty " : "" ;?>
                    </span>
                </td>
            </tr>
            <tr>
                <th>
                    Category : 
                </th>
                <td>
                    <?php  $category = category_array() ?>
                    <select name="category" id="category" multiple>
                        <?php foreach ($category as $title) :?>
                        <option value="<?php echo $title ;?>"
                            <?php echo (update_blogpost("category") == $title ) ? 'selected="selected"' : ""; ?>>
                            <?php echo $title ;?></option>
                            <?php endforeach;?>        
                    </select>
                </td>
            </tr>
            <tr>
                <th>Image</th>
                <td>
                    <input type="file" value="Upload Image" name="image">
                    <span style="color:red">
                        <?php echo (validate("uplodeImage")) ? "you must have to uplode image " : "" ;?>
                    </span>
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