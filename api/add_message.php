<?php
require_once "../db.php";

class Message extends DB
{
    function __construct()
    {
        parent::__construct();
    }
}

$Message = new Message;

$sql = "INSERT INTO `board`(`content`, `school_num`) 
VALUES ('{$_POST['content']}','{$_SESSION['school_num']}')";

$pdo->exec($sql);

header("location:../index.php?do=add_message");
