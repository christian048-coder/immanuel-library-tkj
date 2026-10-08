<?php
// satpamnya: POST + tombol ubah_profil. beda sama ubah_pengguna ya, ini khusus profil sendiri.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_profil'])) {
  echo "Akses tidak valid.";
  return;
}
// cek kelima field lengkap apa enggak. lengkap ya print_r, kurang ya dibilang tidak lengkap.
if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['bio'])) {
  echo "Perubahan profil berhasil diterima:<br>";
  echo "<pre>";
  print_r(['name' => $_POST['name'], 'email' => $_POST['email'], 'phone' => $_POST['phone'], 'address' => $_POST['address'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data profil tidak lengkap.";
}
