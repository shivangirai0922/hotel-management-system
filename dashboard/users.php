<?php ob_start(); ?>
<?php session_start(); ?>

<?php 
    include_once('./functions/check-loggedin.php');
    isLoggedIn();
    isAdminLoggedIn();
    $page='users'; 
?>

<?php
    include_once('../functions/config.php');
    $users=Array();
    $con=connectDb();
    $query="SELECT * FROM `users` ORDER BY `id` DESC";
    $res=mysqli_query($con, $query);
    $users=mysqli_fetch_all($res, MYSQLI_ASSOC);
    $sno=1;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Users - Rai's Hotel</title>

        <?php include_once('includes/head.php'); ?>
        
    </head>
    <body class="bg-light">
    
        <?php include_once('includes/navbar.php'); ?>

        <?php include_once('includes/sidebar.php'); ?>

        <div class="container-fluid mt-4">
            <h2 class="h2">Users</h2>
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
                                <th>Registerd On</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $user) { ?>
                            <tr>
                                <td><?= $sno++ ?></td>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= $user['phone'] ?></td>
                                <td><?= date('M d Y h:i A', strtotime($user['createdAt'])) ?></td>
                            </tr>
                            <?php } ?>
                            <?php if(sizeof($users)==0) { ?>
                            <tr>
                                <td colspan="5">No <?= $page ?> in the record</td>
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