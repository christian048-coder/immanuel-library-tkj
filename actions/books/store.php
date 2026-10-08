<?php
// blok ini satpamnya, ngecek metodenya beneran POST apa enggak dan tombol tambah_buku kepencet apa enggak. kalau ada yang buka file ini langsung, ditolak pakai tulisan Akses tidak valid.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_buku'])) {
  echo "Akses tidak valid.";
  return;
}
// nah di sini dicek satu-satu fieldnya lengkap apa enggak: title, isbn, year, stock, category_id, description. kalau lengkap, dibungkus ke $data terus dipajang pakai print_r. author_ids boleh kosong, defaultnya array kosong.
if (isset($_POST['title'], $_POST['isbn'], $_POST['year'], $_POST['stock'], $_POST['category_id'], $_POST['description'])) {
  $data = [
    'title' => $_POST['title'],
    'isbn' => $_POST['isbn'],
    'year' => $_POST['year'],
    'stock' => $_POST['stock'],
    'category_id' => $_POST['category_id'],
    'description' => $_POST['description'],
    'author_ids' => isset($_POST['author_ids']) ? $_POST['author_ids'] : [],
  ];
  echo "Buku baru berhasil diterima:<br>";
  echo "<pre>";
  print_r($data);
  echo "</pre>";
} else {
  echo "Data buku tidak lengkap.";
}
