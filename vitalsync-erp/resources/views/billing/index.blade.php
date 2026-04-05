@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-semibold text-[#2C2C2A]">Billing & Kasir</h1>
</div>

<!-- Stats -->
<div class="grid grid-cols-4 gap-5 mb-6">
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Belum Dibayar</p>
    <p class="text-3xl font-semibold text-[#E24B4A] mt-1">Rp 12,5 Jt</p>
  </div>
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Pendapatan Hari Ini</p>
    <p class="text-3xl font-semibold text-[#1D9E75] mt-1">Rp 45,2 Jt</p>
  </div>
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Pendapatan Bulan Ini</p>
    <p class="text-3xl font-semibold text-[#378ADD] mt-1">Rp 1,2 M</p>
  </div>
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Total Transaksi</p>
    <p class="text-3xl font-semibold text-[#2C2C2A] mt-1">234</p>
  </div>
</div>

<!-- Invoice List -->
<div class="bg-white rounded-xl shadow-sm p-6">
  <h3 class="font-semibold text-[#2C2C2A] mb-4">Daftar Invoice</h3>
  <div class="overflow-x-auto">
    <table class="w-full">
      <thead>
        <tr class="border-b border-gray-200">
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">No. Invoice</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Pasien</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Tanggal</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Total</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Status</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b border-gray-100 hover:bg-gray-50">
          <td class="py-3 px-4 font-mono text-[#378ADD]">INV-2024-0234</td>
          <td class="py-3 px-4 font-medium">Budi Santoso</td>
          <td class="py-3 px-4">4 Apr 2026</td>
          <td class="py-3 px-4 font-semibold">Rp 450.000</td>
          <td class="py-3 px-4">
            <span class="bg-[#1D9E75] text-white px-2 py-1 rounded text-xs">Lunas</span>
          </td>
          <td class="py-3 px-4">
            <button class="text-[#378ADD] hover:underline text-sm">Cetak</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
