<?php
include('User.php');
if (isset($_POST['userForm'])) {
    $objUser = new User();
    $objUser1 = new User();
    $objUser->attribute=$_POST['userForm'];
    if($objUser->validate()){
        $objUser->save();
    }else{
        echo User::getErrorSummary($objUser);die;
    }
}
?>
