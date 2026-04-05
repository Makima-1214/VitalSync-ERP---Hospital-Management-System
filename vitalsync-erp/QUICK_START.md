# 🚀 Quick Start Guide - VitalSync ERP

## ✅ Status: APLIKASI SUDAH BERJALAN!

Aplikasi VitalSync ERP sudah running di:
**http://127.0.0.1:8000** atau **http://localhost:8000**

---

## 📱 Halaman yang Bisa Diakses

### Halaman Utama
- **Dashboard**: http://localhost:8000/
- **Data Pasien**: http://localhost:8000/patients
- **Tambah Pasien**: http://localhost:8000/patients/create
- **Detail Pasien**: http://localhost:8000/patients/1

### Antrian
- **Manajemen Antrian**: http://localhost:8000/queue
- **Tampilan Antrian (TV Display)**: http://localhost:8000/queue/display

### Rekam Medis
- **Daftar Rekam Medis**: http://localhost:8000/medical-records
- **Buat Rekam Medis**: http://localhost:8000/medical-records/create

### Farmasi
- **Dashboard Farmasi**: http://localhost:8000/pharmacy
- **Inventaris Obat**: http://localhost:8000/pharmacy/inventory
- **Resep**: http://localhost:8000/pharmacy/prescriptions

### Laboratorium
- **Dashboard Lab**: http://localhost:8000/laboratory
- **Order Lab**: http://localhost:8000/laboratory/orders
- **Hasil Lab**: http://localhost:8000/laboratory/results

### Rawat Inap
- **Manajemen Tempat Tidur**: http://localhost:8000/beds
- **Kelola Ruangan**: http://localhost:8000/beds/rooms

### Billing & Keuangan
- **Dashboard Billing**: http://localhost:8000/billing
- **Daftar Invoice**: http://localhost:8000/billing/invoices

### Laporan
- **Dashboard Laporan**: http://localhost:8000/reports
- **Laporan Pasien**: http://localhost:8000/reports/patients
- **Laporan Keuangan**: http://localhost:8000/reports/financial
- **Laporan Inventaris**: http://localhost:8000/reports/inventory

### Pengaturan
- **Pengaturan Sistem**: http://localhost:8000/settings
- **Manajemen User**: http://localhost:8000/settings/users
- **Role & Permission**: http://localhost:8000/settings/roles

---

## 🛠️ Cara Menjalankan Aplikasi

### Pertama Kali Setup
```bash
# 1. Install dependencies
composer install
npm install

# 2. Setup environment
cp .env.example .env
php artisan key:generate

# 3. Setup database
php artisan migrate

# 4. Build assets
npm run build
```

### Menjalankan Development Server

**Opsi 1: Server Sederhana**
```bash
php artisan serve
```
Akses: http://localhost:8000

**Opsi 2: Development dengan Hot Reload**
```bash
# Terminal 1: Laravel Server
php artisan serve

# Terminal 2: Vite Dev Server (untuk hot reload CSS/JS)
npm run dev
```

**Opsi 3: Menggunakan Composer Script (Recommended)**
```bash
composer run dev
```
Ini akan menjalankan server, queue, logs, dan vite secara bersamaan.

---

## 🎨 Fitur UI yang Sudah Tersedia

### Design System
- ✅ Sidebar navigation dengan active state
- ✅ Responsive layout (desktop-first)
- ✅ Color-coded status badges
- ✅ Stats cards dengan icons
- ✅ Data tables dengan hover effects
- ✅ Search dan filter forms
- ✅ Alert notifications
- ✅ Modal-ready structure

### Color Palette
- **Primary Green**: `#1D9E75` - Success, CTA buttons
- **Blue**: `#378ADD` - Info, Links
- **Orange**: `#EF9F27` - Warning
- **Red**: `#E24B4A` - Error, Alert
- **Dark**: `#2C2C2A` - Primary text
- **Gray**: `#5F5E5A` - Secondary text
- **Background**: `#F5F4EF` - Page background

---

## 📊 Data Dummy

Saat ini aplikasi menggunakan data dummy yang di-hardcode di views.
Untuk menggunakan data real dari database, perlu:

1. Buat Controllers untuk setiap modul
2. Buat Models dengan relationships
3. Buat Seeders untuk data sample
4. Update views untuk menggunakan data dari controller

---

## 🔧 Troubleshooting

### Server tidak bisa diakses
```bash
# Cek apakah port 8000 sudah digunakan
netstat -ano | findstr :8000

# Gunakan port lain
php artisan serve --port=8080
```

### Assets tidak muncul
```bash
# Build ulang assets
npm run build

# Atau jalankan dev mode
npm run dev
```

### Error 500
```bash
# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Cek logs
tail -f storage/logs/laravel.log
```

### Database error
```bash
# Pastikan database.sqlite ada
touch database/database.sqlite

# Jalankan migrations
php artisan migrate:fresh
```

---

## 📝 Next Steps untuk Development

### Priority 1: Backend Integration
- [ ] Buat Controllers untuk semua routes
- [ ] Buat Models dengan relationships
- [ ] Implementasi validation
- [ ] Setup API endpoints

### Priority 2: Authentication
- [ ] Install Laravel Breeze/Fortify
- [ ] Buat login/register pages
- [ ] Setup middleware untuk RBAC
- [ ] Protect routes

### Priority 3: Real Data
- [ ] Buat Seeders untuk data dummy
- [ ] Update views untuk dynamic data
- [ ] Implementasi pagination
- [ ] Add search functionality

### Priority 4: Advanced Features
- [ ] Real-time queue updates (WebSocket)
- [ ] Notification system
- [ ] PDF generation untuk invoice/reports
- [ ] Excel export untuk reports

---

## 🌐 Deployment ke Production

### Persiapan
1. Update `.env` untuk production
2. Set `APP_ENV=production` dan `APP_DEBUG=false`
3. Generate production key: `php artisan key:generate`
4. Optimize aplikasi:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run build
```

### Server Requirements
- PHP 8.2+
- Composer
- Node.js 18+
- MySQL/PostgreSQL (untuk production)
- Nginx/Apache

---

## 📞 Support

Untuk pertanyaan atau issue, silakan buka issue di repository atau hubungi tim development.

**Happy Coding! 🎉**
