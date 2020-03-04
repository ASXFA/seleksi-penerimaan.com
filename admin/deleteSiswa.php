<?php 
    include 'connect.php';
    $id = $_GET['id'];

    mysqli_query($conn,"DELETE FROM pendaftaran WHERE id_peserta='$id'");
    header('Location: siswa.php');

?>