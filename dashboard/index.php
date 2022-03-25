<?php ob_start(); ?>
<?php session_start(); ?>

<?php 
    include_once('./functions/check-loggedin.php');
    isLoggedIn();
    if($_SESSION['login']['type']==1)
        echo '<script>window.location.href="./bookings.php"</script>';
    else if($_SESSION['login']['type']==2)
        echo '<script>window.location.href="./booking-history.php"</script>';
?>

<?php ob_end_flush(); ?>