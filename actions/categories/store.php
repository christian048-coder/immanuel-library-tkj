<?php
// satpamnya: harus POST dan tombol tambah_kategori. gagal ya Akses tidak valid.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_kategori'])) {
  echo "Akses tidak valid.";
  return;
}
// cek name sama description ada apa enggak. lengkap ya dipajang print_r, kurang ya dibilang tidak lengkap.
if (isset($_POST['name'], $_POST['description'])) {
  echo "Kategori baru berhasil diterima:<br>";
  echo "<pre>";
  print_r(['name' => $_POST['name'], 'description' => $_POST['description']]);
  echo "</pre>";
} else {
  echo "Data kategori tidak lengkap.";
}
