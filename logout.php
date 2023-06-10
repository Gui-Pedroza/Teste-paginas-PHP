<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: exemplo.php", true, 301);
?>