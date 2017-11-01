<?php
    try
    {
        require_once 'googlesession.php';
        $auth->logout();
    }
    catch(Exception $ex){session_destroy();}
    //$GLOBALS['login'] = false;
    header("Location: index.php");
?>