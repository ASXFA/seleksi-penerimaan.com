<?php 
    session_start();
    if ($_SESSION['akses'] != 'masuk') {
        header('Location:login.php');
    }

    if (isset($_GET['kategori'])) {
        $kategori = $_GET['kategori'];
    }

?>

<?php 
    include 'connect.php';

    include 'layout/header.php'; 
    include 'layout/sider.php'; 
?>
<main style="font-size:12px;">
    <div class="container-fluid">
        <ol class="breadcrumb mt-3 mb-4">
            <li class="breadcrumb-item active">Dashboard / Soal</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Data Soal Kategori <?php if(isset($kategori)){ echo $kategori;}else{  echo "...";} ?></div>
            <div class="card-body">
                <form action="listSoal.php" method="GET">
                    <label for="kategori" class="form-control-label">Pilih Kategori Soal</label>
                    <div class="form-row align-items-center mb-4">
                        <div class="col-auto my-1">
                            <select name="kategori" class="custom-select mr-sm-2">
                                <option selected>-- PILIH --</option>
                                <option value="Ipa">IPA</option>
                                <option value="Matematika">Matematika</option>
                                <option value="Bhs Indonesia">Bahasa Indonesia</option>
                                <option value="Bhs Inggris">Bahasa Inggris</option>
                            </select>
                        </div>
                        <div class="col-auto my-1">
                            <button type="submit" class="btn btn-primary btn-sm">Go !</button>
                        </div>
                    </div>
                </form>

                <?php 
                    if (!isset($kategori)) {
                ?>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th width="65%">Soal</th>
                                <th width="20%">Jawaban Benar</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4" class="text-center">Data Tidak Ditemukan ...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php 
                    }else{
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th width="65%">Soal</th>
                                <th width="20%">Jawaban Benar</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                $data = mysqli_query($conn,"SELECT * FROM soal_ujian");
                                while($row = mysqli_fetch_assoc($data)){
                                    if ($row['kategori_soal']==$kategori) {

                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['text_soal']; ?></td>
                                <td><?php echo $row['text_benar']; ?></td>
                                <td>
                                    <a href="detailSoal.php?id=<?php echo $row['id_soal'] ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="editSoal.php?id=<?php echo $row['id_soal'] ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="deleteSoal.php?id=<?php echo $row['id_soal'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus Soal Tersebut ? ')" ><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php $no++; }} ?>
                        </tbody>
                    </table>
                </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>
</main>
<?php include 'layout/footer.php'; ?>
