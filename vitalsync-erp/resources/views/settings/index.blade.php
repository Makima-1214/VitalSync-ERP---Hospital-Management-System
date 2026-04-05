@extends('layouts.app')

@section('content')
<div class="mb-6">
  <h1 class="text-2xl font-semibold text-[#2C2C2A]">Pengaturan Sistem</h1>
</div>

<div class="grid grid-cols-2 gap-5">
  <a href="{{ route('settings.users') }}" class="bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition">
    <div class="flex items-center gap-4">
      <div class="w-12 h-12 bg-[#378ADD]/10 rounded-lg flex items-center justify-center">
        <svg class="w-6 h-6 text-[#378ADD]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
          <circle cx="9" cy="7" r="4"/>
        </svg>
      </div>
      <div>
        <h3 class="font-semibold text-[#2C2C2A]">Manajemen User</h3>
        <p class="text-sm text-[#5F5E5A]">Kelola akun pengguna sistem</p>
      </div>
    </div>
  </a>

  <a href="{{ route('settings.roles') }}" class="bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition">
    <div class="flex items-center gap-4">
      <div class="w-12 h-12 bg-[#1D9E75]/10 rounded-lg flex items-center justify-center">
        <svg class="w-6 h-6 text-[#1D9E75]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
          <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
        </svg>
      </div>
      <div>
        <h3 class="font-semibold text-[#2C2C2A]">Role & Permission</h3>
        <p class="text-sm text-[#5F5E5A]">Atur hak akses pengguna</p>
      </div>
    </div>
  </a>
</div>
@endsection
