@extends('layouts.app')

@section('content')
<div class="max-w-6xl">
  <div class="flex items-center gap-4 mb-6">
    <a href="{{ route('patients.index') }}" class="text-[#5F5E5A] hover:text-[#2C2C2A]">← Kembali</a>
    <h1 class="text-2xl font-semibold text-[#2C2C2A]">Detail Pasien</h1>
  </div>

  <!-- Patient Info Card -->
  <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
    <div class="flex justify-between items-start">
      <div class="flex gap-6">
        <div class="w-24 h-24 bg-[#1D9E75] rounded-full flex items-center justify-center text-white text-3xl font-bold">
          BS
        </div>
        <div>
          <h2 class="text-2xl font-semibold text-[#2C2C2A] mb-2">Budi Santoso</h2>
          <div class="grid grid-cols-2 gap-x-8 gap-y-2 text-sm">
            <div>
              <span class="text-[#5F5E5A]">No. RM:</span>
              <span class="font-mono text-[#378ADD] ml-2">RM-2024-001</span>
            </div>
            <div>
              <span class="text-[#5F5E5A]">NIK:</span>
              <span class="ml-2">3201234567890001</span>
            </div>
            <div>
              <span class="text-[#5F5E5A]">Tanggal Lahir:</span>
              <span class="ml-2">15 Mei 1985 (38 tahun)</span>
            </div>
            <div>
              <span class="text-[#5F5E5A]">Jenis Kelamin:</span>
              <span class="ml-2">Laki-laki</span>
            </div>
            <div>
              <span class="text-[#5F5E5A]">Golongan Darah:</span>
              <span class="ml-2">O+</span>
            </div>
            <div>
              <span class="text-[#5F5E5A]">No. Telepon:</span>
              <span class="ml-2">0812-3456-7890</span>
            </div>
          </div>
        </div>
      </div>
      <a href="{{ route('patients.edit', 1) }}" class="bg-[#EF9F27] text-white px-4 py-2 rounded-lg hover:bg-[#d88f20] transition">
        Edit Data
      </a>
    </div>
  </div>

  <!-- Tabs -->
  <div class="bg-white rounded-xl shadow-sm">
    <div class="border-b border-gray-200 px-6">
      <div class="flex gap-6">
        <button class="py-4 border-b-2 border-[#1D9E75] text-[#1D9E75] font-medium">Riwayat Kunjungan</button>
        <button class="py-4 text-[#5F5E5A] hover:text-[#2C2C2A]">Riwayat Resep</button>
        <button class="py-4 text-[#5F5E5A] hover:text-[#2C2C2A]">Hasil Lab</button>
      </div>
    </div>

    <div class="p-6">
      <div class="space-y-4">
        <div class="border border-gray-200 rounded-lg p-4">
          <div class="flex justify-between items-start mb-3">
            <div>
              <p class="font-semibold text-[#2C2C2A]">4 April 2026</p>
              <p class="text-sm text-[#5F5E5A]">dr. Sarah Wijaya, Sp.PD</p>
            </div>
            <span class="bg-[#1D9E75] text-white px-3 py-1 rounded text-xs">Selesai</span>
          </div>
          <div class="text-sm">
            <p class="text-[#5F5E5A] mb-1">Diagnosis:</p>
            <p class="text-[#2C2C2A] font-medium">Hipertensi Grade 2 (I10)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
