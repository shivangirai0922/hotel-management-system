<?php ob_start(); ?>
<?php session_start(); ?>

<?php 
    include_once('./functions/check-loggedin.php');
    isLoggedIn();
    isAdminLoggedIn();
    $page='enquiries'; 
?>

<?php
    include_once('../functions/config.php');
    $enquiries=Array();
    $con=connectDb();
    $query="SELECT * FROM `enquiries` ORDER BY `id` DESC";
    $res=mysqli_query($con, $query);
    $enquiries=mysqli_fetch_all($res, MYSQLI_ASSOC);
    $sno=1;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enquiries - Rai's Hotel</title>

        <?php include_once('includes/head.php'); ?>
        
    </head>
    <body class="bg-light">
    
        <?php include_once('includes/navbar.php'); ?>

        <?php include_once('includes/sidebar.php'); ?>

        <div class="container-fluid mt-4">
            <h2 class="h2">Enquiries</h2>
            <hr/>
            
            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped border-dark">
                        <caption>List of <?= $page ?></caption>
                        <thead class="table-dark">
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th class="w-25">Message</th>
                                <th>Messaged On</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($enquiries as $enquiry) { ?>
                            <tr>
                                <td><?= $sno++ ?></td>
                                <td><?= $enquiry['name'] ?></td>
                                <td><?= $enquiry['email'] ?></td>
                                <td><?= $enquiry['phone'] ?></td>
                                <td><?= $enquiry['message'] ?></td>
                                <td><?= date('M d Y h:i A', strtotime($enquiry['createdAt'])) ?></td>
                            </tr>
                            <?php } ?>
                            <?php if(sizeof($enquiries)==0) { ?>
                            <tr>
                                <td colspan="6">No <?= $page ?> in the record</td>
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