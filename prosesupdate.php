<?php
include 'config.php';

if ($SERVER["REQUEST_METHOD"] == "POST") {
    $id = $POST['id'];
    $nama = $POST['nama'];
    $kelas = $POST['kelas'];

    $sql = "UPDATE dbcrudrkt SET nama='$nama', kelas='$kelas' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        headaer("Location: pageview.php");
        exit();

    } else {
        echo "Update gagal: " . mysqli_error($conn);
    }
}
?>