<?php ob_start(); ?>

<?php 
    include_once('config.php');

    header('Content-type: Application/json');

    if(isset($_POST['action']) && $_POST['action']=='update-profile') {
        extract($_POST);
        $con=connectDb();
        $response=Array(
            'status' => false,
            'message' => 'Unable to update profile'
        );
        $query="UPDATE `users` SET `name`='".mysqli_real_escape_string($con, $name)."', `phone`='".mysqli_real_escape_string($con, $phone)."' WHERE `email`='".mysqli_real_escape_string($con, $email)."'";
        $res=mysqli_query($con, $query);
        if($res!=false) {
            $response['status']=true;
            $response['message']="Profile updated successfully";
       }
       echo json_encode($response);
    }

    if(isset($_POST['action']) && $_POST['action']=='update-password') {
        extract($_POST);
        $con=connectDb();
        $response=Array(
            'status' => false,
            'message' => 'Unable to update password'
        );
        $query="UPDATE `users` SET `password`='".mysqli_real_escape_string($con, $password)."' WHERE `email`='".mysqli_real_escape_string($con, $email)."'";
        $res=mysqli_query($con, $query);
        if($res!=false) {
            $response['status']=true;
            $response['message']="password updated successfully";
       }
       echo json_encode($response);
    }
?>

<?php ob_end_flush(); ?>