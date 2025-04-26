<?php 
    require_once __DIR__.DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR."init.php";
    include_once("includes/session_starter.php");

    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // echo "$mobile and $password<br/>";

    $query = mysqli_query($conn,"SELECT * FROM users WHERE mobile='$mobile'");

    if(mysqli_num_rows($query)==0){
        echo "
            alert('Invalid Credintials');
        ";
        exit();
    }
    
    $user = mysqli_fetch_assoc($query);
    $grps = mysqli_query($conn,"SELECT * FROM users WHERE role='2'");
    $grp_data = mysqli_fetch_all($grps, MYSQLI_ASSOC);

    $_SESSION['user'] = $user;
    $_SESSION['gourps'] = $grp_data;

    routeScript('dashboard.php');

?>