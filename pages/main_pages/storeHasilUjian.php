<?php 
    include '../../admin/connect.php';
    $jumlah = $_POST['jumlah'];
    $id_soal=$_POST["id"];
    $jawaban = $_POST['jawaban'];
    $score = 0;
    $kosong = 0;
    $benar = 0;
    $salah = 0;

    $id_peserta = $_POST['id_peserta'];

    for ($i=0; $i < $jumlah; $i++) { 
        $nomor = $id_soal[$i];
        if (empty($jawaban[$nomor])) {
            $kosong++;
        }else{
            $answer = $jawaban[$nomor];
            $query=mysqli_query($conn,"SELECT * from soal_ujian where id_soal='$nomor' and text_benar='$answer'");
            $cek=mysqli_num_rows($query);
            if ($cek) {
                $benar++;
            }else{
                $salah++;
            }
            $result=mysqli_query($conn,"SELECT * from soal_ujian");
            $jumlah_soal=mysqli_num_rows($result);
            $score = 100/$jumlah_soal*$benar;
            $hasil = number_format($score,1);
        }
    }

    $store = mysqli_query($conn,"INSERT INTO hasil_seleksi (id,id_peserta,benar,salah,kosong,score) VALUES (NULL,'$id_peserta','$benar','$salah','$kosong','$score')");

    if ($store) {
    ?>
            <script> 
                alert('Terimakasih Telah Melakukan TES. Silahkan Cek kelulusan pada Web ini dalam 1x24.');
                window.location.href="soal_seleksi.php";
            </script>
    <?php 
    }else{
    ?>
            <script> 
                alert('Hasil Tes anda gagal di simpan. Silahkan coba kembali');
                window.location.href="soal_seleksi.php";
            </script>
    <?php
    }


?>