<?php

if (!isset($_SESSION)) 
{
    session_start();
}

if($_SESSION['last_request'] > (time() - 4))
{
    if(empty($_SESSION['join_count']))
    {
        $_SESSION['join_count'] = 1;
    }
    elseif($_SESSION['join_count'] < 5)
    {
        $_SESSION['join_count'] = $_SESSION['join_count'] + 1;
    }
    elseif($_SESSION['join_count'] >= 5)
    {
        header("location: http://www.example.com/403.html");
        exit;
    }
}
else
{
    $_SESSION['join_count'] = 1;
}
$_SESSION['last_request'] = time();



?>