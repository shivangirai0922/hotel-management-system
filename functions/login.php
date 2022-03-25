<?php ob_start(); ?>

<?php 
    include_once('config.php');

    if(isset($_POST['action']) && $_POST['action']=='do-login') {
        extract($_POST);
        $email=strtolower($email);
        $con=connectDb();
        $query="SELECT * FROM `users` WHERE `email`='".mysqli_real_escape_string($con, $email)."' AND `password`='".mysqli_real_escape_string($con, $password)."' LIMIT 1";
        $res=mysqli_query($con, $query);
        if($res!=false && mysqli_num_rows($res)==1) {
            $row=mysqli_fetch_assoc($res);
            if($row['email']==mysqli_real_escape_string($con, $email) && $row['password']==mysqli_real_escape_string($con, $password)) {
                session_start();
                $_SESSION['login']['email']=$row['email'];
                $_SESSION['login']['type']=$row['type'];
                if($row['type']==1)
                    $_SESSION['login']['redirect']='dashboard/';
                if($row['type']==2)
                    $_SESSION['login']['redirect']='dashboard/';
                echo '<script>window.location.href="../'.$_SESSION['login']['redirect'].'"</script>';
            }
            else
                echo '<script>window.location.href="../login.php?attempt=failed"</script>';
        }
        else
            echo '<script>window.location.href="../login.php?attempt=failed"</script>';
    }
    else
        echo '<script>window.location.href="../login.php"</script>';
?>

<?php ob_end_flush(); ?>