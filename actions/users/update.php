<?php
// satpamnya nyari tombol ubah_pengguna, dibuka langsung ya ditolak.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_pengguna'])) {
  echo "Akses tidak valid.";
  return;
}
// cek id, name, email, role. lengkap ya print_r, kurang ya dibilang tidak lengkap.
if (isset($_POST['id'], $_POST['name'], $_POST['email'], $_POST['role'])) {
  echo "Perubahan pengguna berhasil diterima:<br>";
  echo "<pre>";
  print_r(['id' => $_POST['id'], 'name' => $_POST['name'], 'email' => $_POST['email'], 'role' => $_POST['role']]);
  echo "</pre>";
} else {
  echo "Data pengguna tidak lengkap.";
}
