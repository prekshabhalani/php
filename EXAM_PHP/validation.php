<?php
// REGISTARTION: field validation return true if data incorrerct
    function validate($fieldName){
        if (isset($_POST["submit"])){
            switch ($fieldName) {
                case 'firstName':
                    if (!preg_match('/^([A-Za-z]+)$/' , $_POST[$fieldName])){
                        return true;
                    }
            break;
                case 'lastName':
                    if (!preg_match("/^([A-Za-z]+)$/",$_POST[$fieldName])) {
                        return true;
                    }
            break;
                case 'phoneNumber':
                    if (!preg_match('/^[0-9]{10}$/',$_POST[$fieldName]) ){
                        return true;
                    }
            break;
                case 'email':
                    if (!filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL)) {    
                        return true;
                    }
                    else if (isEmailFound($_POST[$fieldName]) == 'true')
                    {
                        return  'Email Exist';
                    }
            break;
                case 'password':
                    if (!preg_match('/^[^@][a-zA-Z@0-9]{4}[a-zA-Z@0-9]+$/', $_POST[$fieldName])) {    
                        return true;
                    }
            break;
                case 'confirmPassword':
                    if (!($_POST["password"] == $_POST["confirmPassword"])) {
                        return true;
                    }
            break;
                case 'information':
                    if ($_POST['information'] == "") {
                        return true;
                    }      
            break;
            
            default:
            break;
            }
        }
        if (isset($_POST["addCategory"])){
            switch ($fieldName) {
                case 'title':
                    if (!preg_match('/^([A-Za-z]+)$/' , $_POST[$fieldName])){
                        return true;
                    }
            break;
                case 'content':
                    if (!preg_match("/^([A-Za-z ]+)$/",$_POST[$fieldName])) {
                        return true;
                    }
            break;
                // case 'url':
            //         if (!preg_match('/^([A-Za-z]+)$/' , $_POST[$fieldName])){
            //             return true;
            //         }
            // break;
                case 'metaTitle':
                    if (!preg_match('/^([A-Za-z]+)$/' , $_POST[$fieldName])){
                        return true;
                    }
            break;
                case 'parents_category':
            break;
                case 'confirmPassword':
                    if (!($_POST["password"] == $_POST["confirmPassword"])) {
                        return true;
                    }
            break;
            default:
            break;
            }
        }
 
        if (isset($_POST["addBlog"])){
            switch ($fieldName) {
                case 'title':
                    if (!preg_match('/^([A-Za-z]+)$/' , $_POST[$fieldName])){
                        return true;
                    }
            break;
                case 'content':
                    if (!preg_match("/^([A-Za-z]+)$/",$_POST[$fieldName])) {
                        return true;
                    }
            break;
                // case 'url':
                //     if (!preg_match('/^([A-Za-z]+)$/' , $_POST[$fieldName])){
                //         return true;
                //     }
            // break;
                case 'publishedAt':
                    if ($_POST[$fieldName] == " "){
                        return true;
                    }
            break;
            default:
            break;
            }
        }
    }

    // REGISTARTION: check for the sucssesfull registration and redirect 
    function redirect(){
        if( isset($_POST['submit'])
            && !validate('firstName') && !validate('lastName') 
            && !validate('email') && !validate('phoneNumber') 
            && !validate('information') && !@validate('password')
            && !validate('confirmPassword') && (isset($_POST['terms'])))
            {
                store_usertable();
                header( "Location: blogpost.php");
            }
    }    redirect();
    // LOGIN: redirect to registration page when registration click
    if (isset($_POST['registration'])){
        header( "Location: registration.php");
    }
?>
<!-- 
<h2>PHP Image Upload with Size Type Dimension Validation</h2>
<form id="frm-image-upload" action="index.php" name='img' method="post"
    enctype="multipart/form-data">
    <div class="form-row">
        <div>Choose Image file:</div>
        <div>
            <input type="file" class="file-input" name="file-input">
        </div>
    </div>

    <div class="button-row">
        <input type="submit" id="btn-submit" name="upload"
            value="Upload">
    </div>
</form>
<?php// if(!empty($response)) { ?>
<div class="response <?php// echo $response["type"]; ?>
    ">
    <?php// echo $response["message"]; ?>
</div>
<?php //}?> -->
<?php
// if (isset($_POST["upload"])) {
//     // Get Image Dimension
//     $fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
//     $width = $fileinfo[0];
//     $height = $fileinfo[1];
    
//     $allowed_image_extension = array(
//         "png",
//         "jpg",
//         "jpeg"
//     );
    
//     // Get image file extension
//     $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
    
//     // Validate file input to check if is not empty
//     if (! file_exists($_FILES["file-input"]["tmp_name"])) {
//         $response = array(
//             "type" => "error",
//             "message" => "Choose image file to upload."
//         );
//     }    // Validate file input to check if is with valid extension
//     else if (! in_array($file_extension, $allowed_image_extension)) {
//         $response = array(
//             "type" => "error",
//             "message" => "Upload valiid images. Only PNG and JPEG are allowed."
//         );