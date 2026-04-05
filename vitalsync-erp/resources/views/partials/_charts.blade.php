<div class="grid grid-cols-2 gap-5 mb-6">

  {{-- Line Chart --}}
  <div class="bg-white border border-[#E8E7E2] rounded-xl overflow-hidden">
    <div class="flex items-center justify-between px-5 py-4 border-b border-[#E8E7E2]">
      <div class="flex items-center gap-2 text-sm font-semibold text-[#2C2C2A]">
        <svg class="w-4 h-4 text-[#1D9E75]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
        Tren Kunjungan 7 Hari
      </div>
      <div class="flex gap-3 items-center">
        <span class="flex items-center gap-1 text-xs text-[#5F5E5A]"><span class="w-2.5 h-2.5 rounded-sm bg-[#1D9E75] inline-block"></span>Rawat Jalan</span>
        <span class="flex items-center gap-1 text-xs text-[#5F5E5A]"><span class="w-2.5 h-2.5 rounded-sm bg-[#378ADD] inline-block"></span>Rawat Inap</span>
      </div>
    </div>
    <div class="p-5">
      <div class="relative w-full h-[220px]">
        <canvas id="visitChart"></canvas>
      </div>
    </div>
  </div>

  {{-- Doughnut Chart --}}
  <div class="bg-white border border-[#E8E7E2] rounded-xl overflow-hidden">
    <div class="flex items-center justify-between px-5 py-4 border-b border-[#E8E7E2]">
      <div class="flex items-center gap-2 text-sm font-semibold text-[#2C2C2A]">
        <svg class="w-4 h-4 text-[#1D9E75]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
        Distribusi Diagnosa Minggu Ini
      </div>
    </div>
    <div class="p-5 flex gap-5 items-center">
      <div class="relative w-40 h-40 flex-shrink-0">
        <canvas id="diagChart"></canvas>
      </div>
      <div class="flex-1">
        <div id="diagLegend" class="flex flex-col gap-2"></div>
      </div>
    </div>
  </div>

</div>
