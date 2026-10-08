<?php
// kalau id-nya ada, keluar pesan bukunya berhasil dihapus. kalau linknya dibuka tanpa id ya dibilang ID tidak ditemukan.
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo "Buku dengan id " . htmlspecialchars($id) . " berhasil dihapus.";
} else {
  echo "ID buku tidak ditemukan.";
}
