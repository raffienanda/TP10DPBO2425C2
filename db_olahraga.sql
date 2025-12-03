CREATE DATABASE db_olahraga;
USE db_olahraga;

-- Tabel 1: Categories (Jenis Olahraga)
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT
);

-- Tabel 2: Teams (Tim) - Relasi ke Categories
CREATE TABLE teams (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    name VARCHAR(100) NOT NULL,
    city VARCHAR(100),
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
);

-- Tabel 3: Players (Pemain) - Relasi ke Teams
CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id INT,
    name VARCHAR(100) NOT NULL,
    position VARCHAR(50),
    jersey_number INT,
    FOREIGN KEY (team_id) REFERENCES teams(id) ON DELETE CASCADE
);

-- Tabel 4: Staff (Pelatih/Official) - Relasi ke Teams
CREATE TABLE staff (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id INT,
    name VARCHAR(100) NOT NULL,
    role VARCHAR(50) NOT NULL, -- Coach, Medic, Manager
    FOREIGN KEY (team_id) REFERENCES teams(id) ON DELETE CASCADE
);

-- Dummy Data (Opsional)
INSERT INTO categories (name) VALUES ('Sepak Bola'), ('Basket');
INSERT INTO teams (category_id, name, city) VALUES (1, 'Persib', 'Bandung'), (2, 'Satria Muda', 'Jakarta');