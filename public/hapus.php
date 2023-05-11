<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    if(isset($_GET['id'])) {

        require_once "./conn.php";

        $id = $_GET['id'];

        $sql = "DELETE FROM data_diri WHERE id='$id' ";

        if (mysqli_query($conn, $sql)) {
?>

    <div class="alert alert-success" role="alert">
        <i class="bi bi-info-circle"></i>Data Berhasil Dihapus.<a class="btn btn-link" href="./"> Halaman Utama</a>
    </div>

<?php
        }
    }
            
?>
</body>
</html>