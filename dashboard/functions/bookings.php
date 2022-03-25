<?php ob_start(); ?>

<?php 
    include_once('config.php');

    header('Content-type: Application/json');

    if(isset($_GET['action']) && $_GET['action']=='update-booking-status') {
        extract($_GET);
        $con=connectDb();
        $response=Array(
            'status' => false,
            'message' => 'Unable to update status'
        );
        $query="UPDATE `bookings` SET `status`='".mysqli_real_escape_string($con, $status)."' WHERE `id`='".mysqli_real_escape_string($con, $id)."'";
        $res=mysqli_query($con, $query);
        if($res!=false) {
            $response['status']=true;
            $response['message']="Status updated successfully";
       }
       echo json_encode($response);
    }
?>

<?php ob_end_flush(); ?>