<?php

// getAuthors() kerjanya ngasih semua penulis sekaligus, tiap orang bawa id, nama, bio singkat, sama total_books. dipakai di halaman index penulis sama di form buku buat checkbox penulis.
function getAuthors() {
  return [
    ["id" => 1, "name" => "Andrea Hirata", "bio" => "Penulis asal Belitung, dikenal lewat novel Laskar Pelangi.", "total_books" => 1],
    ["id" => 2, "name" => "Tere Liye", "bio" => "Penulis produktif novel Indonesia.", "total_books" => 1],
    ["id" => 3, "name" => "J.K. Rowling", "bio" => "Penulis seri Harry Potter.", "total_books" => 1],
    ["id" => 4, "name" => "Pramoedya Ananta Toer", "bio" => "Sastrawan besar Indonesia.", "total_books" => 2],
    ["id" => 5, "name" => "Sapardi Djoko Damono", "bio" => "Penyair Indonesia.", "total_books" => 1],
  ];
}

// getAuthor() kerjanya ngasih SATU penulis aja, contohnya Andrea Hirata. dipakai di halaman edit biar inputnya keisi otomatis, nggak pakai parameter.
function getAuthor() {
  return ["id" => 1, "name" => "Andrea Hirata", "bio" => "Penulis asal Belitung, dikenal lewat novel Laskar Pelangi.", "total_books" => 1];
}
