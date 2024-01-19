

<?php
    // LOGOUT PAGE
    session_start();
    
    $_SESSION['auth'] = null;
    unset($_SESSION['auth']);
    
    session_destroy();
    header("location:index.php");

    // THIS LOGOUT PAGE SEND THE USER TO THE HOME PAGE
?>