<?php
require_once '../config/Database.php';
require_once '../class/Kartu.php';

$database = new Database();
$db = $database->dbConnection();

$kartu = new Kartu($db);

if(isset($_POST['tambah'])){
    $kartu->kode = $_POST['kode'];
    $kartu->nama = $_POST['nama'];
    $kartu->diskon = $_POST['diskon'];
    $kartu->iuran = $_POST['iuran'];

    $kartu->store(); 
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form method="POST" action="">
        <label for="kode">Kode:</label>
        <input type="text" name="kode" required>
        <br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="diskon">Diskon:</label>
        <input type="number" step="any" name="diskon" required>
        <br>
        <label for="iuran">Iuran:</label>
        <input type="number" name="iuran" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>