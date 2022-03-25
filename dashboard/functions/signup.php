<?php ob_start(); ?>

<?php 
    include_once('config.php');

    if(isset($_POST['action']) && $_POST['action']=='do-signup') {
        extract($_POST);
        $con=connectDb();
        $query="INSERT INTO `users` (`email`, `name`, `password`, `phone`) VALUES('$email', '$name', '$password', '$phone')";
        $res=mysqli_query($con, $query);
        if($res!=false && mysqli_affected_rows($con)==1) {
            session_start();
            $_SESSION['login']['email']=$email;
            $_SESSION['login']['type']=2;
            $_SESSION['login']['redirect']='dashboard/';
            echo '<script>window.location.href="../'.$_SESSION['login']['redirect'].'"</script>';
        }
        else
            echo '<script>window.location.href="../signup.php?attempt=failed"</script>';
    }
    else
        echo '<script>window.location.href="../signup.php"</script>';
?>

<?php ob_end_flush(); ?>