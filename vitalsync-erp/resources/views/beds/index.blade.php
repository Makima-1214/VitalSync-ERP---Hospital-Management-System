@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-semibold text-[#2C2C2A]">Manajemen Tempat Tidur</h1>
  <a href="{{ route('beds.rooms') }}" class="bg-[#378ADD] text-white px-4 py-2 rounded-lg hover:bg-[#2d6fb8] transition">
    🏥 Kelola Ruangan
  </a>
</div>

<!-- Bed Occupancy Stats -->
<div class="grid grid-cols-4 gap-5 mb-6">
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Total Tempat Tidur</p>
    <p class="text-3xl font-semibold text-[#2C2C2A] mt-1">120</p>
  </div>
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Terisi</p>
    <p class="text-3xl font-semibold text-[#E24B4A] mt-1">87</p>
    <p class="text-xs text-[#5F5E5A] mt-1">72.5% Occupancy</p>
  </div>
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Tersedia</p>
    <p class="text-3xl font-semibold text-[#1D9E75] mt-1">28</p>
  </div>
  <div class="bg-white rounded-xl shadow-sm p-5">
    <p class="text-sm text-[#5F5E5A]">Cleaning</p>
    <p class="text-3xl font-semibold text-[#EF9F27] mt-1">5</p>
  </div>
</div>

<!-- Bed Status by Class -->
<div class="grid grid-cols-2 gap-5">
  <div class="bg-white rounded-xl shadow-sm p-6">
    <h3 class="font-semibold text-[#2C2C2A] mb-4">Kelas VIP</h3>
    <div class="grid grid-cols-5 gap-2">
      @for($i = 1; $i <= 10; $i++)
        <div class="aspect-square rounded-lg {{ $i <= 6 ? 'bg-[#E24B4A]' : 'bg-[#1D9E75]' }} flex items-center justify-center text-white text-xs font-medium">
          {{ $i }}
        </div>
      @endfor
    </div>
    <div class="flex gap-4 mt-4 text-xs">
      <div class="flex items-center gap-2">
        <div class="w-3 h-3 bg-[#E24B4A] rounded"></div>
        <span class="text-[#5F5E5A]">Terisi (6)</span>
      </div>
      <div class="flex items-center gap-2">
        <div class="w-3 h-3 bg-[#1D9E75] rounded"></div>
        <span class="text-[#5F5E5A]">Tersedia (4)</span>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-xl shadow-sm p-6">
    <h3 class="font-semibold text-[#2C2C2A] mb-4">Kelas 1</h3>
    <div class="grid grid-cols-5 gap-2">
      @for($i = 1; $i <= 20; $i++)
        <div class="aspect-square rounded-lg {{ $i <= 14 ? 'bg-[#E24B4A]' : ($i <= 18 ? 'bg-[#1D9E75]' : 'bg-[#EF9F27]') }} flex items-center justify-center text-white text-xs font-medium">
          {{ $i }}
        </div>
      @endfor
    </div>
    <div class="flex gap-4 mt-4 text-xs">
      <div class="flex items-center gap-2">
        <div class="w-3 h-3 bg-[#E24B4A] rounded"></div>
        <span class="text-[#5F5E5A]">Terisi (14)</span>
      </div>
      <div class="flex items-center gap-2">
        <div class="w-3 h-3 bg-[#1D9E75] rounded"></div>
        <span class="text-[#5F5E5A]">Tersedia (4)</span>
      </div>
      <div class="flex items-center gap-2">
        <div class="w-3 h-3 bg-[#EF9F27] rounded"></div>
        <span class="text-[#5F5E5A]">Cleaning (2)</span>
      </div>
    </div>
  </div>
</div>
@endsection
