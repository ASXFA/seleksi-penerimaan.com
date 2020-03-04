<?php 
    include '../../admin/connect.php';

    if ($_POST['loginPeserta']) {
        $nisn  = $_POST['nisn'];
        $pass  = $_POST['pass'];
        $data = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE nisn='$nisn' AND password='$pass' LIMIT 1");
        
        if (mysqli_num_rows($data)>0) {
            session_start();
            $_SESSION['aksesPeserta'] = 'MASUK'; 
            $_SESSION['nisn'] = $nisn; 
            header('Location: soal_seleksi.php');
        }else {
            echo "<script>alert('NISN atau Password Tidak COCOK !')</script>";
        }
    }

?>