<?php 

// https://www.php.net/manual/en/function.session-unset.php
    session_start();
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
// https://www.php.net/manual/en/function.session-unset.php
    header("Location:login.php");

 ?>