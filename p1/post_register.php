<?php 
    include_once("connect.php");

    $name = $_POST["name"] ?? '';
    $mobile = $_POST["mobile"]?? '';
    $password = $_POST["password"] ?? '';
    $confirm_password = $_POST["confirm_password"] ?? '';
    $address = $_POST["address"] ?? '';
    $role = $_POST["role"] ?? '1';
    $photo = $_FILES['photo']['name'] ?? '';
    $tmp_name = $_FILES['photo']['tmp_name'] ?? '';


    if(empty($password) || $password != $confirm_password) {
        echo "
            <script>
                alert('password miss match');
            </script>
        ";
        exit();
    }
    else{
        move_uploaded_file($tmp_name, "uploads/$photo");
        $img = "uploads/$photo";
        
        $insert = mysqli_query($conn,"INSERT INTO users (name, mobile,   password,     role,  address,  photo, status, votes) 
                                                            VAlUES('$name', '$mobile', '$password', '$role', '$address', '$img', '1', '0')")
         or die(mysqli_error($conn));

        if($insert){
            echo "
                <script>
                    alert('Registration Successful');
                    window.location = 'index.php';
                </script>
            ";
        }
        else {
            echo "
                <script>
                    alert('Something went wrong');
                </script>
            ";
        }
    }