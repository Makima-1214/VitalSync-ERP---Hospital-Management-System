<div class="bg-white border border-[#E8E7E2] rounded-xl overflow-hidden">
  <div class="flex items-center justify-between px-5 py-4 border-b border-[#E8E7E2]">
    <div class="flex items-center gap-2 text-sm font-semibold text-[#2C2C2A]">
      <svg class="w-4 h-4 text-[#1D9E75]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      Log Aktivitas Terbaru
    </div>
    <span class="inline-flex items-center gap-1.5 text-[11px] font-mono-custom text-[#0F6E56] bg-[#E1F5EE] px-2 py-0.5 rounded-full">
      <span class="w-1.5 h-1.5 rounded-full bg-[#1D9E75] live-dot"></span>LIVE
    </span>
  </div>
  @foreach([
    ['bg-[#1D9E75]','Hasil Lab <strong>Budi Santoso</strong> (RM-08821) telah keluar — Darah Lengkap','09:22 · Lab Klinik'],
    ['bg-[#378ADD]','Resep <strong>Siti Rahayu</strong> dikirim ke Farmasi — 3 item obat','09:18 · Poli Umum'],
    ['bg-[#EF9F27]','Stok <strong>Amoxicillin</strong> di bawah batas minimum — segera lakukan pengadaan','09:05 · Sistem Farmasi'],
    ['bg-[#534AB7]','Pasien baru terdaftar — <strong>Dewi Lestari</strong>, Poli Anak, Reg #C-001','08:49 · Pendaftaran'],
    ['bg-[#E24B4A]','Triage Merah P1 — <strong>Budi Santoso</strong> masuk UGD, penanganan segera','08:14 · Unit Gawat Darurat'],
  ] as [$dot, $text, $time])
  <div class="flex gap-3 px-5 py-3 border-b border-[#F0EFE9] last:border-0">
    <div class="flex flex-col items-center pt-1">
      <div class="w-2 h-2 rounded-full flex-shrink-0 {{ $dot }}"></div>
      <div class="w-px flex-1 bg-[#E8E7E2] mt-1"></div>
    </div>
    <div class="pb-1">
      <div class="text-[13px] text-[#2C2C2A] leading-snug">{!! $text !!}</div>
      <div class="text-[11px] text-[#888780] font-mono-custom mt-0.5">{{ $time }}</div>
    </div>
  </div>
  @endforeach
</div>
