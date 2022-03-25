<?php
    if(session_status()==PHP_SESSION_NONE)
        session_start();

    function isLoggedIn() {
        if(!isset($_SESSION['login']))
            echo '<script>window.location.href="../login.php"</script>';
    }

    function isAdminLoggedIn() {
        isLoggedIn();
        if($_SESSION['login']['type']!=1)
            echo '<script>window.location.href="./index.php"</script>';
    }

    function isUserLoggedIn() {
        isLoggedIn();
        if($_SESSION['login']['type']!=2)
            echo '<script>window.location.href="./index.php"</script>';
    }
?>