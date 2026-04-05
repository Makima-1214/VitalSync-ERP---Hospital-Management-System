@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-semibold text-[#2C2C2A]">Manajemen User</h1>
  <button class="bg-[#1D9E75] text-white px-4 py-2 rounded-lg hover:bg-[#178a64] transition">
    + Tambah User
  </button>
</div>

<div class="bg-white rounded-xl shadow-sm p-6">
  <div class="overflow-x-auto">
    <table class="w-full">
      <thead>
        <tr class="border-b border-gray-200">
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Username</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Nama Lengkap</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Role</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Status</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b border-gray-100 hover:bg-gray-50">
          <td class="py-3 px-4 font-mono">admin</td>
          <td class="py-3 px-4 font-medium">Administrator</td>
          <td class="py-3 px-4">
            <span class="bg-[#E24B4A] text-white px-2 py-1 rounded text-xs">Superadmin</span>
          </td>
          <td class="py-3 px-4">
            <span class="bg-[#1D9E75] text-white px-2 py-1 rounded text-xs">Aktif</span>
          </td>
          <td class="py-3 px-4">
            <button class="text-[#378ADD] hover:underline text-sm">Edit</button>
          </td>
        </tr>
        <tr class="border-b border-gray-100 hover:bg-gray-50">
          <td class="py-3 px-4 font-mono">dr.sarah</td>
          <td class="py-3 px-4 font-medium">dr. Sarah Wijaya, Sp.PD</td>
          <td class="py-3 px-4">
            <span class="bg-[#378ADD] text-white px-2 py-1 rounded text-xs">Dokter</span>
          </td>
          <td class="py-3 px-4">
            <span class="bg-[#1D9E75] text-white px-2 py-1 rounded text-xs">Aktif</span>
          </td>
          <td class="py-3 px-4">
            <button class="text-[#378ADD] hover:underline text-sm">Edit</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
