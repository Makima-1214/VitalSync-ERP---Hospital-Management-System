@extends('layouts.app')

@section('content')
<div class="mb-6">
  <h1 class="text-2xl font-semibold text-[#2C2C2A]">Laporan & Analitik</h1>
  <p class="text-sm text-[#5F5E5A] mt-1">Laporan komprehensif untuk monitoring dan evaluasi</p>
</div>

<!-- Report Categories -->
<div class="grid grid-cols-3 gap-5">
  <a href="{{ route('reports.patients') }}" class="bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition">
    <div class="w-12 h-12 bg-[#378ADD]/10 rounded-lg flex items-center justify-center mb-4">
      <svg class="w-6 h-6 text-[#378ADD]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
        <circle cx="9" cy="7" r="4"/>
      </svg>
    </div>
    <h3 class="font-semibold text-[#2C2C2A] mb-2">Laporan Pasien</h3>
    <p class="text-sm text-[#5F5E5A]">Data kunjungan, demografi, dan statistik pasien</p>
  </a>

  <a href="{{ route('reports.financial') }}" class="bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition">
    <div class="w-12 h-12 bg-[#1D9E75]/10 rounded-lg flex items-center justify-center mb-4">
      <svg class="w-6 h-6 text-[#1D9E75]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <line x1="12" y1="1" x2="12" y2="23"/>
        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
      </svg>
    </div>
    <h3 class="font-semibold text-[#2C2C2A] mb-2">Laporan Keuangan</h3>
    <p class="text-sm text-[#5F5E5A]">Pendapatan, pengeluaran, dan analisis finansial</p>
  </a>

  <a href="{{ route('reports.inventory') }}" class="bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition">
    <div class="w-12 h-12 bg-[#EF9F27]/10 rounded-lg flex items-center justify-center mb-4">
      <svg class="w-6 h-6 text-[#EF9F27]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M20 7H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
      </svg>
    </div>
    <h3 class="font-semibold text-[#2C2C2A] mb-2">Laporan Inventaris</h3>
    <p class="text-sm text-[#5F5E5A]">Stok obat, alat medis, dan pergerakan barang</p>
  </a>
</div>
@endsection
