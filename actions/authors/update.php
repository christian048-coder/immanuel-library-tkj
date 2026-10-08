<?php
// satpamnya nyari tombol ubah_penulis. beda tombol beda pintu.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_penulis'])) {
  echo "Akses tidak valid.";
  return;
}
// cek id, name, bio. lengkap ya dipajang, kurang ya ditolak halus.
if (isset($_POST['id'], $_POST['name'], $_POST['bio'])) {
  echo "Perubahan penulis berhasil diterima:<br>";
  echo "<pre>";
  print_r(['id' => $_POST['id'], 'name' => $_POST['name'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data penulis tidak lengkap.";
}
