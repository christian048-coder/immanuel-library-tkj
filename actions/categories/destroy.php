<?php
// ada id ya dibilang beres dihapus, enggak ada id ya dibilang ID tidak ditemukan.
if (isset($_GET['id'])) {
  echo "Kategori dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID kategori tidak ditemukan.";
}
