@extends('layouts.app')

@section('content')
<div class="max-w-4xl">
  <div class="flex items-center gap-4 mb-6">
    <a href="{{ route('patients.index') }}" class="text-[#5F5E5A] hover:text-[#2C2C2A]">← Kembali</a>
    <h1 class="text-2xl font-semibold text-[#2C2C2A]">Tambah Pasien Baru</h1>
  </div>

  <div class="bg-white rounded-xl shadow-sm p-6">
    <form method="POST" action="{{ route('patients.store') }}">
      @csrf
      <div class="grid grid-cols-2 gap-6">
        <!-- NIK -->
        <div>
          <label class="block text-sm font-medium text-[#2C2C2A] mb-2">NIK <span class="text-red-500">*</span></label>
          <input type="text" name="nik" value="{{ old('nik') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1D9E75] @error('nik') border-red-500 @enderror" placeholder="16 digit NIK" maxlength="16">
          @error('nik')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- No. Rekam Medis -->
        <div>
          <label class="block text-sm font-medium text-[#2C2C2A] mb-2">No. Rekam Medis</label>
          <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-50" value="RM-{{ date('Y') }}-AUTO" readonly>
          <p class="text-xs text-[#5F5E5A] mt-1">Otomatis di-generate sistem</p>
        </div>

        <!-- Nama Lengkap -->
        <div class="col-span-2">
          <label class="block text-sm font-medium text-[#2C2C2A] mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
          <input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1D9E75] @error('name') border-red-500 @enderror" placeholder="Nama sesuai KTP">
          @error('name')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Tanggal Lahir -->
        <div>
          <label class="block text-sm font-medium text-[#2C2C2A] mb-2">Tanggal Lahir <span class="text-red-500">*</span></label>
          <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1D9E75] @error('date_of_birth') border-red-500 @enderror">
          @error('date_of_birth')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Jenis Kelamin -->
        <div>
          <label class="block text-sm font-medium text-[#2C2C2A] mb-2">Jenis Kelamin <span class="text-red-500">*</span></label>
          <select name="gender" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1D9E75] @error('gender') border-red-500 @enderror">
            <option value="">Pilih jenis kelamin</option>
            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Laki-laki</option>
            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Perempuan</option>
          </select>
          @error('gender')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- No. Telepon -->
        <div>
          <label class="block text-sm font-medium text-[#2C2C2A] mb-2">No. Telepon</label>
          <input type="tel" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1D9E75]" placeholder="08xx-xxxx-xxxx">
        </div>

        <!-- Email -->
        <div>
          <label class="block text-sm font-medium text-[#2C2C2A] mb-2">Email</label>
          <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1D9E75]" placeholder="email@example.com">
        </div>

        <!-- Alamat -->
        <div class="col-span-2">
          <label class="block text-sm font-medium text-[#2C2C2A] mb-2">Alamat Lengkap <span class="text-red-500">*</span></label>
          <textarea name="address" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1D9E75] @error('address') border-red-500 @enderror" placeholder="Alamat sesuai KTP">{{ old('address') }}</textarea>
          @error('address')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Golongan Darah -->
        <div>
          <label class="block text-sm font-medium text-[#2C2C2A] mb-2">Golongan Darah</label>
          <select name="blood_type" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1D9E75]">
            <option value="">Pilih golongan darah</option>
            <option value="A" {{ old('blood_type') == 'A' ? 'selected' : '' }}>A</option>
            <option value="B" {{ old('blood_type') == 'B' ? 'selected' : '' }}>B</option>
            <option value="AB" {{ old('blood_type') == 'AB' ? 'selected' : '' }}>AB</option>
            <option value="O" {{ old('blood_type') == 'O' ? 'selected' : '' }}>O</option>
          </select>
        </div>

        <!-- Alergi -->
        <div>
          <label class="block text-sm font-medium text-[#2C2C2A] mb-2">Alergi</label>
          <input type="text" name="allergies" value="{{ old('allergies') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1D9E75]" placeholder="Contoh: Penisilin, Seafood">
        </div>
      </div>

      <!-- Actions -->
      <div class="flex gap-4 mt-8">
        <button type="submit" class="bg-[#1D9E75] text-white px-6 py-2 rounded-lg hover:bg-[#178a64] transition">Simpan Data Pasien</button>
        <a href="{{ route('patients.index') }}" class="bg-gray-200 text-[#2C2C2A] px-6 py-2 rounded-lg hover:bg-gray-300 transition">Batal</a>
      </div>
    </form>
  </div>
</div>
@endsection
