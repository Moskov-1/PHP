<?php 

    require_once __DIR__.DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR."init.php";
    require_once __DIR__.DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR."connect.php";

    $votes = $_SESSION['getvots'];
    $total_votes;
    $gid;
    $uid;

    $updated_votes;
    $updated_user_status;