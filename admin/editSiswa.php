<?php 
    session_start();
    if ($_SESSION['akses'] != 'masuk') {
        header('Location:login.php');
    }

?>

<?php
    include 'connect.php';
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM pendaftaran WHERE id_peserta='$id'");

    include 'layout/header.php'; 
    include 'layout/sider.php'; 
?>
<main style="font-size:12px;">
    <div class="container-fluid">
        <ol class="breadcrumb mt-3 mb-4">
            <li class="breadcrumb-item active">Dashboard / Siswa / EditSiswa</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Data Siswa</div>
            <div class="card-body">
                <form action="updateSiswa.php" method="post">
                    <?php while($row = mysqli_fetch_assoc($data)){ ?>
                    <label for="siswa" class="form-control-label"><h5>Profil Siswa 
                        <?php
                        if ($row['verifikasi']=="PENDING") {
                            echo "<span class='btn btn-info'>".$row['verifikasi']."</span>";
                        }else if($row['verifikasi']=="TERVERIFIKASI"){  
                            echo "<span class='btn btn-success'>".$row['verifikasi']."</span>";
                        }else if($row['verifikasi']=="GAGAL"){
                            echo "<span class='btn btn-danger'>".$row['verifikasi']."</span>";
                        }
                    ?>
                    </h5></label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="id">ID Peserta</label>
                            <input type="text" name="id_peserta" class="form-control form-control-sm" value="<?php echo $row['id_peserta'] ?>" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama">NISN</label>
                            <input type="text" name="nisn" class="form-control form-control-sm" value="<?php echo $row['nisn'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="form-control-label">Nama</label>
                        <input type="text" name="nama" class="form-control form-control-sm" value="<?php echo $row['nama'] ?>">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control form-control-sm" value="<?php echo $row['tempat_lahir'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="text" name="tanggal_lahir" class="form-control form-control-sm" value="<?php echo $row['tanggal_lahir'] ?>" maxlength=10>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="form-control-label">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="2" class="form-control"><?php echo $row['alamat'] ?></textarea>
                    </div>
                    <label for="siswa" class="form-control-label"><h5>Nilai Siswa</h5></label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ipa">Nilai IPA</label>
                            <input type="text" name="nilai_ipa" class="form-control form-control-sm" value="<?php echo $row['nilai_ipa'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="matematika">Nilai Matematika</label>
                            <input type="text" name="nilai_matematika" class="form-control form-control-sm" value="<?php echo $row['nilai_matematika'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="bhs_indo">Nilai Bahasa Indonesia</label>
                            <input type="text" name="nilai_bhs_indo" class="form-control form-control-sm" value="<?php echo $row['nilai_bhs_indo'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="bhs_inggris">Nilai Bahasa Inggris</label>
                            <input type="text" name="nilai_bhs_inggris" class="form-control form-control-sm" value="<?php echo $row['nilai_bhs_inggris'] ?>" maxlength=10>
                        </div>
                    </div>
                    <label for="siswa" class="form-control-label"><h5>Orangtua Siswa</h5></label>
                    <div class="form-group">
                        <label for="nama_ortu" class="form-control-label">Nama</label>
                        <input type="text" name="nama_ortu" class="form-control form-control-sm" value="<?php echo $row['nama_ortu'] ?>">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pendidikan">Pendidikan</label>
                            <input type="text" name="pendidikan_ortu" class="form-control form-control-sm" value="<?php echo $row['pendidikan_ortu'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" name="pekerjaan_ortu" class="form-control form-control-sm" value="<?php echo $row['pekerjaan_ortu'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="penghasilan">Penghasilan</label>
                            <select name="penghasilan_ortu" class="form-control form-control-sm">
                            <?php 
                                if ($row['penghasilan_ortu']=="Dibawah Rp.500.000") {
                            ?>
                                <option value="Dibawah Rp.500.000" selected><h3>Dibawah Rp.500.000 <br></h3></option>
                                <option value="Rp.500.000 ~ Rp.1.000.000"><h3>Rp.500.000 ~ Rp.1.000.000 <br></h3></option>
                                <option value="Rp.1.000.000 ~ Rp.3.000.000"><h3>Rp.1.000.000 ~ Rp.3.000.000 <br></h3></option>
                                <option value="Rp.3.000.000 ~ Rp.5.000.000"><h3>Rp.3.000.000 ~ Rp.5.000.000 <br></h3></option>
                                <option value="Rp.5.000.000 ~ Rp.10.000.000"><h3>Rp.5.000.000 ~ Rp.10.000.000 <br></h3></option>
                                <option value="Rp.10.000.000 Ke atas"><h3>Rp.10.000.000 Ke atas <br></h3></option>
                            <?php 
                                }else if($row['penghasilan_ortu']=="Rp.500.000 ~ Rp.1.000.000"){
                            ?>
                                <option value="Dibawah Rp.500.000"><h3>Dibawah Rp.500.000 <br></h3></option>
                                <option value="Rp.500.000 ~ Rp.1.000.000" selected><h3>Rp.500.000 ~ Rp.1.000.000 <br></h3></option>
                                <option value="Rp.1.000.000 ~ Rp.3.000.000"><h3>Rp.1.000.000 ~ Rp.3.000.000 <br></h3></option>
                                <option value="Rp.3.000.000 ~ Rp.5.000.000"><h3>Rp.3.000.000 ~ Rp.5.000.000 <br></h3></option>
                                <option value="Rp.5.000.000 ~ Rp.10.000.000"><h3>Rp.5.000.000 ~ Rp.10.000.000 <br></h3></option>
                                <option value="Rp.10.000.000 Ke atas"><h3>Rp.10.000.000 Ke atas <br></h3></option>
                            <?php 
                                }else if($row['penghasilan_ortu']=="Rp.1.000.000 ~ Rp.3.000.000"){
                            ?>
                                <option value="Dibawah Rp.500.000"><h3>Dibawah Rp.500.000 <br></h3></option>
                                <option value="Rp.500.000 ~ Rp.1.000.000"><h3>Rp.500.000 ~ Rp.1.000.000 <br></h3></option>
                                <option value="Rp.1.000.000 ~ Rp.3.000.000" selected><h3>Rp.1.000.000 ~ Rp.3.000.000 <br></h3></option>
                                <option value="Rp.3.000.000 ~ Rp.5.000.000"><h3>Rp.3.000.000 ~ Rp.5.000.000 <br></h3></option>
                                <option value="Rp.5.000.000 ~ Rp.10.000.000"><h3>Rp.5.000.000 ~ Rp.10.000.000 <br></h3></option>
                                <option value="Rp.10.000.000 Ke atas"><h3>Rp.10.000.000 Ke atas <br></h3></option>
                            <?php 
                                }else if($row['penghasilan_ortu']=="Rp.3.000.000 ~ Rp.5.000.000"){
                            ?>
                                <option value="Dibawah Rp.500.000"><h3>Dibawah Rp.500.000 <br></h3></option>
                                <option value="Rp.500.000 ~ Rp.1.000.000"><h3>Rp.500.000 ~ Rp.1.000.000 <br></h3></option>
                                <option value="Rp.1.000.000 ~ Rp.3.000.000"><h3>Rp.1.000.000 ~ Rp.3.000.000 <br></h3></option>
                                <option value="Rp.3.000.000 ~ Rp.5.000.000" selected><h3>Rp.3.000.000 ~ Rp.5.000.000 <br></h3></option>
                                <option value="Rp.5.000.000 ~ Rp.10.000.000"><h3>Rp.5.000.000 ~ Rp.10.000.000 <br></h3></option>
                                <option value="Rp.10.000.000 Ke atas"><h3>Rp.10.000.000 Ke atas <br></h3></option>
                            <?php 
                                }else if($row['penghasilan_ortu']=="Rp.5.000.000 ~ Rp.10.000.000"){
                            ?>
                                <option value="Dibawah Rp.500.000"><h3>Dibawah Rp.500.000 <br></h3></option>
                                <option value="Rp.500.000 ~ Rp.1.000.000"><h3>Rp.500.000 ~ Rp.1.000.000 <br></h3></option>
                                <option value="Rp.1.000.000 ~ Rp.3.000.000"><h3>Rp.1.000.000 ~ Rp.3.000.000 <br></h3></option>
                                <option value="Rp.3.000.000 ~ Rp.5.000.000"><h3>Rp.3.000.000 ~ Rp.5.000.000 <br></h3></option>
                                <option value="Rp.5.000.000 ~ Rp.10.000.000" selected><h3>Rp.5.000.000 ~ Rp.10.000.000 <br></h3></option>
                                <option value="Rp.10.000.000 Ke atas"><h3>Rp.10.000.000 Ke atas <br></h3></option>
                            <?php 
                                }else if($row['penghasilan_ortu']=="Rp.10.000.000 Ke atas"){
                            ?>
                                <option value="Dibawah Rp.500.000"><h3>Dibawah Rp.500.000 <br></h3></option>
                                <option value="Rp.500.000 ~ Rp.1.000.000"><h3>Rp.500.000 ~ Rp.1.000.000 <br></h3></option>
                                <option value="Rp.1.000.000 ~ Rp.3.000.000"><h3>Rp.1.000.000 ~ Rp.3.000.000 <br></h3></option>
                                <option value="Rp.3.000.000 ~ Rp.5.000.000"><h3>Rp.3.000.000 ~ Rp.5.000.000 <br></h3></option>
                                <option value="Rp.5.000.000 ~ Rp.10.000.000"><h3>Rp.5.000.000 ~ Rp.10.000.000 <br></h3></option>
                                <option value="Rp.10.000.000 Ke atas" selected><h3>Rp.10.000.000 Ke atas <br></h3></option>
                            <?php 
                                }
                            ?>  
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telepon">Telepon</label>
                            <input type="text" name="no_telp" class="form-control form-control-sm" value="<?php echo $row['no_telp'] ?>" maxlength=12>
                        </div>
                    </div>
                    <?php } ?>
                    <button class="btn btn-primary btn-sm float-right" type="submit"> UPDATE </button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include 'layout/footer.php'; ?>
