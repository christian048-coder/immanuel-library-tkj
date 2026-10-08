<?php
// satpamnya: POST + tombol tambah_penulis, kalau enggak ya ditolak.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_penulis'])) {
  echo "Akses tidak valid.";
  return;
}
// cek name sama bio. lengkap ya print_r, kurang ya dibilang tidak lengkap.
if (isset($_POST['name'], $_POST['bio'])) {
  echo "Penulis baru berhasil diterima:<br>";
  echo "<pre>";
  print_r(['name' => $_POST['name'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data penulis tidak lengkap.";
}
