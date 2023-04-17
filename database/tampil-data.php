<?php

$host = "localhost";
$user = "root";
$pass = ""; // tanpa password
$dbs  = "mahasiswa";

$conn = new mysqli($host, $user, $pass, $dbs);

if ($conn->connect_error) {
    die("No Connection to Database");
}

$sql = "SELECT * FROM data_diri";

if ($conn->query($sql)) {
    $hasil = $conn->query($sql);

    if($hasil->num_rows > 0) {
?> 

<html>
<body>
        <table border="1" cellpadding="10" cellspacing="0">
        
        <tr>
        <td><b>NIM</b></td>
        <td><b>Nama</b></td>
        <td><b>Jenis Kelamin</b></td>
        <td><b>Tempat Lahir</b></td>
        <td><b>Tanggal Lahir</b></td>
        <td><b>Alamat</b></td>
        </tr>
        
        <?php
        while($row = $hasil->fetch_assoc()) {
        ?>

        <tr>
        <?php
            echo "<td>".$row['NIM']."</td>
                  <td>".$row['Nama']."</td>
                  <td>".$row['Jenis_Kelamin']."</td>
                  <td>".$row['Tempat_Lahir']."</td>
                  <td>".$row['Tanggal_Lahir']."</td>
                  <td>".$row['Alamat']."</td>";
        ?>
        </tr>

        <?php
        }
        ?>
        </table>
</body>
</html>


        <?php
    }
} else {
    echo "perintah gagal dijalankan";
}
?>