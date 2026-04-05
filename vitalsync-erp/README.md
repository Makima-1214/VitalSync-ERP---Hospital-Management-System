# 🏥 VitalSync ERP - Hospital Management System

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11.x-red?style=for-the-badge&logo=laravel" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.2+-blue?style=for-the-badge&logo=php" alt="PHP">
  <img src="https://img.shields.io/badge/TailwindCSS-3.x-38bdf8?style=for-the-badge&logo=tailwindcss" alt="Tailwind">
  <img src="https://img.shields.io/badge/Status-Development-yellow?style=for-the-badge" alt="Status">
</p>

Sistem Informasi Manajemen Rumah Sakit (Hospital Management System) yang komprehensif, dibangun dengan Laravel 11 dan Tailwind CSS.

## ✨ Fitur Utama

### 📊 Dashboard & Analytics
- Real-time metrics dan KPI
- Visualisasi data dengan Chart.js
- Quick actions untuk akses cepat
- Activity monitoring

### 👥 Manajemen Pasien
- Registrasi pasien dengan validasi NIK
- Rekam medis elektronik (EMR/CPPT)
- Riwayat kunjungan lengkap
- Pencarian dan filter advanced

### 🎫 Sistem Antrian
- Manajemen antrian per dokter
- Tampilan antrian untuk TV/monitor publik
- Status real-time (menunggu, dilayani, selesai)
- Queue number generation

### 💊 Farmasi
- E-Prescribing system
- Manajemen inventaris obat
- Alert stok rendah
- Tracking resep (pending, prepared, dispensed)

### 🔬 Laboratorium
- Order management
- Input hasil lab
- Status tracking
- Integration-ready untuk lab equipment

### 🛏️ Rawat Inap
- Visual bed occupancy
- Manajemen ruangan per kelas (VIP, 1, 2, 3)
- Status bed (available, occupied, cleaning)
- Real-time availability

### 💰 Billing & Keuangan
- Invoice generation
- Payment tracking
- Financial reports
- Revenue analytics

### 📈 Laporan
- Laporan pasien
- Laporan keuangan
- Laporan inventaris
- Export-ready (PDF/Excel)

### ⚙️ Pengaturan Sistem
- User management
- Role-based access control (RBAC)
- System configuration
- Audit logs

## 🚀 Quick Start

### Prerequisites
- PHP 8.2 atau lebih tinggi
- Composer
- Node.js 18+ & NPM
- SQLite (development) / MySQL/PostgreSQL (production)

### Installation

```bash
# Clone repository
git clone <repository-url>
cd vitalsync-erp

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Setup database
touch database/database.sqlite
php artisan migrate

# Build assets
npm run build

# Run development server
php artisan serve
```

Aplikasi akan berjalan di: **http://localhost:8000**

📖 **Lihat [QUICK_START.md](QUICK_START.md) untuk panduan lengkap**

## 📱 Halaman yang Tersedia

| Modul | URL | Status |
|-------|-----|--------|
| Dashboard | `/` | ✅ |
| Data Pasien | `/patients` | ✅ |
| Antrian | `/queue` | ✅ |
| Rekam Medis | `/medical-records` | ✅ |
| Farmasi | `/pharmacy` | ✅ |
| Laboratorium | `/laboratory` | ✅ |
| Rawat Inap | `/beds` | ✅ |
| Billing | `/billing` | ✅ |
| Laporan | `/reports` | ✅ |
| Pengaturan | `/settings` | ✅ |

📖 **Lihat [PAGES_DOCUMENTATION.md](PAGES_DOCUMENTATION.md) untuk detail lengkap**

## 🛠️ Tech Stack

- **Backend**: Laravel 11 (PHP 8.2)
- **Frontend**: Blade Templates + Tailwind CSS 3.x
- **JavaScript**: Vanilla JS + Chart.js
- **Database**: SQLite (dev), MySQL/PostgreSQL (production)
- **Build Tool**: Vite 6.x
- **Package Manager**: Composer + NPM

## 🎨 Design System

### Color Palette
- **Primary Green**: `#1D9E75` - Success, CTA
- **Blue**: `#378ADD` - Info, Links
- **Orange**: `#EF9F27` - Warning
- **Red**: `#E24B4A` - Error, Alert
- **Dark**: `#2C2C2A` - Text
- **Gray**: `#5F5E5A` - Secondary Text
- **Background**: `#F5F4EF`

### Components
- Responsive sidebar navigation
- Stats cards dengan icons
- Data tables dengan pagination
- Forms dengan validation styling
- Status badges (color-coded)
- Modal-ready structure

## 📋 Development Roadmap

### Phase 1: Core Features (Current)
- [x] UI/UX Design & Layout
- [x] Routing & Navigation
- [x] View Templates (27 pages)
- [ ] Backend Controllers
- [ ] Models & Relationships
- [ ] Authentication System

### Phase 2: Advanced Features
- [ ] Real-time Queue Updates (WebSocket)
- [ ] Notification System
- [ ] PDF Generation (Invoice, Reports)
- [ ] Excel Export
- [ ] API Development

### Phase 3: Integration
- [ ] BPJS Integration
- [ ] Insurance Provider Integration
- [ ] Lab Equipment Integration (HL7/FHIR)
- [ ] Payment Gateway
- [ ] Telemedicine Platform

### Phase 4: Production Ready
- [ ] Testing (Unit, Feature, Browser)
- [ ] Performance Optimization
- [ ] Security Audit
- [ ] Documentation
- [ ] Deployment

## 🧪 Testing

```bash
# Run tests
php artisan test

# Run with coverage
php artisan test --coverage
```

## 📦 Deployment

```bash
# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run build

# Set production environment
APP_ENV=production
APP_DEBUG=false
```

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👥 Team

Developed with ❤️ by VitalSync Development Team

---

**Status**: 🚧 In Active Development

**Version**: 1.0.0-alpha

**Last Updated**: April 2026
