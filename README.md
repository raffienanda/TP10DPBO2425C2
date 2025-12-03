# TP10DPBO2425C2

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

*(Tempat screenshot aplikasi, opsional)*

---
