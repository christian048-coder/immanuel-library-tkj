<?php
// satpamnya nyari tombol ubah_kategori, bukan tambah. salah pintu ya ditolak.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_kategori'])) {
  echo "Akses tidak valid.";
  return;
}
// cek id, name, description. lengkap ya print_r, gagal ya dibilang tidak lengkap.
if (isset($_POST['id'], $_POST['name'], $_POST['description'])) {
  echo "Perubahan kategori berhasil diterima:<br>";
  echo "<pre>";
  print_r(['id' => $_POST['id'], 'name' => $_POST['name'], 'description' => $_POST['description']]);
  echo "</pre>";
} else {
  echo "Data kategori tidak lengkap.";
}
