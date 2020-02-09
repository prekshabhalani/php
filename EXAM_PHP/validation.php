<?php
// REGISTARTION: field validation return true if data incorrerct
    function validate($fieldName){

        if (isset($_POST["submit"]) ){
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
                    if (!preg_match('/^([A-Za-z ]+)$/' , $_POST[$fieldName])){
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
            case  'image':
                
                if (!empty($_FILES[$fieldName]['name'])) {
                    $type_arry = ["image/jpeg","image/png","image/jpg"];        
                    if(!in_array($_FILES[$fieldName]['type'],$type_arry)){
                        return "file extension must be jpg or png";
                    }
                }
                else{
                    return "you must have to select Image";
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
                    if (!preg_match("/^([A-Za-z ]+)$/",$_POST[$fieldName])) {
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

    function image_validate()
    {
        if (isset($_FILES[$fieldName])) {
            $type_arry = ["image/jpeg","image/png","image/jpg"];        
            if(!in_array($_FILES[$fieldName]['type'],$type_arry)){
                return "file extension must be jpg or png";
            }
        }
        else{
            return "you must have to select Image";
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
            if( isset($_POST['addCategory'])
            && !validate('title') && !validate('content') 
            && !validate('url') && !validate('image') 
            && !validate('metatitle'))
            {
                add_category();
                header( "Location: category.php");        
            }

        }    redirect();
    // LOGIN: redirect to registration page when registration click
    if (isset($_POST['registration'])){
        header( "Location: registration.php");
    }
?>