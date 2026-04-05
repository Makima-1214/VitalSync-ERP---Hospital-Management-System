# 🔗 Quick Access Links - VitalSync ERP

## 🌐 Server Status
**Status**: ✅ RUNNING  
**URL**: http://localhost:8000  
**Alternative**: http://127.0.0.1:8000

---

## 📱 Main Pages

### Dashboard & Core
- 🏠 [Dashboard](http://localhost:8000/) - Overview sistem dengan metrics
- 👥 [Data Pasien](http://localhost:8000/patients) - Daftar semua pasien
- ➕ [Tambah Pasien](http://localhost:8000/patients/create) - Form registrasi pasien baru
- 👤 [Detail Pasien #1](http://localhost:8000/patients/1) - Contoh detail pasien

### Antrian
- 🎫 [Manajemen Antrian](http://localhost:8000/queue) - Kelola antrian per dokter
- 📺 [Tampilan Antrian TV](http://localhost:8000/queue/display) - Display untuk monitor publik

### Rekam Medis
- 📋 [Daftar Rekam Medis](http://localhost:8000/medical-records) - EMR/CPPT
- ➕ [Buat Rekam Medis](http://localhost:8000/medical-records/create) - Form SOAP
- 📄 [Detail RM #1](http://localhost:8000/medical-records/1) - Contoh rekam medis

### Farmasi
- 💊 [Dashboard Farmasi](http://localhost:8000/pharmacy) - Antrian resep
- 📦 [Inventaris Obat](http://localhost:8000/pharmacy/inventory) - Stok obat
- 📝 [Daftar Resep](http://localhost:8000/pharmacy/prescriptions) - E-prescribing

### Laboratorium
- 🔬 [Dashboard Lab](http://localhost:8000/laboratory) - Order lab
- 📋 [Order Lab](http://localhost:8000/laboratory/orders) - Manajemen order
- 📊 [Hasil Lab](http://localhost:8000/laboratory/results) - Input hasil

### Rawat Inap
- 🛏️ [Manajemen Tempat Tidur](http://localhost:8000/beds) - Bed occupancy
- 🏥 [Kelola Ruangan](http://localhost:8000/beds/rooms) - Room management

### Billing & Keuangan
- 💰 [Dashboard Billing](http://localhost:8000/billing) - Overview keuangan
- 🧾 [Daftar Invoice](http://localhost:8000/billing/invoices) - Semua invoice
- 📄 [Detail Invoice #1](http://localhost:8000/billing/1) - Contoh invoice

### Laporan
- 📈 [Dashboard Laporan](http://localhost:8000/reports) - Semua kategori laporan
- 👥 [Laporan Pasien](http://localhost:8000/reports/patients) - Data kunjungan
- 💵 [Laporan Keuangan](http://localhost:8000/reports/financial) - Revenue & expenses
- 📦 [Laporan Inventaris](http://localhost:8000/reports/inventory) - Stok & pergerakan

### Pengaturan
- ⚙️ [Pengaturan Sistem](http://localhost:8000/settings) - System settings
- 👤 [Manajemen User](http://localhost:8000/settings/users) - User accounts
- 🔐 [Role & Permission](http://localhost:8000/settings/roles) - RBAC

---

## 🎯 Testing Checklist

### ✅ Halaman yang Sudah Bisa Diakses
- [x] Dashboard dengan charts
- [x] Data pasien dengan table
- [x] Form tambah pasien
- [x] Detail pasien
- [x] Antrian management
- [x] Tampilan antrian TV (fullscreen)
- [x] Farmasi dashboard
- [x] Inventaris obat dengan alert stok
- [x] Lab dashboard
- [x] Bed management dengan visual
- [x] Billing dashboard
- [x] Laporan dashboard
- [x] Settings dashboard

### 🔄 Fitur yang Perlu Backend
- [ ] Login/Authentication
- [ ] Data real dari database
- [ ] Form submission
- [ ] Search & filter functionality
- [ ] Pagination
- [ ] PDF generation
- [ ] Excel export
- [ ] Real-time updates

---

## 🎨 UI Components yang Tersedia

### Navigation
- ✅ Sidebar dengan active state
- ✅ Topbar dengan search
- ✅ Breadcrumbs (ready)

### Data Display
- ✅ Stats cards dengan icons
- ✅ Tables dengan hover
- ✅ Status badges (color-coded)
- ✅ Charts (Chart.js)

### Forms
- ✅ Input fields
- ✅ Select dropdowns
- ✅ Textareas
- ✅ Date pickers
- ✅ Validation styling (ready)

### Feedback
- ✅ Alert boxes
- ✅ Loading states (ready)
- ✅ Empty states (ready)
- ✅ Success/Error messages (ready)

---

## 🚀 Quick Commands

### Start Server
```bash
cd vitalsync-erp
php artisan serve
```

### Stop Server
Press `Ctrl + C` di terminal

### Build Assets
```bash
npm run build
```

### Development Mode (Hot Reload)
```bash
npm run dev
```

### Clear Cache
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

---

## 📞 Need Help?

- 📖 Lihat [QUICK_START.md](QUICK_START.md) untuk panduan lengkap
- 📚 Lihat [PAGES_DOCUMENTATION.md](PAGES_DOCUMENTATION.md) untuk detail halaman
- 📝 Lihat [README.md](README.md) untuk overview project

---

**Last Updated**: April 4, 2026  
**Server Status**: ✅ Running on http://localhost:8000
