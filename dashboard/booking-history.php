<?php ob_start(); ?>
<?php session_start(); ?>

<?php 
    include_once('./functions/check-loggedin.php');
    isLoggedIn();
    isUserLoggedIn();
    $page='booking history'; 
?>

<?php
    include_once('../functions/config.php');
    $userId=$_SESSION['login']['email'];
    $bookings=Array();
    $con=connectDb();
    $query="SELECT * FROM `bookings` WHERE `userId`='$userId' ORDER BY `id` DESC";
    $res=mysqli_query($con, $query);
    $bookings=mysqli_fetch_all($res, MYSQLI_ASSOC);
    $sno=1;

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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking History - Rai's Hotel</title>

        <?php include_once('includes/head.php'); ?>
        
    </head>
    <body class="bg-light">
    
        <?php include_once('includes/navbar.php'); ?>

        <?php include_once('includes/sidebar.php'); ?>

        <div class="container-fluid mt-4">
            <h2 class="h2">Booking History</h2>
            <hr/>
            
            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped border-dark">
                        <caption>List of <?= $page ?></caption>
                        <thead class="table-dark">
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Contact Email</th>
                                <th>Contact Phone</th>
                                <th>Suite Detail</th>
                                <th>Check-In/Booked For</th>
                                <th>Nights/Hours</th>
                                <th>Payable</th>
                                <th>Booked On</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($bookings as $booking) { ?>
                            <tr>
                                <td><?= $sno++ ?></td>
                                <td><?= $booking['name'] ?></td>
                                <td><?= $booking['email'] ?></td>
                                <td><?= $booking['phone'] ?></td>
                                <td>
                                    <?= $suites[$booking['suiteId']-1]['name'] ?><br/>
                                    <?= $suites[$booking['suiteId']-1]['rate'] ?> / <?= $booking['suiteId']==4?'Hours':'Nights' ?>
                                </td>
                                <td><?= date('M d Y', strtotime($booking['bookingDate'])) ?></td>
                                <td><?= $booking['duration'] ?> <?= $booking['suiteId']==4?'Hours':'Nights' ?></td>
                                <td><?= $booking['payable'] ?></td>
                                <td><?= date('M d Y h:i A', strtotime($booking['createdAt'])) ?></td>
                                <td><?= $booking['status']==0?'<span class="fw-bold text-secondary">Awaiting</span>':($booking['status']==1?'<span class="fw-bold text-success">Approved</span>':'<span class="fw-bold text-danger">Rejected</span>') ?></td>
                            </tr>
                            <?php } ?>
                            <?php if(sizeof($bookings)==0) { ?>
                            <tr>
                                <td colspan="11">No <?= $page ?> in the record</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php include_once('includes/foot.php'); ?>
    </body>
</html>

<?php ob_end_flush(); ?>