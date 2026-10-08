<?php
// ada id ya beres dihapus, enggak ada ya dibilang tidak ditemukan.
if (isset($_GET['id'])) {
  echo "Pengguna dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID pengguna tidak ditemukan.";
}
