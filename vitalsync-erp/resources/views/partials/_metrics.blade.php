<div class="grid grid-cols-4 gap-3.5 mb-6">

  {{-- Total Pasien --}}
  <div class="bg-white border border-[#E8E7E2] rounded-xl p-4 relative overflow-hidden">
    <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#1D9E75]"></div>
    <div class="absolute top-3.5 right-4 w-9 h-9 rounded-lg bg-[#E1F5EE] flex items-center justify-center text-[#0F6E56]">
      <svg class="w-[18px] h-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
    </div>
    <div class="text-[11px] text-[#888780] uppercase tracking-[0.8px] font-mono-custom mb-2">Total Pasien Hari Ini</div>
    <div class="text-[28px] font-semibold text-[#2C2C2A] leading-none mb-1.5 tracking-tight">247</div>
    <div class="flex items-center gap-1 text-xs text-[#5F5E5A]">
      <span class="inline-flex items-center gap-1 text-[11px] font-mono-custom px-2 py-0.5 rounded-full bg-[#E1F5EE] text-[#0F6E56]">
        <span class="w-[5px] h-[5px] rounded-full bg-current"></span>+18 dari kemarin
      </span>
    </div>
  </div>

  {{-- Ketersediaan Bed --}}
  <div class="bg-white border border-[#E8E7E2] rounded-xl p-4 relative overflow-hidden">
    <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#378ADD]"></div>
    <div class="absolute top-3.5 right-4 w-9 h-9 rounded-lg bg-[#E6F1FB] flex items-center justify-center text-[#185FA5]">
      <svg class="w-[18px] h-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
    </div>
    <div class="text-[11px] text-[#888780] uppercase tracking-[0.8px] font-mono-custom mb-2">Ketersediaan Bed</div>
    <div class="text-[28px] font-semibold text-[#2C2C2A] leading-none mb-1.5 tracking-tight">14<span class="text-base text-[#888780]">/50</span></div>
    <div class="flex gap-0.5 flex-wrap mt-2" id="bedBar"></div>
  </div>

  {{-- Dokter On-Duty --}}
  <div class="bg-white border border-[#E8E7E2] rounded-xl p-4 relative overflow-hidden">
    <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#EF9F27]"></div>
    <div class="absolute top-3.5 right-4 w-9 h-9 rounded-lg bg-[#FAEEDA] flex items-center justify-center text-[#BA7517]">
      <svg class="w-[18px] h-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
    </div>
    <div class="text-[11px] text-[#888780] uppercase tracking-[0.8px] font-mono-custom mb-2">Dokter On-Duty</div>
    <div class="text-[28px] font-semibold text-[#2C2C2A] leading-none mb-1.5 tracking-tight">9</div>
    <div class="flex items-center gap-1.5 text-xs">
      <span class="inline-flex items-center gap-1 text-[11px] font-mono-custom px-2 py-0.5 rounded-full bg-[#E1F5EE] text-[#0F6E56]"><span class="w-[5px] h-[5px] rounded-full bg-current"></span>7 aktif</span>
      <span class="inline-flex items-center gap-1 text-[11px] font-mono-custom px-2 py-0.5 rounded-full bg-[#FAEEDA] text-[#BA7517]"><span class="w-[5px] h-[5px] rounded-full bg-current"></span>2 istirahat</span>
    </div>
  </div>

  {{-- Status Farmasi --}}
  <div class="bg-white border border-[#E8E7E2] rounded-xl p-4 relative overflow-hidden">
    <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#E24B4A]"></div>
    <div class="absolute top-3.5 right-4 w-9 h-9 rounded-lg bg-[#FCEBEB] flex items-center justify-center text-[#E24B4A]">
      <svg class="w-[18px] h-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
    </div>
    <div class="text-[11px] text-[#888780] uppercase tracking-[0.8px] font-mono-custom mb-2">Status Farmasi</div>
    <div class="text-[28px] font-semibold text-[#2C2C2A] leading-none mb-1.5 tracking-tight">3</div>
    <div class="flex items-center gap-1 text-xs">
      <span class="inline-flex items-center gap-1 text-[11px] font-mono-custom px-2 py-0.5 rounded-full bg-[#FCEBEB] text-[#E24B4A]"><span class="w-[5px] h-[5px] rounded-full bg-current"></span>obat stok kritis</span>
    </div>
  </div>

</div>
