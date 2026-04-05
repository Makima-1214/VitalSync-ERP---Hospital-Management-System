<div class="bg-white border border-[#E8E7E2] rounded-xl overflow-hidden">
  <div class="flex items-center justify-between px-5 py-4 border-b border-[#E8E7E2]">
    <div class="flex items-center gap-2 text-sm font-semibold text-[#2C2C2A]">
      <svg class="w-4 h-4 text-[#1D9E75]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
      Stok Kritis Farmasi
    </div>
    <span class="inline-flex items-center gap-1 text-[11px] font-mono-custom px-2 py-0.5 rounded-full bg-[#FCEBEB] text-[#E24B4A]">
      <span class="w-[5px] h-[5px] rounded-full bg-current"></span>3 item
    </span>
  </div>
  @foreach([
    ['Amoxicillin 500mg','Sisa: 48 tablet · Min: 200',24,'bg-[#E24B4A]','text-[#E24B4A]'],
    ['NaCl 0.9% 500ml','Sisa: 12 botol · Min: 50',17,'bg-[#E24B4A]','text-[#E24B4A]'],
    ['Metformin 500mg','Sisa: 110 tablet · Min: 300',37,'bg-[#EF9F27]','text-[#BA7517]'],
  ] as [$name, $detail, $pct, $bar, $text])
  <div class="flex items-center justify-between px-5 py-2.5 border-b border-[#F0EFE9] last:border-0">
    <div>
      <div class="text-[13px] font-medium text-[#2C2C2A]">{{ $name }}</div>
      <div class="text-[11px] text-[#888780] font-mono-custom">{{ $detail }}</div>
    </div>
    <div class="w-20">
      <div class="text-[11px] font-mono-custom text-right mb-1 {{ $text }}">{{ $pct }}%</div>
      <div class="h-1 bg-[#E8E7E2] rounded-full overflow-hidden">
        <div class="h-full rounded-full {{ $bar }}" style="width: {{ $pct }}%"></div>
      </div>
    </div>
  </div>
  @endforeach
</div>
