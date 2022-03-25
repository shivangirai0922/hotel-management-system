<?php ob_start(); ?>

<?php 
    session_start();
    include_once('config.php');

    $suites=Array();
    $suites[0]=Array(
        'name' => 'Deluxe Suite',
        'rate' => 2000,
        'img' => 'assets/img/suites/suites-1.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    );
    $suites[1]=Array(
        'name' => 'Grand Suite',
        'rate' => 3000,
        'img' => 'assets/img/suites/suites-3.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    );
    $suites[2]=Array(
        'name' => 'Luxury Suite',
        'rate' => 5000,
        'img' => 'assets/img/suites/suites-2.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    );
    $suites[3]=Array(
        'name' => 'Restaurant',
        'rate' => 500,
        'img' => 'assets/img/suites/restaurant-1.jpg',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    );

    if(isset($_POST['action']) && $_POST['action']=='book') {
        extract($_POST);
        $bookingDate=date('Y-m-d', strtotime($bookingDate));
        $userId=$_SESSION['login']['email'];
        $con=connectDb();
        $query="INSERT INTO `bookings`(`userId`, `name`, `email`, `phone`, `suiteId`, `bookingDate`, `duration`, `payable`) VALUES('".mysqli_real_escape_string($con, $userId)."', '".mysqli_real_escape_string($con, $name)."', '".mysqli_real_escape_string($con, $email)."', '".mysqli_real_escape_string($con, $phone)."', '".mysqli_real_escape_string($con, $suiteId)."', '".mysqli_real_escape_string($con, $bookingDate)."', '".mysqli_real_escape_string($con, $duration)."', '".mysqli_real_escape_string($con, $payable)."')";
        $res=mysqli_query($con, $query);
        if($res!=false && mysqli_affected_rows($con)==1) {
            echo '<script>alert("Request for booking has been submitted");</script>';
            echo '<script>window.location.href="../dashboard"</script>';
        }
        else {
            echo '<script>alert("Cannot submit the request. Please try again");</script>';
            echo '<script>window.location.href="../"</script>';
        }
    }
    else
        echo '<script>window.location.href="../"</script>';
?>

<?php ob_end_flush(); ?>