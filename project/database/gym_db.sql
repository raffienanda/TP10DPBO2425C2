CREATE DATABASE gym_db;
USE gym_db;

-- Tabel 1: Anggota
CREATE TABLE members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    phone VARCHAR(20)
);

-- Tabel 2: Pelatih
CREATE TABLE trainers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    specialization VARCHAR(50) -- misal: Yoga, Cardio, Bodybuilding
);

-- Tabel 3: Alat (Supaya pas 4 tabel)
CREATE TABLE equipment (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    condition_status VARCHAR(50) -- Baik, Rusak, Perbaikan
);

-- Tabel 4: Sesi Latihan (Memiliki 2 Foreign Key)
CREATE TABLE sessions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    member_id INT,
    trainer_id INT,
    session_date DATETIME,
    notes TEXT,
    FOREIGN KEY (member_id) REFERENCES members(id) ON DELETE CASCADE,
    FOREIGN KEY (trainer_id) REFERENCES trainers(id) ON DELETE CASCADE
);