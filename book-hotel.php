<?php ob_start(); ?>
<?php
    session_start();
    if(!isset($_SESSION['login']))
        echo '<script>window.location.href="./login.php"</script>';

    if($_SESSION['login']['type']==1) {
        echo '<script>alert("Admin cannot book suite")</script>';
        echo '<script>window.location.href="./dashboard"</script>';
    }

    if(!isset($_GET['id']))
        echo '<script>window.location.href="./"</script>';

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

    include_once('./functions/config.php');
    $user=Array();
    $con=connectDb();
    $email=$_SESSION['login']['email'];
    $query="SELECT * FROM `users` WHERE `email`='$email'";
    $res=mysqli_query($con, $query);
    if($res!=false && mysqli_num_rows($res)==1)
        $user=mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
    
    $id=mysqli_real_escape_string($con, $_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book Hotel - Rai's Hotel</title>

        <?php include_once('includes/header.php'); ?>
        
    </head>
    <body class="bg-white">
        <?php include_once('includes/navbar.php'); ?>

        <div class="my-5"></div>

        <!-- login -->
        <section class="section py-5" id="login">
            <div class="container py-4">
                <h2 class="section-title w-100 text-center fs-1 fw-bold mb-5"><span>Book Hotel</span></h2>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6 pb-3">
                        <div class="card border-2 border-dark text-white">
                            <div class="card-header bg-danger h3 fw-bold text-center text-white">Booking Form</div>
                            <div class="card-body p-0">
                                <?php if($id==1 || $id==2 || $id==3) { ?>
                                
                                <div class="bg-light d-flex p-3">
                                    <img class="img-thumbnail flex-fill w-25" src="<?= $suites[$id-1]['img'] ?>" />
                                    <div class="flex-fill p-2 px-3 d-block text-dark">
                                        <label class="mb-0"><u>Suite Type</u></label>
                                        <h4 class=""><?= $suites[$id-1]['name'] ?></h4>

                                        <label class="mb-0"><u>Suite Rate</u></label>
                                        <h4 class="">&#8377; <?= $suites[$id-1]['rate'] ?> / night</h4>

                                        <label class="mb-0"><u>Net Payable</u></label>
                                        <h4 class="rate">&#8377; <?= $suites[$id-1]['rate'] ?></h4>
                                    </div>
                                </div>

                                <div class="text-dark p-3">
                                    <form action="./functions/book-hotel.php" method="POST">
                                        <div class="form-group mb-3">
                                            <label for="name" class="fw-bold">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= $user['name'] ?>" required />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email" class="fw-bold">Contact Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Contact Email" value="<?= $user['email'] ?>" required />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="phone" class="fw-bold">Contact Phone No.</label>
                                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Contact Phone No." value="<?= $user['phone'] ?>" required />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="bookingDate" class="fw-bold">Check-In Date</label>
                                            <input type="date" class="form-control" name="bookingDate" id="bookingDate" placeholder="Check-In Date" required />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="duration" class="fw-bold">Booking for (nights)</label>
                                            <input type="number" min="1" class="form-control" name="duration" id="duration" placeholder="Booking for (nights)" value="1" required />
                                        </div>
                                        <input type="hidden" name="action" value="book" />
                                        <input type="hidden" name="rate" value="<?= $suites[$id-1]['rate'] ?>" />
                                        <input type="hidden" name="payable" value="<?= $suites[$id-1]['rate'] ?>" />
                                        <input type="hidden" name="suiteId" value="<?= $id ?>" />
                                        <div class="w-100 text-center"><button type="submit" class="btn btn-lg btn-primary fw-bold">Request Booking</button></div>
                                    </form>
                                </div>
                                
                                <?php } else { ?>

                                <div class="bg-light d-flex p-3">
                                    <img class="img-thumbnail flex-fill w-25" src="<?= $suites[$id-1]['img'] ?>" />
                                    <div class="flex-fill p-2 px-3 d-block text-dark">
                                        <label class="mb-0"><u>Suite Type</u></label>
                                        <h4 class=""><?= $suites[$id-1]['name'] ?></h4>

                                        <label class="mb-0"><u>Suite Rate</u></label>
                                        <h4 class="">&#8377; <?= $suites[$id-1]['rate'] ?> / hour</h4>

                                        <label class="mb-0"><u>Net Payable</u></label>
                                        <h4 class="rate">&#8377; <?= $suites[$id-1]['rate'] ?></h4>
                                    </div>
                                </div>

                                <div class="text-dark p-3">
                                    <form action="./functions/book-hotel.php" method="POST">
                                        <div class="form-group mb-3">
                                            <label for="name" class="fw-bold">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= $user['name'] ?>" required />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email" class="fw-bold">Contact Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Contact Email" value="<?= $user['email'] ?>" required />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="phone" class="fw-bold">Contact Phone No.</label>
                                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Contact Phone No." value="<?= $user['phone'] ?>" required />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="bookingDate" class="fw-bold">Booking Date</label>
                                            <input type="date" class="form-control" name="bookingDate" id="bookingDate" placeholder="Booking Date" required />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="duration" class="fw-bold">Booking for (hours)</label>
                                            <input type="number" min="1" class="form-control" name="duration" id="duration" placeholder="Booking for (hours)" value="1" required />
                                        </div>
                                        <input type="hidden" name="action" value="book" />
                                        <input type="hidden" name="rate" value="<?= $suites[$id-1]['rate'] ?>" />
                                        <input type="hidden" name="payable" value="<?= $suites[$id-1]['rate'] ?>" />
                                        <input type="hidden" name="suiteId" value="<?= $id ?>" />
                                        <div class="w-100 text-center"><button type="submit" class="btn btn-lg btn-primary fw-bold">Request Booking</button></div>
                                    </form>
                                </div>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </section>
        <!-- login -->

        <?php include_once('includes/footer.php'); ?>
        <script type="text/javascript" src="./assets/js/book-hotel.js"></script>
    </body>
</html>

<?php ob_end_flush(); ?>