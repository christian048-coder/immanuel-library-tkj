<?php
// satpamnya: POST + tombol tambah_pengguna. password di sini belum di-hash, cuma ditampilin aja, hash-nya nanti di TP 5.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_pengguna'])) {
  echo "Akses tidak valid.";
  return;
}
// cek keempat field lengkap apa enggak. lengkap ya print_r, kurang ya dibilang tidak lengkap.
if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role'])) {
  echo "Pengguna baru berhasil diterima:<br>";
  echo "<pre>";
  print_r(['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password'], 'role' => $_POST['role']]);
  echo "</pre>";
} else {
  echo "Data pengguna tidak lengkap.";
}
