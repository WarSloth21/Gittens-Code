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
 require 'classes/Public_Console.php';
 require 'classes/Validator.php';

 // create the registration page object
 $pconsole = new Public_Console;
 // view indicates the HTML file to use and display
 $view = $pconsole->makeView();

// model stores all of our database queries
 $model = $pconsole->makeModel();


 $view->setTemplate('public_console.tpl.php');
 $view->display();

if(empty($_POST)) {
    //$findCitizen = $model->find('citizen', $_POST);

    if($model->find('citizen', $_POST)){
        $view->setTemplate('public_console.tpl.php');
        $view->display();
    }
    else {
        header('Location: license_upload.php');
    }
}

// if data valid update database
else{
    if($model->find('citizen', $_POST))
    {
        header('Location:public_console.php');
    }
    else{
        header('Location:index.php');
    }
}