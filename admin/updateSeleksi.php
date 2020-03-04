<?php 
    include 'connect.php';
    
    $id_daftar = $_GET['id'];
    $status = $_GET['status'];
    

    $query = mysqli_query($conn,"UPDATE pendaftaran SET status_seleksi='$status' WHERE id_peserta='$id_daftar'"); 

    if ($query) {
?>
    <script>
        alert('Data Berhasil di Update');
        window.location.href = "siswa.php";
    </script>
<?php         
    }else{
?>
    <script>
        alert('Data Gagal di Update');
        window.location.href = "siswa.php";
    </script> 
<?php          
    }
?>