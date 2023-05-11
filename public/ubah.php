<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama CRUD</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./font/bootstrap-icons.css"/>
</head>
<body>
    <div class="col-lg-4 col-xx-4 my-5 mx-auto">
        <h1 class="text-center mb-5">UBAH DATA DIRI</h1>

        <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];

                require_once "./conn.php";

                $sql = "SELECT * FROM `data_diri` WHERE id='$id' ";

            if ($result = mysqli_query($conn, $sql)) {

                while($data_diri = mysqli_fetch_array($result)) {
                    $nim            = $data_diri['nim'];
                    $nama           = $data_diri['nama'];
                    $jenis_kelamin  = $data_diri['jenis_kelamin'];
                    $tempat_lahir   = $data_diri['tempat_lahir'];
                    $tanggal_lahir  = $data_diri['tanggal_lahir'];
                    $alamat         = $data_diri['alamat'];

                }
            }
            }

            if (isset($_POST['simpan'])){
                

                $nim            = $_POST['nim'];
                $nama           = $_POST['nama'];
                $jenis_kelamin  = $_POST['jenis_kelamin'];
                $tempat_lahir   = $_POST['tempat_lahir'];
                $tanggal_lahir  = $_POST['tanggal_lahir'];
                $alamat         = $_POST['alamat'];

                require_once "./conn.php";
                
                $sql = "UPDATE `data_diri` SET
                        `nim`='$nim',`nama`='$nama',`jenis_kelamin`='$jenis_kelamin',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`alamat`='$alamat'
                        WHERE `id`='$id'"; 

                if (mysqli_query($conn, $sql)) {

        ?>

                <div class="alert alert-success" role="alert">
                    <i class="bi bi-info-circle"></i> Data Berhasil Diubah.<a class="btn btn-link" href="./">Halaman Utama</a>
                </div>
        
        <?php
                }
            }
                
        ?>

        <?php if(isset($_GET['id'])): ?>
        <form class="row needs-validation" action="ubah.php" method="post" novalidate>
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label mt-3">NIM</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan 8 digit NIM" name="nim" value="<?php echo $nim; ?>" required>
                    <div class="valid-feedback">
                        Nice!
                    </div>
            </div>

            <div class="col-md-12">
                <label for="validationCustom02" class="form-label mt-3">NAMA</label>
                <input type="text" class="form-control" id="validationCustom02" name="nama" value="<?php echo $nama; ?>" required>
                    <div class="valid-feedback">
                        Nice!
                    </div>
            </div>

            <div class="col-md-12">
                <label for="validationCustom03" class="form-label mt-3">JENIS KELAMIN</label>
                <select class="form-select" id="validationCustom03" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" required>
                        <option selected disabled value="">Pilih...</option>
                        <option value="Laki-Laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                </select>
                    <div class="invalid-feedback">
                        Please select a valid gender.
                    </div>
            </div>

            <div class="col-md-12">
                <label for="validationCustom04" class="form-label mt-3">TEMPAT LAHIR</label>
                <input type="text" class="form-control" id="validationCustom04" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" required>
                    <div class="valid-feedback">
                        Nice!
                    </div>
            </div>

            <div class="col-md-12">
                <label for="validationCustom05" class="form-label mt-3">TANGGAL LAHIR</label>
                <input type="text" class="form-control" id="validationCustom05" name="tanggal_lahir" placeholder="YYYY-MM-DD" value="<?php echo $tanggal_lahir; ?>" required>
                    <div class="valid-feedback">
                        Nice!
                    </div>
            </div>

            <div class="col-md-12">
                <label for="validationCustom06" class="form-label mt-3">ALAMAT</label>
                <textarea class="form-control" id="validationCustom06" name="alamat" value="<?php echo $alamat; ?>" required></textarea>
                    <div class="valid-feedback">
                        Nice!
                    </div>
            </div>

            <div class="mt-3">
            <button class="btn btn-primary btn-large" type="submit" name="simpan" value="Simpan">Simpan</button>
            </div>

        </form>
        <?php endif; ?>
    </div>

    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>