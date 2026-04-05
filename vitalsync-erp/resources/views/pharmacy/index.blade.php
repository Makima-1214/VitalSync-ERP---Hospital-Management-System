@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-semibold text-[#2C2C2A]">Farmasi</h1>
  <div class="flex gap-3">
    <a href="{{ route('pharmacy.inventory') }}" class="bg-[#378ADD] text-white px-4 py-2 rounded-lg hover:bg-[#2d6fb8] transition">
      📦 Kelola Stok
    </a>
  </div>
</div>

<!-- Stats -->
<div class="grid grid-cols-4 gap-5 mb-6">
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Resep Pending</p>
    <p class="text-3xl font-semibold text-[#EF9F27] mt-1">12</p>
  </div>
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Sedang Disiapkan</p>
    <p class="text-3xl font-semibold text-[#378ADD] mt-1">5</p>
  </div>
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Siap Diambil</p>
    <p class="text-3xl font-semibold text-[#1D9E75] mt-1">8</p>
  </div>
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Stok Menipis</p>
    <p class="text-3xl font-semibold text-[#E24B4A] mt-1">7</p>
  </div>
</div>

<!-- Prescription Queue -->
<div class="bg-white rounded-xl shadow-sm p-6">
  <h3 class="font-semibold text-[#2C2C2A] mb-4">Antrian Resep</h3>
  <div class="space-y-3">
    <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:bg-gray-50">
      <div class="flex-1">
        <div class="flex items-center gap-3 mb-2">
          <span class="font-mono text-[#378ADD] font-semibold">RX-2024-0145</span>
          <span class="bg-[#EF9F27] text-white px-2 py-0.5 rounded text-xs">Pending</span>
        </div>
        <p class="font-medium text-[#2C2C2A]">Budi Santoso</p>
        <p class="text-sm text-[#5F5E5A]">dr. Sarah Wijaya, Sp.PD</p>
        <div class="flex gap-2 mt-2">
          <span class="text-xs bg-gray-100 px-2 py-1 rounded">Amoxicillin 500mg × 15</span>
          <span class="text-xs bg-gray-100 px-2 py-1 rounded">Paracetamol 500mg × 10</span>
        </div>
      </div>
      <div class="flex flex-col gap-2">
        <button class="bg-[#1D9E75] text-white px-4 py-2 rounded-lg hover:bg-[#178a64] transition text-sm">Proses</button>
        <button class="bg-gray-200 text-[#2C2C2A] px-4 py-2 rounded-lg hover:bg-gray-300 transition text-sm">Detail</button>
      </div>
    </div>

    <div class="flex items-center justify-between p-4 border border-[#378ADD] bg-[#378ADD]/5 rounded-lg">
      <div class="flex-1">
        <div class="flex items-center gap-3 mb-2">
          <span class="font-mono text-[#378ADD] font-semibold">RX-2024-0144</span>
          <span class="bg-[#378ADD] text-white px-2 py-0.5 rounded text-xs">Sedang Disiapkan</span>
        </div>
        <p class="font-medium text-[#2C2C2A]">Siti Nurhaliza</p>
        <p class="text-sm text-[#5F5E5A]">dr. Michael Chen, Sp.A</p>
        <div class="flex gap-2 mt-2">
          <span class="text-xs bg-white px-2 py-1 rounded">OBH Syrup 100ml × 1</span>
          <span class="text-xs bg-white px-2 py-1 rounded">Vitamin C 500mg × 30</span>
        </div>
      </div>
      <div class="flex flex-col gap-2">
        <button class="bg-[#1D9E75] text-white px-4 py-2 rounded-lg hover:bg-[#178a64] transition text-sm">Selesai</button>
        <button class="bg-gray-200 text-[#2C2C2A] px-4 py-2 rounded-lg hover:bg-gray-300 transition text-sm">Detail</button>
      </div>
    </div>
  </div>
</div>
@endsection
