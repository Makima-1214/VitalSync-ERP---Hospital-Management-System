<div class="bg-white border border-[#E8E7E2] rounded-xl overflow-hidden">
  <div class="flex items-center justify-between px-5 py-4 border-b border-[#E8E7E2]">
    <div class="flex items-center gap-2 text-sm font-semibold text-[#2C2C2A]">
      <svg class="w-4 h-4 text-[#1D9E75]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
      Dokter On-Duty
    </div>
    <span class="text-xs text-[#1D9E75] cursor-pointer font-medium">Lihat Semua</span>
  </div>
  @foreach([
    ['AH','dr. Ahmad Hakim, Sp.PD','POLI PENYAKIT DALAM','bg-[#E1F5EE] text-[#0F6E56]',true],
    ['MS','dr. Maya Sari, Sp.JP','POLI JANTUNG','bg-[#E6F1FB] text-[#185FA5]',true],
    ['BW','dr. Bambang W., Sp.A','POLI ANAK','bg-[#EEEDFE] text-[#534AB7]',true],
    ['FN','dr. Fitriani N., Sp.KK','POLI KULIT','bg-[#FAEEDA] text-[#BA7517]',false],
  ] as [$init, $name, $spec, $avatar, $online])
  <div class="flex items-center gap-3 px-5 py-3 border-b border-[#F0EFE9] last:border-0">
    <div class="w-9 h-9 rounded-full flex items-center justify-center text-xs font-semibold flex-shrink-0 {{ $avatar }}">{{ $init }}</div>
    <div class="flex-1">
      <div class="text-[13px] font-medium text-[#2C2C2A]">{{ $name }}</div>
      <div class="text-[11px] text-[#888780] font-mono-custom">{{ $spec }}</div>
    </div>
    @if($online)
      <div class="w-2 h-2 rounded-full bg-[#1D9E75] flex-shrink-0 shadow-[0_0_0_2px_#E1F5EE]"></div>
    @else
      <div class="w-2 h-2 rounded-full bg-[#EF9F27] flex-shrink-0"></div>
    @endif
  </div>
  @endforeach
</div>
