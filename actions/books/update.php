<?php
// satpamnya sama kayak store, tapi yang dicari tombol ubah_buku. dibuka langsung ya ditolak.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_buku'])) {
  echo "Akses tidak valid.";
  return;
}
// cek kelengkapannya: id wajib ada plus title, isbn, year, stock, category_id, description. lengkap ya dipajang print_r, kurang ya dibilang data tidak lengkap.
if (isset($_POST['id'], $_POST['title'], $_POST['isbn'], $_POST['year'], $_POST['stock'], $_POST['category_id'], $_POST['description'])) {
  $data = [
    'id' => $_POST['id'],
    'title' => $_POST['title'],
    'isbn' => $_POST['isbn'],
    'year' => $_POST['year'],
    'stock' => $_POST['stock'],
    'category_id' => $_POST['category_id'],
    'description' => $_POST['description'],
    'author_ids' => isset($_POST['author_ids']) ? $_POST['author_ids'] : [],
  ];
  echo "Perubahan buku berhasil diterima:<br>";
  echo "<pre>";
  print_r($data);
  echo "</pre>";
} else {
  echo "Data buku tidak lengkap.";
}
