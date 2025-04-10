 <?php
    include_once("connect.php");
    $name = $_POST['name'];
    $moblie = $_POST['moblie'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $photo = $_FILES['name']['photo'];
    $tmp_name = $_FILES['tmp_name']['photo'];
    $role = $_POST['role'];

    if($password == $confirm_password) {}
    else{
        echo'
        alert("password miss match" )
        ';
    }
 ?>
