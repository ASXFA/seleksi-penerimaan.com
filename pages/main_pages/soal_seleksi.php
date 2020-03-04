<?php 
    session_start();
    if ($_SESSION['aksesPeserta'] != 'MASUK') {
        header('Location:seleksi_ujian.php');
    }

    include '../../admin/connect.php';
    $nisn = $_SESSION['nisn'];
    $data = mysqli_query($conn,"SELECT * FROM pendaftaran WHERE nisn='$nisn' LIMIT 1");
    $datas = mysqli_query($conn,"SELECT * FROM soal_ujian ORDER BY kategori_soal ASC");
    while($dat = mysqli_fetch_assoc($data)){ $id_peserta = $dat['id_peserta']; $status= $dat['verifikasi']; }
    if (($status=="PENDING")||($status=="GAGAL")) {
    ?>
            <script> 
                alert('Pembayaran Anda Belum dilakukan Atau Anda Belum upload Foto Bukti Pembayaran');
                window.location.href = "../../index.php";
            </script>
    <?php
    }else{

    $check = mysqli_query($conn,"SELECT * FROM hasil_seleksi WHERE id_peserta='$id_peserta' LIMIT 1"); 
    $abjad = ['A','B','C','D','E'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian Seleksi</title>
    <link href="../../admin/assets/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td width="20%" rowspan="2" class="p-3"><img src="../../img/logo.png" width="80%" alt=""></td>
                <td class="pt-4"><img src="../../img/text_header.png" width="80%" alt=""></td>
            </tr>
            <tr>
                <td class="pl-4 pb-4 font-weight-bold">Jl. Kenanga No.13, Rancaekek Wetan, Kec.Rancaekek, Bandung, Jawa Barat 40394</td>
            </tr>
        </table>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">UJIAN SELEKSI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="logoutPeserta.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row" style="font-size:11px;">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">Soal Ujian </div>
                    <div class="card-body">
                        <?php 
                        if (!$check) {
                        ?>  
                            <form action="storeHasilUjian.php" method="post">
                            <?php $no=1; $jumlah = mysqli_num_rows($datas); while($rows=mysqli_fetch_assoc($datas)){ ?>
                                <input type="hidden" name="id[]" value=<?php echo $rows['id_soal']; ?>>
                                <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><?= $no.'.' ?> </label>  
                                <label class="col-sm-11 col-form-label text-justify"><?php echo $rows['text_soal'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_a'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[0].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_a'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_b'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[1].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_b'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_c'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[2].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_c'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_d'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[3].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_d'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_e'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[4].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_e'] ?> </label>  
                            </div>
                        <?php $no++; } ?>
                            <input type="hidden" name="id_peserta" value="<?php echo $id_peserta; ?>">
                            <div class="card-footer">
                                <button class="btn btn-primary btn-sm float-right">NEXT <i class="fa fa-arrow-alt-circle-right"></i></button>
                            </div>
                        </form>
                        <?php
                        }else{
                            if (mysqli_num_rows($check) == 0 ) {
                        ?>
                                <form action="storeHasilUjian.php" method="post">
                            <?php $no=1; $jumlah = mysqli_num_rows($datas); while($rows=mysqli_fetch_assoc($datas)){ ?>
                                <input type="hidden" name="id[]" value=<?php echo $rows['id_soal']; ?>>
                                <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><?= $no.'.' ?> </label>  
                                <label class="col-sm-11 col-form-label text-justify"><?php echo $rows['text_soal'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_a'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[0].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_a'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_b'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[1].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_b'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_c'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[2].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_c'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_d'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[3].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_d'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_e'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[4].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_e'] ?> </label>  
                            </div>
                        <?php $no++; } ?>
                            <input type="hidden" name="id_peserta" value="<?php echo $id_peserta; ?>">
                            <div class="card-footer">
                                <button class="btn btn-primary btn-sm float-right">NEXT <i class="fa fa-arrow-alt-circle-right"></i></button>
                            </div>
                        </form>
                        <?php
                            }else{
                            while($peserta = mysqli_fetch_assoc($check)){
                                if ($peserta['id_peserta'] == $id_peserta) {
                                    echo "Anda Telah melakukan Tes Ujian Seleksi";
                                }else{
                        ?>
                        <form action="storeHasilUjian.php" method="post">
                            <?php $no=1; $jumlah = mysqli_num_rows($datas); while($rows=mysqli_fetch_assoc($datas)){ ?>
                                <input type="hidden" name="id[]" value=<?php echo $rows['id_soal']; ?>>
                                <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><?= $no.'.' ?> </label>  
                                <label class="col-sm-11 col-form-label text-justify"><?php echo $rows['text_soal'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_a'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[0].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_a'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_b'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[1].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_b'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_c'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[2].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_c'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_d'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[3].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_d'] ?> </label>  
                            </div>
                            <div class="form-group-now">
                                <label class="col-sm-1 col-form-label"> </label>
                                <input type="radio" name="jawaban[<?= $rows['id_soal'] ?>]"  value="<?php echo $rows['text_e'] ?>">  
                                <label class="col-sm-1 col-form-label form-check-label"><?= $abjad[4].' .' ?></label>  
                                <label class="col-sm-9 col-form-label text-justify"><?php echo $rows['text_e'] ?> </label>  
                            </div>
                        <?php $no++; } ?>
                            <input type="hidden" name="id_peserta" value="<?php echo $id_peserta; ?>">
                            <div class="card-footer">
                                <button class="btn btn-primary btn-sm float-right">NEXT <i class="fa fa-arrow-alt-circle-right"></i></button>
                            </div>
                        </form>
                            <?php }}}} ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Biodata Peserta</div>
                    <div class="card-body">
                        <?php
                        $data = mysqli_query($conn,"SELECT * FROM pendaftaran WHERE nisn='$nisn' LIMIT 1");
                        while($row=mysqli_fetch_assoc($data)){ ?>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">ID :</label>
                            <div class="col-sm-6">
                                <input type="text" style="font-size:11px;" class="form-control-plaintext" value="<?php echo $row['id_peserta'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">NISN :</label>
                            <div class="col-sm-6">
                                <input type="text" style="font-size:11px;" class="form-control-plaintext" value="<?php echo $row['nisn'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Nama :</label>
                            <div class="col-sm-6">
                                <input type="text" style="font-size:11px;" class="form-control-plaintext" value="<?php echo $row['nama'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Tempat, Tgl Lahir :</label>
                            <div class="col-sm-6">
                                <input type="text" style="font-size:11px;" class="form-control-plaintext" value="<?php echo $row['tempat_lahir'] ?>,<?php echo $row['tanggal_lahir'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Alamat :</label>
                            <div class="col-sm-6">
                                <input type="text" style="font-size:11px;" class="form-control-plaintext" value="<?php echo $row['alamat'] ?>">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../../assets/assets/demo/chart-area-demo.js"></script>
    <script src="../../assets/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../../assets/assets/demo/datatables-demo.js"></script>
</body>
</html>
<?php } ?>