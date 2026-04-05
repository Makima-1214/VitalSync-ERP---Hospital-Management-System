@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-semibold text-[#2C2C2A]">Rekam Medis Elektronik</h1>
  <a href="{{ route('medical-records.create') }}" class="bg-[#1D9E75] text-white px-4 py-2 rounded-lg hover:bg-[#178a64] transition">
    + Buat Rekam Medis
  </a>
</div>

<div class="bg-white rounded-xl shadow-sm p-6">
  <!-- Search -->
  <div class="flex gap-4 mb-6">
    <input type="text" placeholder="Cari pasien atau No. RM..." class="flex-1 px-4 py-2 border border-gray-300 rounded-lg">
    <button class="bg-[#378ADD] text-white px-6 py-2 rounded-lg">Cari</button>
  </div>

  <!-- Records Table -->
  <div class="overflow-x-auto">
    <table class="w-full">
      <thead>
        <tr class="border-b border-gray-200">
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Tanggal</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">No. RM</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Pasien</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Dokter</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Diagnosis</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b border-gray-100 hover:bg-gray-50">
          <td class="py-3 px-4">4 Apr 2026</td>
          <td class="py-3 px-4 font-mono text-[#378ADD]">RM-2024-001</td>
          <td class="py-3 px-4 font-medium">Budi Santoso</td>
          <td class="py-3 px-4 text-sm">dr. Sarah Wijaya</td>
          <td class="py-3 px-4 text-sm">Hipertensi Grade 2</td>
          <td class="py-3 px-4">
            <a href="{{ route('medical-records.show', 1) }}" class="text-[#378ADD] hover:underline">Lihat</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
