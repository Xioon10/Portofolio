-- Membuat database portfolio_db jika belum ada
CREATE DATABASE IF NOT EXISTS portfolio_db;

-- Gunakan database portfolio_db
USE portfolio_db;

-- Tabel kontak untuk menyimpan data dari formulir kontak di halaman utama
CREATE TABLE IF NOT EXISTS kontak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telepon VARCHAR(20) NOT NULL,
    pesan TEXT NOT NULL,
    tanggal_kirim TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel komentar untuk menyimpan komentar di halaman artikel
CREATE TABLE IF NOT EXISTS komentar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    artikel_id INT NOT NULL,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    komentar TEXT NOT NULL,
    tanggal_kirim TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);