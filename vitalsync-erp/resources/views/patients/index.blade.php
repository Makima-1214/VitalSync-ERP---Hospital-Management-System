@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-semibold text-[#2C2C2A]">Data Pasien</h1>
  <a href="{{ route('patients.create') }}" class="bg-[#1D9E75] text-white px-4 py-2 rounded-lg hover:bg-[#178a64] transition">
    + Tambah Pasien Baru
  </a>
</div>

@if(session('success'))
<div class="bg-[#1D9E75]/10 border border-[#1D9E75] rounded-lg p-4 mb-6">
  <p class="text-[#1D9E75]">{{ session('success') }}</p>
</div>
@endif

<div class="bg-white rounded-xl shadow-sm p-6">
  <!-- Search & Filter -->
  <form method="GET" action="{{ route('patients.index') }}" class="flex gap-4 mb-6">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama, NIK, atau No. RM..." class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1D9E75]">
    <button type="submit" class="bg-[#378ADD] text-white px-6 py-2 rounded-lg hover:bg-[#2d6fb8] transition">Cari</button>
    @if(request('search'))
    <a href="{{ route('patients.index') }}" class="bg-gray-200 text-[#2C2C2A] px-6 py-2 rounded-lg hover:bg-gray-300 transition">Reset</a>
    @endif
  </form>

  <!-- Table -->
  <div class="overflow-x-auto">
    <table class="w-full">
      <thead>
        <tr class="border-b border-gray-200">
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">No. RM</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">NIK</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Nama Lengkap</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Tanggal Lahir</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Alamat</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($patients as $patient)
        <tr class="border-b border-gray-100 hover:bg-gray-50">
          <td class="py-3 px-4 font-mono text-[#378ADD]">{{ $patient->medical_record_number }}</td>
          <td class="py-3 px-4">{{ $patient->nik }}</td>
          <td class="py-3 px-4 font-medium">{{ $patient->name }}</td>
          <td class="py-3 px-4">{{ $patient->date_of_birth->format('d M Y') }} ({{ $patient->age }} thn)</td>
          <td class="py-3 px-4 text-sm">{{ Str::limit($patient->address, 40) }}</td>
          <td class="py-3 px-4">
            <div class="flex gap-2">
              <a href="{{ route('patients.show', $patient) }}" class="text-[#378ADD] hover:underline">Lihat</a>
              <a href="{{ route('patients.edit', $patient) }}" class="text-[#EF9F27] hover:underline">Edit</a>
            </div>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="6" class="py-8 text-center text-[#5F5E5A]">
            @if(request('search'))
              Tidak ada pasien yang ditemukan dengan kata kunci "{{ request('search') }}"
            @else
              Belum ada data pasien
            @endif
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <!-- Pagination -->
  @if($patients->hasPages())
  <div class="flex justify-between items-center mt-6">
    <p class="text-sm text-[#5F5E5A]">
      Menampilkan {{ $patients->firstItem() }}-{{ $patients->lastItem() }} dari {{ $patients->total() }} pasien
    </p>
    <div class="flex gap-2">
      {{ $patients->links() }}
    </div>
  </div>
  @endif
</div>
@endsection
