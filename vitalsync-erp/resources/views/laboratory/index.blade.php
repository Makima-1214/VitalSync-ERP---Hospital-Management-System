@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-semibold text-[#2C2C2A]">Laboratorium</h1>
  <button class="bg-[#1D9E75] text-white px-4 py-2 rounded-lg hover:bg-[#178a64] transition">
    + Order Lab Baru
  </button>
</div>

<!-- Stats -->
<div class="grid grid-cols-4 gap-5 mb-6">
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Pending</p>
    <p class="text-3xl font-semibold text-[#EF9F27] mt-1">8</p>
  </div>
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Dalam Proses</p>
    <p class="text-3xl font-semibold text-[#378ADD] mt-1">12</p>
  </div>
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Selesai Hari Ini</p>
    <p class="text-3xl font-semibold text-[#1D9E75] mt-1">45</p>
  </div>
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Total Bulan Ini</p>
    <p class="text-3xl font-semibold text-[#2C2C2A] mt-1">1,234</p>
  </div>
</div>

<!-- Lab Orders -->
<div class="bg-white rounded-xl shadow-sm p-6">
  <h3 class="font-semibold text-[#2C2C2A] mb-4">Order Laboratorium</h3>
  <div class="overflow-x-auto">
    <table class="w-full">
      <thead>
        <tr class="border-b border-gray-200">
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">No. Order</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Pasien</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Jenis Tes</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Dokter</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Status</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b border-gray-100 hover:bg-gray-50">
          <td class="py-3 px-4 font-mono text-[#378ADD]">LAB-2024-0089</td>
          <td class="py-3 px-4 font-medium">Budi Santoso</td>
          <td class="py-3 px-4 text-sm">Darah Lengkap, Gula Darah</td>
          <td class="py-3 px-4 text-sm">dr. Sarah Wijaya</td>
          <td class="py-3 px-4">
            <span class="bg-[#378ADD] text-white px-2 py-1 rounded text-xs">Proses</span>
          </td>
          <td class="py-3 px-4">
            <button class="text-[#1D9E75] hover:underline text-sm">Input Hasil</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
