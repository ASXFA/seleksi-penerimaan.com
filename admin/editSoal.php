<?php 
    session_start();
    if ($_SESSION['akses'] != 'masuk') {
        header('Location:login.php');
    }

?>

<?php
    include 'connect.php';
    
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM soal_ujian WHERE id_soal='$id'");


    include 'layout/header.php'; 
    include 'layout/sider.php'; 
?>
<main style="font-size:12px;">
    <div class="container-fluid">
        <ol class="breadcrumb mt-3 mb-4">
            <li class="breadcrumb-item active">Dashboard / Soal / TambahSoal</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Soal Ujian</div>
            <div class="card-body">
                <form action="updateSoal.php" method="post">
                    <label for="siswa" class="form-control-label"><h5>Tambah Soal Ujian</h5></label>
                    <?php while($row=mysqli_fetch_assoc($data)){ ?>
                    <div class="form-group">
                        <label for="id" class="fomr-control-label">ID Soal</label>
                        <input type="text" name="id_soal" class="form-control" value="<?php echo $row['id_soal']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="kategori" class="form-control-label">Kategori Soal</label>
                        <?php 
                            if ($row['kategori_soal']=="Ipa") {
                        ?>
                        <select name="kategori_soal" class="form-control form-control-sm">
                            <option><h3>-- PILIH --<br></h3></option>
                            <option value="Ipa" selected><h3>IPA<br></h3></option>
                            <option value="Matematika"><h3>Matematika<br></h3></option>
                            <option value="Bhs Indonesia"><h3>Bhs Indonesia<br></h3></option>
                            <option value="Bhs Inggris"><h3>Bhs Inggris<br></h3></option>
                        </select>
                        <?php 
                            }else if($row['kategori_soal']=="Matematika"){
                        ?>
                        <select name="kategori_soal" class="form-control form-control-sm">
                            <option selected><h3>-- PILIH --<br></h3></option>
                            <option value="Ipa"><h3>IPA<br></h3></option>
                            <option value="Matematika" selected><h3>Matematika<br></h3></option>
                            <option value="Bhs Indonesia"><h3>Bhs Indonesia<br></h3></option>
                            <option value="Bhs Inggris"><h3>Bhs Inggris<br></h3></option>
                        </select>
                        <?php 
                            }else if($row['kategori_soal']=="Bhs Indonesia"){
                        ?>
                        <select name="kategori_soal" class="form-control form-control-sm">
                            <option selected><h3>-- PILIH --<br></h3></option>
                            <option value="Ipa"><h3>IPA<br></h3></option>
                            <option value="Matematika"><h3>Matematika<br></h3></option>
                            <option value="Bhs Indonesia" selected><h3>Bhs Indonesia<br></h3></option>
                            <option value="Bhs Inggris"><h3>Bhs Inggris<br></h3></option>
                        </select>
                        <?php
                            }else if($row['kategori_soal']=="Bhs Inggris"){
                        ?>
                        <select name="kategori_soal" class="form-control form-control-sm">
                            <option selected><h3>-- PILIH --<br></h3></option>
                            <option value="Ipa"><h3>IPA<br></h3></option>
                            <option value="Matematika"><h3>Matematika<br></h3></option>
                            <option value="Bhs Indonesia"><h3>Bhs Indonesia<br></h3></option>
                            <option value="Bhs Inggris" selected><h3>Bhs Inggris<br></h3></option>
                        </select>
                        <?php 
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="soal" class="form-control-label">Soal</label>
                        <textarea name="text_soal" cols="30" rows="4" class="form-control"><?php echo $row['text_soal']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jawabanA" class="form-control-label">Jawaban A</label>
                        <textarea name="text_a" cols="30" rows="2" class="form-control"><?php echo $row['text_a']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jawabanB" class="form-control-label">Jawaban B</label>
                        <textarea name="text_b" cols="30" rows="2" class="form-control"><?php echo $row['text_b']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jawabanC" class="form-control-label">Jawaban C</label>
                        <textarea name="text_c" cols="30" rows="2" class="form-control"><?php echo $row['text_c']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jawabanD" class="form-control-label">Jawaban D</label>
                        <textarea name="text_d" cols="30" rows="2" class="form-control"><?php echo $row['text_d']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jawabanE" class="form-control-label">Jawaban E</label>
                        <textarea name="text_e" cols="30" rows="2" class="form-control"><?php echo $row['text_e']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="benar" class="form-control-label">Jawaban Benar</label>
                        <textarea name="text_benar" cols="30" rows="2" class="form-control"><?php echo $row['text_benar']; ?></textarea>
                    </div>
                        <?php } ?>
                    <button class="btn btn-success btn-sm float-right" type="submit"> UPDATE </button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include 'layout/footer.php'; ?>
