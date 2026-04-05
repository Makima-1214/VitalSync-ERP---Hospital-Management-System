@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
  <div>
    <h1 class="text-2xl font-semibold text-[#2C2C2A]">Inventaris Obat</h1>
    <p class="text-sm text-[#5F5E5A] mt-1">Kelola stok dan pergerakan obat</p>
  </div>
  <div class="flex gap-3">
    <button class="bg-[#378ADD] text-white px-4 py-2 rounded-lg hover:bg-[#2d6fb8] transition">
      📥 Stok Masuk
    </button>
    <button class="bg-[#1D9E75] text-white px-4 py-2 rounded-lg hover:bg-[#178a64] transition">
      + Tambah Obat
    </button>
  </div>
</div>

<!-- Alert Low Stock -->
@if($lowStockCount > 0)
<div class="bg-[#E24B4A]/10 border border-[#E24B4A] rounded-lg p-4 mb-6">
  <div class="flex items-center gap-3">
    <span class="text-2xl">⚠️</span>
    <div>
      <p class="font-semibold text-[#E24B4A]">{{ $lowStockCount }} Obat Stok Menipis</p>
      <p class="text-sm text-[#5F5E5A]">Segera lakukan pemesanan ulang</p>
    </div>
  </div>
</div>
@endif

<!-- Inventory Table -->
<div class="bg-white rounded-xl shadow-sm p-6">
  <form method="GET" action="{{ route('pharmacy.inventory') }}" class="flex gap-4 mb-6">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama obat..." class="flex-1 px-4 py-2 border border-gray-300 rounded-lg">
    <select name="category" class="px-4 py-2 border border-gray-300 rounded-lg">
      <option value="">Semua Kategori</option>
      @foreach($categories as $category)
      <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>{{ $category }}</option>
      @endforeach
    </select>
    <button type="submit" class="bg-[#378ADD] text-white px-6 py-2 rounded-lg hover:bg-[#2d6fb8] transition">Filter</button>
    @if(request('search') || request('category'))
    <a href="{{ route('pharmacy.inventory') }}" class="bg-gray-200 text-[#2C2C2A] px-6 py-2 rounded-lg hover:bg-gray-300 transition">Reset</a>
    @endif
  </form>

  <div class="overflow-x-auto">
    <table class="w-full">
      <thead>
        <tr class="border-b border-gray-200">
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Kode</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Nama Obat</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Kategori</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Stok</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Harga</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Status</th>
          <th class="text-left py-3 px-4 text-[#5F5E5A] font-medium">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($medicines as $medicine)
        <tr class="border-b border-gray-100 hover:bg-gray-50 {{ $medicine->stock <= $medicine->critical_limit ? 'bg-[#E24B4A]/5' : '' }}">
          <td class="py-3 px-4 font-mono text-sm">{{ $medicine->code }}</td>
          <td class="py-3 px-4 font-medium">{{ $medicine->name }}</td>
          <td class="py-3 px-4 text-sm">{{ $medicine->category }}</td>
          <td class="py-3 px-4 font-semibold {{ $medicine->stock <= $medicine->critical_limit ? 'text-[#E24B4A]' : '' }}">
            {{ number_format($medicine->stock) }}
          </td>
          <td class="py-3 px-4">Rp {{ number_format($medicine->price, 0, ',', '.') }}</td>
          <td class="py-3 px-4">
            @if($medicine->stock <= $medicine->critical_limit)
            <span class="bg-[#E24B4A] text-white px-2 py-1 rounded text-xs">Stok Rendah</span>
            @elseif($medicine->stock <= $medicine->critical_limit * 2)
            <span class="bg-[#EF9F27] text-white px-2 py-1 rounded text-xs">Perlu Restock</span>
            @else
            <span class="bg-[#1D9E75] text-white px-2 py-1 rounded text-xs">Aman</span>
            @endif
          </td>
          <td class="py-3 px-4">
            <button class="text-[#378ADD] hover:underline text-sm">Edit</button>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="7" class="py-8 text-center text-[#5F5E5A]">
            Tidak ada data obat
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <!-- Pagination -->
  @if($medicines->hasPages())
  <div class="flex justify-between items-center mt-6">
    <p class="text-sm text-[#5F5E5A]">
      Menampilkan {{ $medicines->firstItem() }}-{{ $medicines->lastItem() }} dari {{ $medicines->total() }} obat
    </p>
    <div class="flex gap-2">
      {{ $medicines->links() }}
    </div>
  </div>
  @endif
</div>
@endsection
