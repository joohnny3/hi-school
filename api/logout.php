<?php require_once "../db.php";

class Logout extends DB
{
    function __construct()
    {
        parent::__construct();
    }
}

$Logout = new Logout;



$_SESSION = [];
header("location:../index.php");
