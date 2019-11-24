<?php
require('Model.php');
require('Validator.php');
require('config.php');

$natl_id =$_POST['natld_id'];
$pass = $_POST['psw'];


if (isset($_POST['logform'])) 
{

    $sql = "SELECT natl-id FROM citizen WHERE natld_id = '$natl_id' and password = '$poPass'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if($count == 1) {
        return true;
    } else {
        return false;
    }
}
    return false;
