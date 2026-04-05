<aside class="w-[220px] bg-[#2C2C2A] text-[#D3D1C7] flex flex-col fixed top-0 left-0 bottom-0 z-50 overflow-y-auto">

  {{-- Logo --}}
  <div class="px-5 py-5 border-b border-white/[0.08]">
    <div class="flex items-center gap-2.5">
      <div class="w-8 h-8 bg-[#1D9E75] rounded-lg flex items-center justify-center flex-shrink-0">
        <svg class="w-[18px] h-[18px] fill-white" viewBox="0 0 24 24"><path d="M12 2a1 1 0 0 1 1 1v4h4a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V3a1 1 0 0 1 1-1z"/><path d="M4 14a1 1 0 0 1 1-1h14a1 1 0 0 1 0 2H5a1 1 0 0 1-1-1zM3 19a1 1 0 0 1 1-1h16a1 1 0 0 1 0 2H4a1 1 0 0 1-1-1z" opacity="0.5"/></svg>
      </div>
      <div>
        <div class="text-base font-semibold text-white tracking-tight">VitalSync</div>
        <div class="text-[10px] text-[#888780] tracking-widest uppercase font-mono-custom mt-0.5">Medical ERP</div>
      </div>
    </div>
  </div>

  {{-- Utama --}}
  <div class="px-3 pt-4 pb-2">
    <div class="text-[10px] tracking-[1.2px] uppercase text-[#888780] font-mono-custom px-2 mb-1.5">Utama</div>
    <a href="{{ route('dashboard') }}" class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg text-[13.5px] {{ request()->routeIs('dashboard') ? 'bg-[#1D9E75] text-white' : 'text-[#B4B2A9] hover:bg-white/[0.07] hover:text-white' }} transition-all mb-px">
      <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
      Dashboard
    </a>
    <a href="{{ route('patients.index') }}" class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg text-[13.5px] {{ request()->routeIs('patients.*') ? 'bg-[#1D9E75] text-white' : 'text-[#B4B2A9] hover:bg-white/[0.07] hover:text-white' }} transition-all mb-px">
      <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
      Pasien
      <span class="ml-auto bg-[#E24B4A] text-white text-[10px] font-mono-custom px-1.5 py-px rounded-full font-medium">247</span>
    </a>
    <a href="{{ route('medical-records.index') }}" class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg text-[13.5px] {{ request()->routeIs('medical-records.*') ? 'bg-[#1D9E75] text-white' : 'text-[#B4B2A9] hover:bg-white/[0.07] hover:text-white' }} transition-all mb-px">
      <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
      Rekam Medis
    </a>
    <a href="{{ route('queue.index') }}" class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg text-[13.5px] {{ request()->routeIs('queue.*') ? 'bg-[#1D9E75] text-white' : 'text-[#B4B2A9] hover:bg-white/[0.07] hover:text-white' }} transition-all mb-px">
      <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      Jadwal & Antrian
    </a>
  </div>

  {{-- Departemen --}}
  <div class="px-3 pt-2 pb-2">
    <div class="text-[10px] tracking-[1.2px] uppercase text-[#888780] font-mono-custom px-2 mb-1.5">Departemen</div>
    <a href="#" class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg text-[13.5px] text-[#B4B2A9] hover:bg-white/[0.07] hover:text-white transition-all mb-px">
      <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
      UGD / Triage
      <span class="ml-auto bg-[#E24B4A] text-white text-[10px] font-mono-custom px-1.5 py-px rounded-full font-medium">3</span>
    </a>
    <a href="#" class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg text-[13.5px] text-[#B4B2A9] hover:bg-white/[0.07] hover:text-white transition-all mb-px">
      <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32"/></svg>
      Poliklinik
    </a>
    <a href="{{ route('beds.index') }}" class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg text-[13.5px] {{ request()->routeIs('beds.*') ? 'bg-[#1D9E75] text-white' : 'text-[#B4B2A9] hover:bg-white/[0.07] hover:text-white' }} transition-all mb-px">
      <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3h18M3 9h18M3 15h18M3 21h18"/><path d="M12 3v18" opacity="0.4"/></svg>
      Rawat Inap
    </a>
    <a href="{{ route('laboratory.index') }}" class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg text-[13.5px] {{ request()->routeIs('laboratory.*') ? 'bg-[#1D9E75] text-white' : 'text-[#B4B2A9] hover:bg-white/[0.07] hover:text-white' }} transition-all mb-px">
      <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2v-4M9 21H5a2 2 0 0 1-2-2v-4m0 0h18"/></svg>
      Laboratorium
    </a>
    <a href="{{ route('pharmacy.index') }}" class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg text-[13.5px] {{ request()->routeIs('pharmacy.*') ? 'bg-[#1D9E75] text-white' : 'text-[#B4B2A9] hover:bg-white/[0.07] hover:text-white' }} transition-all mb-px">
      <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
      Farmasi
    </a>
  </div>

  {{-- Manajemen --}}
  <div class="px-3 pt-2 pb-2">
    <div class="text-[10px] tracking-[1.2px] uppercase text-[#888780] font-mono-custom px-2 mb-1.5">Manajemen</div>
    <a href="{{ route('billing.index') }}" class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg text-[13.5px] {{ request()->routeIs('billing.*') ? 'bg-[#1D9E75] text-white' : 'text-[#B4B2A9] hover:bg-white/[0.07] hover:text-white' }} transition-all mb-px">
      <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
      Keuangan & Billing
    </a>
    <a href="{{ route('pharmacy.inventory') }}" class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg text-[13.5px] text-[#B4B2A9] hover:bg-white/[0.07] hover:text-white transition-all mb-px">
      <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/><line x1="12" y1="12" x2="12" y2="12" stroke-linecap="round" stroke-width="3"/></svg>
      Inventaris
    </a>
    <a href="{{ route('reports.index') }}" class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg text-[13.5px] {{ request()->routeIs('reports.*') ? 'bg-[#1D9E75] text-white' : 'text-[#B4B2A9] hover:bg-white/[0.07] hover:text-white' }} transition-all mb-px">
      <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M18 17V9l-5 5-3-3-4 4"/></svg>
      Laporan
    </a>
    <a href="{{ route('settings.index') }}" class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg text-[13.5px] {{ request()->routeIs('settings.*') ? 'bg-[#1D9E75] text-white' : 'text-[#B4B2A9] hover:bg-white/[0.07] hover:text-white' }} transition-all mb-px">
      <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93A10 10 0 0 0 4.93 19.07m14.14 0A10 10 0 0 0 4.93 4.93"/></svg>
      Pengaturan Sistem
    </a>
  </div>

  {{-- User --}}
  <div class="mt-auto px-3 py-4 border-t border-white/[0.08]">
    <div class="flex items-center gap-2.5 px-2.5 py-2 rounded-lg cursor-pointer hover:bg-white/[0.07] transition-all">
      <div class="w-8 h-8 rounded-full bg-[#1D9E75] flex items-center justify-center text-xs font-semibold text-white flex-shrink-0">DR</div>
      <div class="flex-1 min-w-0">
        <div class="text-[13px] text-white font-medium truncate">Dr. Riana Kusuma</div>
        <div class="text-[11px] text-[#888780] font-mono-custom">SUPERADMIN</div>
      </div>
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#888780" stroke-width="2"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
    </div>
  </div>

</aside>
