<?php
include'../koneksi/koneksi.php';


$id = $_GET['id'];

$sql = "SELECT * FROM maba WHERE id_pendaftaran = '$id'";
$query = mysqli_query($koneksi, $sql);
$baris = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengubah Data</title>
    <link rel="stylesheet" href="../css/form-tambah.css">
</head>
<body>
<div class="formbold-form-wrapper">
    
    <img class="gambar"src="../user/top.png">
        <div class="formbold-form-title">
          <h2 class="">Form Edit Data</h2>
        <p>
          Silahkan Edit 
        </p>  
      </div>
        <form action="proses-edit.php" method="post" enctype="multipart/form-data">
        <div class="formbold-input-flex">
        <div>
          <label for="firstname" class="formbold-form-label">
            Id kamu
          </label>
          <input
            type="text"
            name="id"
            id=""
            value="<?= $baris['id_pendaftaran'] ?>"
            class="formbold-form-input"
          />
          </div>
        <div>
          <label for="lastname" class="formbold-form-label">Nama kamu </label>
          <input
            type="text"
            name="nama"
            id=""
            value="<?= $baris['nm_peserta'] ?>"
            class="formbold-form-input"
          />
        </div>
      </div>
        <div class="formbold-input-flex">
        <div>
          <label for="firstname" class="formbold-form-label">
            Agama
          </label>
          <input
            type="text"
            name="agama"
            id=""
            value="<?= $baris['Agama'] ?>"
            class="formbold-form-input"
          />
          </div>
        <div>
          <label for="lastname" class="formbold-form-label">Tempat lahir</label>
          <input
            type="text"
            name="tmpl"
            id=""
            value="<?= $baris['tmp_lahir'] ?>"
            class="formbold-form-input"
          />
        </div>
      </div>
      <div class="formbold-input-flex">
        <div>
          <label for="email" class="formbold-form-label">Tanggal daftar </label>
          <input
            type="date"
            name="tgld"
            id=""
            value="<?= $baris['tgl_daftar'] ?>"
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="phone" class="formbold-form-label">Tanggal lahir</label>
          <input
            type="date"
            name="tgll"
            id="phone"
            value="<?= $baris['tgl_lahir'] ?>"
            class="formbold-form-input"
          />
        </div>
      </div>
      <div class="formbold-mb-3">
        <label for="address" class="formbold-form-label">
          Jurusan
        </label>
        <input
          type="text"
          name="jurusan"
          id=""
          value="<?= $baris['jurusan'] ?>"
          class="formbold-form-input"
          
        />
      </div>
      <div class="formbold-mb-3">
        <label for="address2" class="formbold-form-label">
          Alamat
        </label>
        <input
          type="text"
          name="alamat"
          id=""
          value="<?= $baris['Alamat'] ?>"
          class="formbold-form-input"
        />
      </div>
      <div class="formbold-input-flex">
        <div>
          <label for="state" class="formbold-form-label"> Tahun ajaran</label>
          <input
            type="text"
            name="ta"
            id=""
            value="<?= $baris['th_ajaran'] ?>"
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="country" class="formbold-form-label"> Jenis Kelamin </label>
          <input
            type="text"
            name="jk"
            id=""
            value="<?= $baris['jk'] ?>"
            class="formbold-form-input"
          />
        </div>
      
           

      <button type="submit" class="formbold-btn">Simpan</button> 
        </form>
</body>
</html>