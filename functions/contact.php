<?php ob_start(); ?>

<?php 
    include_once('config.php');

    if(isset($_POST['action']) && $_POST['action']=='send-message') {
        extract($_POST);
        $con=connectDb();
        $query="INSERT INTO `enquiries` (`name`, `email`, `phone`, `message`) VALUES('".mysqli_real_escape_string($con, $name)."', '".mysqli_real_escape_string($con, $email)."', '".mysqli_real_escape_string($con, $phone)."', '".mysqli_real_escape_string($con, $message)."')";
        $res=mysqli_query($con, $query);
        if($res!=false && mysqli_affected_rows($con)==1) {
            session_start();
            $_SESSION['message-sent']=true;
            echo '<script>window.location.href="../'.$page.'#contact-us-card"</script>';
        }
        else
            echo '<script>window.location.href="../'.$page.'#contact-us-card"</script>';
    }
    else
        echo '<script>window.location.href="../"</script>';
?>

<?php ob_end_flush(); ?>