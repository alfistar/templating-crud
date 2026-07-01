# 📚 Tugas 9 - CRUD Sistem Pendataan

Project ini merupakan pengembangan dari Tugas 9 dengan menambahkan fitur **CRUD (Create, Read, Update, Delete)** menggunakan **PHP Native**, **MySQL**, dan **AdminLTE 4**.

## 👨‍💻 Teknologi

- PHP Native
- MySQL
- AdminLTE 4
- Bootstrap 5
- HTML5
- CSS3
- JavaScript

---

## 📂 Struktur Project

```
Tugas 9
│
├── assets/
├── dist/
├── plugins/
├── template/
│   ├── header.php
│   ├── sidebar.php
│   └── footer.php
│
├── koneksi.php
├── index.php
│
├── input_dosen.php
├── data_dosen.php
├── edit_dosen.php
├── hapus_dosen.php
│
├── input_mahasiswa.php
├── data_mahasiswa.php
├── edit_mahasiswa.php
├── hapus_mahasiswa.php
│
└── db_kampus.sql
```

---

## ✨ Fitur

### Dashboard

- Menampilkan jumlah dosen
- Menampilkan jumlah mahasiswa
- Menggunakan fungsi agregasi SQL (`COUNT()`)

### Data Dosen

- Tambah Data
- Tampilkan Data
- Edit Data
- Hapus Data

### Data Mahasiswa

- Tambah Data
- Tampilkan Data
- Edit Data
- Hapus Data

---

## 🗄 Database

Nama database

```
db_kampus
```

Tabel

- dosen
- mahasiswa

---

## ⚙️ Cara Menjalankan

1. Clone repository

```bash
git clone https://github.com/alfistar/templating-crud.git
```

2. Pindahkan project ke folder

```
htdocs
```

atau

```
www
```

3. Import database

```
db_kampus.sql
```

4. Atur koneksi database pada

```
koneksi.php
```

```php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_kampus";
```

5. Jalankan project melalui browser

```
http://localhost/Tugas%209/
```

---

## 📸 Tampilan

- Dashboard
- Input Dosen
- Data Dosen
- Input Mahasiswa
- Data Mahasiswa

---

## 📌 Konsep yang Dipelajari

- Template AdminLTE
- PHP Native
- Koneksi Database MySQL
- CRUD
- Fungsi Agregasi SQL
- Reusable Template (Header, Sidebar, Footer)

---

## 👤 Author

**Alfi Siti Dwianti**

Universitas Pembangunan Nasional "Veteran" Jawa Timur

Mata Kuliah Pemrograman Web
