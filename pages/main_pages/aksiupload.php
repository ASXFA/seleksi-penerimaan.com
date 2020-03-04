<?php 
    include '../../admin/connect.php';
    if($_POST['upload']){
        $id= $_POST['id_peserta'];
        $ekstensi_diperbolehkan	= array('png','jpg');
        $nama = $_FILES['file']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];	

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 10444070){			
                move_uploaded_file($file_tmp, '../../file/'.$nama);
                $query = mysqli_query($conn,"UPDATE pendaftaran SET bukti_pembayaran='$nama' WHERE id_peserta='$id'");
                if($query){
                ?>
                <script>
                    alert('File Berhasil Di UPLOAD !');
                    window.location.href="../../index.php";
                </script>
            <?php
                }else{
                    echo 'GAGAL MENGUPLOAD GAMBAR';
                }
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
            }
        }else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }
?>