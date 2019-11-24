<?php
/**
 * Create the registration page and functionality for the
 * vehicle registration system
 */
session_start();

 require 'config.php';
 require 'classes/Page.php';
 require 'classes/Model.php';
 require 'classes/AbstractView.php';
 require 'classes/License_Upload.php';
 require 'classes/Validator.php';

 // create the registration page object
 $licupload = new License_Upload;
 // view indicates the HTML file to use and display
 $view = $licupload->makeView();

 $model = $licupload->makeModel();


$view->setTemplate('license_upload.tpl.php');
$view->display();

//Check if Upload button was clicked
if (isset($_POST['add_license_img']))
{
    // echo "<pre>", print_r($_POST), "</pre>";
    // echo "<pre>", print_r($_FILES['license_image']), "</pre>";
    // echo "<pre>", print_r($_FILES['license_image']['name']), "</pre>";
    
   // echo "<pre>", print_r($_FILES['license_image']['name']), "</pre>";
    
    // $licensenum = $_POST['license_num'];
    // $driverImageName = time().' ' . $_FILES['license_image']['name'];
    // $target = 'upload/' . $driverImageName;

    //check if image Upload Sucessfully
    // if(move_uploaded_file($_FILES['license_image']['tmp_name'], $target))
    // {
    //     $model->update($tablename,$_POST);        
    // }
    // else {
    //     $msg = "Falied Upolad";
    // }

    if($model->update('citizen',$_POST))
    {
        header('Location:public_console.php');
    }
    else{
        header('Location:cover_note_upload.html');
    }
}
