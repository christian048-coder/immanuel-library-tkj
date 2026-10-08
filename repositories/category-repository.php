<?php

// getCategories() kerjanya ngasih semua kategori sekaligus, tiap item ada id, nama, deskripsi, sama total_books. dipakai di halaman index kategori buat di-loop jadi tabel, plus dipakai juga di form buku buat isi dropdown.
function getCategories() {
  return [
    ["id" => 1, "name" => "Fiksi", "description" => "Novel dan cerita rekaan", "total_books" => 3],
    ["id" => 2, "name" => "Sains", "description" => "Buku ilmu pengetahuan alam", "total_books" => 0],
    ["id" => 3, "name" => "Sejarah", "description" => "Buku sejarah dan biografi", "total_books" => 1],
    ["id" => 4, "name" => "Teknologi", "description" => "Buku pemrograman dan teknologi", "total_books" => 0],
  ];
}

// getCategory() kerjanya ngasih SATU kategori aja, contohnya yang Fiksi. dipakai di halaman edit biar formnya langsung keisi, nggak pakai parameter biar simpel.
function getCategory() {
  return ["id" => 1, "name" => "Fiksi", "description" => "Novel dan cerita rekaan", "total_books" => 3];
}
