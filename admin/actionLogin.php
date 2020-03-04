<?php 
    include "connect.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
    
    if (mysqli_num_rows($data) > 0) {
        session_start();
        $_SESSION['akses'] = 'masuk';
        $_SESSION['username'] = $username;
        header('Location: index.php');
    }

?>