<?php ob_start(); ?>
<?php session_start(); ?>

<?php 
    include_once('./functions/check-loggedin.php');
    isLoggedIn();
    $page='profile'; 
?>

<?php
    include_once('../functions/config.php');
    $user=Array();
    $con=connectDb();
    $email=$_SESSION['login']['email'];
    $query="SELECT * FROM `users` WHERE `email`='$email'";
    $res=mysqli_query($con, $query);
    if($res!=false && mysqli_num_rows($res)==1)
        $user=mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
    else {
        echo '<script>alert("No such user");</script>';
        echo '<script>window.location.href="../"</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile - Rai's Hotel</title>

        <?php include_once('includes/head.php'); ?>
        
    </head>
    <body class="bg-light">
    
        <?php include_once('includes/navbar.php'); ?>

        <?php include_once('includes/sidebar.php'); ?>

        <div class="container-fluid mt-4">
            <h2 class="h2">Profile Settings</h2>
            <hr/>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-success text-white"><span class="h5 fw-bold">General Settings</span></div>
                            <div class="card-body">
                                <form id="update-profile-form">
                                    <div class="alert alert-success" style="display: none;">Profile Updated Successfully</div>
                                    <div class="alert alert-danger" style="display: none;">Unable to update profile</div>
                                    <div class="form-group mb-3">
                                        <label for="email" class="fw-bold">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= $user['email'] ?>" readonly />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name" class="fw-bold">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= $user['name'] ?>" required />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="phone" class="fw-bold">Phone</label>
                                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?= $user['phone'] ?>" />
                                    </div>
                                    <input type="hidden" name="action" value="update-profile" />
                                    <div class="w-100 text-center"><button type="submit" class="btn btn-success">Update Profile</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-danger text-white"><span class="h5 fw-bold">Password Settings</span></div>
                            <div class="card-body">
                                <form id="update-password-form">
                                    <div class="alert alert-success" style="display: none;">Password Updated Successfully</div>
                                    <div class="alert alert-danger" style="display: none;"></div>
                                    <div class="form-group mb-3">
                                        <label for="password" class="fw-bold">New Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="New Password" required />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="cpassword" class="fw-bold">Repeat Password</label>
                                        <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Repeat Password" required />
                                    </div>
                                    <input type="hidden" name="action" value="update-password" />
                                    <input type="hidden" name="email" value="<?= $user['email'] ?>" />
                                    <div class="w-100 text-center"><button type="submit" class="btn btn-success">Update Password</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once('includes/foot.php'); ?>
        <script type="text/javascript" src="./assets/js/profile.js"></script>
    </body>
</html>

<?php ob_end_flush(); ?>