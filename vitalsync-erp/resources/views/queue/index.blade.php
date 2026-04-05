@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-semibold text-[#2C2C2A]">Manajemen Antrian</h1>
  <div class="flex gap-3">
    <a href="{{ route('queue.display') }}" target="_blank" class="bg-[#378ADD] text-white px-4 py-2 rounded-lg hover:bg-[#2d6fb8] transition">
      📺 Tampilan Antrian
    </a>
    <button class="bg-[#1D9E75] text-white px-4 py-2 rounded-lg hover:bg-[#178a64] transition">
      + Tambah Antrian
    </button>
  </div>
</div>

<div class="grid grid-cols-3 gap-5 mb-6">
  <div class="bg-white rounded-xl shadow-sm p-5">
    <div class="flex items-center justify-between">
      <div>
        <p class="text-sm text-[#5F5E5A]">Menunggu</p>
        <p class="text-3xl font-semibold text-[#EF9F27] mt-1">24</p>
      </div>
      <div class="w-12 h-12 bg-[#EF9F27]/10 rounded-full flex items-center justify-center">
        <span class="text-2xl">⏳</span>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-xl shadow-sm p-5">
    <div class="flex items-center justify-between">
      <div>
        <p class="text-sm text-[#5F5E5A]">Sedang Dilayani</p>
        <p class="text-3xl font-semibold text-[#378ADD] mt-1">8</p>
      </div>
      <div class="w-12 h-12 bg-[#378ADD]/10 rounded-full flex items-center justify-center">
        <span class="text-2xl">👨‍⚕️</span>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-xl shadow-sm p-5">
    <div class="flex items-center justify-between">
      <div>
        <p class="text-sm text-[#5F5E5A]">Selesai Hari Ini</p>
        <p class="text-3xl font-semibold text-[#1D9E75] mt-1">142</p>
      </div>
      <div class="w-12 h-12 bg-[#1D9E75]/10 rounded-full flex items-center justify-center">
        <span class="text-2xl">✅</span>
      </div>
    </div>
  </div>
</div>

<!-- Queue by Doctor -->
<div class="grid grid-cols-2 gap-5">
  <div class="bg-white rounded-xl shadow-sm p-6">
    <h3 class="font-semibold text-[#2C2C2A] mb-4">dr. Sarah Wijaya, Sp.PD</h3>
    <div class="space-y-3">
      <div class="flex items-center justify-between p-3 bg-[#378ADD]/5 rounded-lg border-l-4 border-[#378ADD]">
        <div>
          <p class="font-semibold text-[#2C2C2A]">A-001</p>
          <p class="text-sm text-[#5F5E5A]">Budi Santoso</p>
        </div>
        <span class="bg-[#378ADD] text-white px-3 py-1 rounded-full text-xs font-medium">Sedang Dilayani</span>
      </div>
      <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
        <div>
          <p class="font-semibold text-[#2C2C2A]">A-002</p>
          <p class="text-sm text-[#5F5E5A]">Siti Nurhaliza</p>
        </div>
        <span class="bg-[#EF9F27] text-white px-3 py-1 rounded-full text-xs font-medium">Menunggu</span>
      </div>
      <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
        <div>
          <p class="font-semibold text-[#2C2C2A]">A-003</p>
          <p class="text-sm text-[#5F5E5A]">Ahmad Fauzi</p>
        </div>
        <span class="bg-[#EF9F27] text-white px-3 py-1 rounded-full text-xs font-medium">Menunggu</span>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-xl shadow-sm p-6">
    <h3 class="font-semibold text-[#2C2C2A] mb-4">dr. Michael Chen, Sp.A</h3>
    <div class="space-y-3">
      <div class="flex items-center justify-between p-3 bg-[#378ADD]/5 rounded-lg border-l-4 border-[#378ADD]">
        <div>
          <p class="font-semibold text-[#2C2C2A]">B-001</p>
          <p class="text-sm text-[#5F5E5A]">Rina Kusuma</p>
        </div>
        <span class="bg-[#378ADD] text-white px-3 py-1 rounded-full text-xs font-medium">Sedang Dilayani</span>
      </div>
      <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
        <div>
          <p class="font-semibold text-[#2C2C2A]">B-002</p>
          <p class="text-sm text-[#5F5E5A]">Dewi Lestari</p>
        </div>
        <span class="bg-[#EF9F27] text-white px-3 py-1 rounded-full text-xs font-medium">Menunggu</span>
      </div>
    </div>
  </div>
</div>
@endsection
