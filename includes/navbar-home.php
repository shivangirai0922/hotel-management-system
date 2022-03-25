        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-custom-blue fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand fw-bold fs-3 me-auto" href="./">Rai's Hotel</a>
                <div class="collapse navbar-collapse fs-5" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-2">
                            <a class="nav-link text-white" aria-current="page" href="#banner">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-white" href="#about">About Us</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-white" href="#features">Features</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-white" href="#rooms">Rooms</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-white" href="#contact">Contact</a>
                        </li>
                        <?php if(isset($_SESSION['login'])) { ?>
                        <li class="nav-item mx-2">
                            <a class="nav-link btn btn-warning text-dark" href="./<?= $_SESSION['login']['redirect'] ?>">Dashboard</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-white btn btn-outline-success border-2" href="./logout.php">Sign Out</a>
                        </li>
                        <?php } else if(!isset($_SESSION['login'])) { ?>
                        <li class="nav-item mx-2">
                            <a class="nav-link btn btn-warning text-dark" href="./login.php">Sign In</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-white btn btn-outline-success border-2" href="./signup.php">Sign Up</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->