<?php
    session_start();
    unset($_SESSION['id']);
    session_destroy();
    header('Location:../admin/admin-login.php');
?>