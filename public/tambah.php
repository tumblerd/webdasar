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
        <h1 class="text-center">TAMBAH DATA DIRI</h1>

        <?php

            if (isset($_POST['tambah'])) {

                require_once "./conn.php";

                $nim            = $_POST['nim'];
                $nama           = $_POST['nama'];
                $jenis_kelamin  = $_POST['jenis_kelamin'];
                $tempat_lahir   = $_POST['tempat_lahir'];
                $tanggal_lahir  = $_POST['tanggal_lahir'];
                $alamat         = $_POST['alamat'];

                $sql = "INSER INTO `data_diri`
                        (`nim`,`nama`,`jenis_kelamin`,`tempat_lahir`,`tanggal_lahir`,`alamat`)
                        VALUES
                        ('$nim','$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$alamat')";

                if (mysqli_query($conn, $sql)) {
        ?>

            <div class="alert alert-success" role="alert">
                <i class="bi bi-info-circle"></i>Data Berhasil Ditambah.<a class="btn btn-link" href="./">Halaman Utama</a>
            </div>

        <?php
                }
            }
        ?>

        <form class="row needs-validation" action ="tambah.php" method="post" novalidate>
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label mt-3">NIM</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan 8 digit NIM" required>
                    <div class="valid-feedback">
                        Nice!
                    </div>
            </div>

            <div class="col-md-12">
                <label for="validationCustom02" class="form-label mt-3">NAMA</label>
                <input type="text" class="form-control" id="validationCustom02" name="nama" required>
                    <div class="valid-feedback">
                        Nice!
                    </div>
            </div>

            <div class="col-md-12">
                <label for="validationCustom03" class="form-label mt-3">JENIS KELAMIN</label>
                <select class="form-select" id="validationCustom03" name="jenis_kelamin" required>
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
                <input type="text" class="form-control" id="validationCustom04" name="tempat_lahir" required>
                    <div class="valid-feedback">
                        Nice!
                    </div>
            </div>

            <div class="col-md-12">
                <label for="validationCustom05" class="form-label mt-3">TANGGAL LAHIR</label>
                <input type="text" class="form-control" id="validationCustom05" name="tanggal_lahir" placeholder="YYYY-MM-DD"required>
                    <div class="valid-feedback">
                        Nice!
                    </div>
            </div>

            <div class="col-md-12">
                <label for="validationCustom06" class="form-label mt-3">ALAMAT</label>
                <textarea class="form-control" id="validationCustom06" name="alamat" required></textarea>
                <div class="valid-feedback">
                Nice!
                </div>
            </div>

            <div class="mt-3">
            <button class="btn btn-primary btn-large" type="submit" name="tambah" value="Tambah">Tambah</button>
            </div>

        </form>
    </div>

    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
</body>
</html>