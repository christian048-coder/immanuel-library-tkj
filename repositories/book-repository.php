<?php

// getBooks() kerjanya ngasih semua buku sekaligus, ada 5 judul, tiap bukunya bawa id, judul, kategori, tahun, stok, sama list penulis. biasanya dipanggil di halaman index terus di-foreach biar jadi baris tabel satu-satu.
function getBooks() {
  return [
    ["id" => 1, "title" => "Laskar Pelangi", "category" => "Fiksi", "year" => 2005, "stock" => 12, "authors" => ["Andrea Hirata"]],
    ["id" => 2, "title" => "Bumi", "category" => "Fiksi", "year" => 2014, "stock" => 8, "authors" => ["Tere Liye"]],
    ["id" => 3, "title" => "Harry Potter dan Batu Bertuah", "category" => "Fiksi", "year" => 1997, "stock" => 5, "authors" => ["J.K. Rowling"]],
    ["id" => 4, "title" => "Bumi Manusia", "category" => "Sejarah", "year" => 1980, "stock" => 6, "authors" => ["Pramoedya Ananta Toer"]],
    ["id" => 5, "title" => "Antologi Rasa Nusantara", "category" => "Fiksi", "year" => 2021, "stock" => 4, "authors" => ["Pramoedya Ananta Toer", "Sapardi Djoko Damono"]],
  ];
}

// getBook() kerjanya ngasih cuma SATU buku aja, yang Antologi Rasa Nusantara lengkap sama isbn, deskripsi, category_id dan author_ids. dipakai di halaman show sama edit biar formnya keisi otomatis, sengaja nggak pakai parameter biar gampang dipanggil.
function getBook() {
  return [
    "id" => 5,
    "title" => "Antologi Rasa Nusantara",
    "isbn" => "978-602-1234-56-7",
    "year" => 2021,
    "stock" => 4,
    "category" => "Fiksi",
    "category_id" => 1,
    "description" => "Kumpulan puisi dan cerita pendek dari berbagai penulis Nusantara.",
    "authors" => ["Pramoedya Ananta Toer", "Sapardi Djoko Damono"],
    "author_ids" => [4, 5],
  ];
}
