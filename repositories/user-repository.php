<?php

// getUsers() kerjanya ngasih semua pengguna sekaligus, ada 4 orang, tiap orang ada id, nama, email, sama role admin/member. dipakai di halaman index pengguna buat di-foreach.
function getUsers() {
  return [
    ["id" => 1, "name" => "Admin Utama", "email" => "admin@ski.sch.id", "role" => "admin"],
    ["id" => 2, "name" => "Budi Santoso", "email" => "budi.santoso@siswa.ski.sch.id", "role" => "member"],
    ["id" => 3, "name" => "Siti Aminah", "email" => "siti.aminah@siswa.ski.sch.id", "role" => "member"],
    ["id" => 4, "name" => "Richard Marcell", "email" => "richard.m@ski.sch.id", "role" => "admin"],
  ];
}

// getUser() kerjanya ngasih SATU user aja, contohnya Budi Santoso yang member. dipakai di halaman edit pengguna sama halaman profil.
function getUser() {
  return ["id" => 2, "name" => "Budi Santoso", "email" => "budi.santoso@siswa.ski.sch.id", "role" => "member"];
}

// getProfile() kerjanya ngasih data profil tambahannya Budi, ada phone, address, sama bio. dipakai di halaman profil biar form bawahnya keisi, misah dari getUser biar rapi.
function getProfile() {
  return ["user_id" => 2, "phone" => "0812-3456-7890", "address" => "Jl. Merdeka No. 21, Pontianak, Kalimantan Barat", "bio" => "Murid kelas XI TKJ yang gemar membaca novel fiksi dan buku pengembangan diri."];
}
