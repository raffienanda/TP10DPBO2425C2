# TP10DPBO2425C2

# Janji
Saya Raffie Arsy Ananda dengan NIM 2405916 mengerjakan Tugas Praktikum 3 dalam mata kuliah Desain Pemrograman Berbasis Objek untuk keberkahanNya maka saya tidak melakukan pengaturan seperti yang telah dispesifikasikan. Aamiin.

---

# 🏋️ Gym Management System

Proyek ini merupakan implementasi sederhana dari sistem manajemen Gym menggunakan **PHP Native** dengan arsitektur **MVVM (Model-View-ViewModel)**.  
Aplikasi berjalan di web browser dan memiliki fitur CRUD lengkap serta relasi antar tabel.

---

## 🎨 Desain Program

### 1. Struktur Folder & Kelas
- **`config/Database`** Kelas yang mengatur koneksi ke database MySQL `gym_db` menggunakan PDO.

- **`models`** Merepresentasikan objek data (Entity) seperti `Member`, `Trainer`, `Equipment`, dan `Session`. Hanya berisi properti data tanpa logika.

- **`viewmodels`** Otak aplikasi yang menangani logika bisnis dan operasi database (CRUD).  
  Contoh: `SessionViewModel` menangani logika *JOIN* tabel untuk menampilkan nama member dan pelatih di jadwal.

- **`views`** Menangani seluruh tampilan antarmuka (UI).  
  Berisi file untuk menampilkan daftar data (`_list.php`) dan form input (`_form.php`).

- **`index.php`** Berfungsi sebagai *Controller* utama. Mengatur routing (perpindahan halaman) dan menghubungkan ViewModel dengan View.

---

## 🧭 Alur Program

1. **Inisialisasi** - Pengguna membuka `index.php`.
   - Koneksi database dibuat otomatis saat ViewModel dipanggil.

2. **Navigasi** - Pengguna memilih menu (Anggota, Pelatih, Alat, Jadwal) di navigasi atas.
   - `index.php` memanggil ViewModel yang sesuai untuk mengambil data.

3. **Manipulasi Data (CRUD)** - **Create/Update**: Pengguna mengisi form -> Data dikirim ke `index.php` -> Disimpan oleh `ViewModel`.
   - **Delete**: Pengguna menekan tombol hapus -> `ViewModel` menghapus data dari database.

4. **Sistem Relasi (Jadwal Latihan)** - Saat membuat jadwal, aplikasi mengambil data **Member** dan **Trainer** yang ada.
   - User memilih dari *dropdown* (ComboBox) untuk menghubungkan keduanya dalam satu sesi.

---

## 🧩 Fitur Aplikasi

| Menu | Fungsi |
|--------|---------|
| **Anggota** | Tambah, Edit, Hapus data member gym |
| **Pelatih** | Kelola data pelatih beserta keahliannya |
| **Alat Gym** | Mencatat inventaris alat dan status kondisinya |
| **Jadwal** | Membuat sesi latihan (Relasi Member & Pelatih) |

---

## 🖼️ Tampilan
<img width="750" height="375" alt="image" src="https://github.com/user-attachments/assets/03309d2b-4f2c-4614-b982-f6c2c90985e9" />
<img width="750" height="375" alt="image" src="https://github.com/user-attachments/assets/39432c3f-033b-4c2f-b22d-036f829cf996" />
<img width="750" height="375" alt="image" src="https://github.com/user-attachments/assets/13cc4114-0390-4bc8-829b-8913b9c8d800" />
<img width="750" height="375" alt="image" src="https://github.com/user-attachments/assets/d9ab276b-b159-4b37-8b44-02d76c31b68d" />
<img width="750" height="375" alt="image" src="https://github.com/user-attachments/assets/b2a151e7-f8dc-4bee-9e52-af34201917ce" />
<img width="750" height="375" alt="image" src="https://github.com/user-attachments/assets/1c1ba39f-53dd-44cb-b9e0-79b0204e2835" />




