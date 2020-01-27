<?php
if(!isset($_COOKIE["PHPSESSID"]))
{
    session_start();
}
session_destroy();
header('Location:/KITM_PHP_movieDb/?page=login');