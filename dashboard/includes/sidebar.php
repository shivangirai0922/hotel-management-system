        <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
            <div class="offcanvas-header bg-custom-blue text-white">
                <h4 class="offcanvas-title fw-bold" id="sidebarLabel">Dashboard Menu</h4>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="list-unstyled list-group fw-bold fs-5">
                    <a href="../" class="list-group-item-action">
                        <i class="fa-solid fa-home"></i>
                        Home
                    </a>
                    <?php if($_SESSION['login']['type']==1) { ?>
                    <a href="./bookings.php" class="list-group-item-action <?= $page=='bookings'?'active':'' ?>">
                        <i class="fa-solid fa-hotel"></i>
                        Bookings
                    </a>
                    <a href="./users.php" class="list-group-item-action <?= $page=='users'?'active':'' ?>">
                        <i class="fa-solid fa-users"></i>
                        Users
                    </a>
                    <a href="./enquiries.php" class="list-group-item-action <?= $page=='enquiries'?'active':'' ?>">
                        <i class="fa-solid fa-circle-question"></i>
                        Enquiries
                    </a>
                    <?php } ?>
                    <?php if($_SESSION['login']['type']==2) { ?>
                    <a href="./booking-history.php" class="list-group-item-action <?= $page=='booking history'?'active':'' ?>">
                        <i class="fa-solid fa-hotel"></i>
                        My Bookings
                    </a>
                    <?php } ?>
                    <a href="./profile.php" class="list-group-item-action <?= $page=='profile'?'active':'' ?>">
                        <i class="fa-solid fa-user"></i>
                        Profile
                    </a>
                    <a href="../logout.php" class="list-group-item-action">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        Sign Out
                    </a>
                </div>
            </div>
        </div>