<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rincian Gaji Pegawai</title>
</head>
<body>
<from method="POST">
<h1>From Rincian Gaji Pegawai</h1>
    <label> Nama </label>
    <input type="nama" name="nama" placeholder="Masukan nama"><br><br>
    <label> Jabatan</label>
    <select name="jabatan">
    <option>--- pilih jabatan ---</option>
    <option value="manager">Manager</option>
    <option value="asisten">Asisten</option>
    <option value="kabag">Kabag</option>
    <option value="staf">Staff</option></select>
    <br><br>
    <label> Status </label>
    <select name="status">
    <option>--- pilih Status  ---</option>
    <option value="menikah">Sudah Menikah</option>
    <option value="jomblo">Jomblo</option></select>
    <br><br>
    <button name="proses" type="submit">Cek Gaji</button>
</from>

<?php
$namaPegawai = $_POST ['nama'];
$agama = $_POST['agama'];
$jabatan = $_POST['jabatan'];
$status = $_POST['status'];
$jmlAnak = $_POST['jmlAnak'];
$tombol = $_POST['proses'];

$ket = ($agama == 'muslim') ? "6jt" : "kosong";
if($agama == 'muslim' && $agama == 'nonmuslim') $grade = 6000000;
else if ($agma == "muslim" && $agama == 'nonmuslim') $grade = "0";
else $grade = "";

switch ($grade){
    case "manager" : $gaji = 20000000; break;
    case "asisten" : $gaji = 15000000; break;
    case "kabag" : $gaji = 10000000; break;
    case "staf" : $gaji = 4000000; break;
    default: $gaji ="";
}
if(isset($tombol)){
?>
Nama Pegawai : <?= $namaPegawai ?>
<br> Agama : <?= $agama ?>
<br> Jabatan : <?= $jabatan ?>
<br> Status : <?= $status ?>
<br> Jumlah Anak : <?= $jmlAnak ?>
<br> Gaji Kotor : <?= $gaji ?>
<br> Gaji bersih : <?= $gaji ?>

<?php } ?>
    
</body>
</html>