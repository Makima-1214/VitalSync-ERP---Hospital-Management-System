<div class="bg-white border border-[#E8E7E2] rounded-xl overflow-hidden">
  <div class="flex items-center justify-between px-5 py-4 border-b border-[#E8E7E2]">
    <div class="flex items-center gap-2 text-sm font-semibold text-[#2C2C2A]">
      <svg class="w-4 h-4 text-[#1D9E75]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6" stroke-linecap="round" stroke-width="3"/><line x1="3" y1="12" x2="3.01" y2="12" stroke-linecap="round" stroke-width="3"/><line x1="3" y1="18" x2="3.01" y2="18" stroke-linecap="round" stroke-width="3"/></svg>
      Monitoring Antrean
    </div>
    <div class="flex items-center gap-2.5">
      <span class="inline-flex items-center gap-1.5 text-[11px] font-mono-custom text-[#0F6E56] bg-[#E1F5EE] px-2 py-0.5 rounded-full">
        <span class="w-1.5 h-1.5 rounded-full bg-[#1D9E75] live-dot"></span>LIVE
      </span>
      <span class="text-xs text-[#1D9E75] cursor-pointer font-medium">Lihat Semua</span>
    </div>
  </div>
  <div class="max-h-80 overflow-y-auto scrollbar-thin">
    <table class="w-full border-collapse">
      <thead>
        <tr class="border-b border-[#E8E7E2]">
          <th class="px-5 py-2.5 text-left text-[11px] uppercase tracking-[0.8px] text-[#888780] font-mono-custom font-medium bg-[#F1EFE8]">No</th>
          <th class="px-5 py-2.5 text-left text-[11px] uppercase tracking-[0.8px] text-[#888780] font-mono-custom font-medium bg-[#F1EFE8]">Pasien</th>
          <th class="px-5 py-2.5 text-left text-[11px] uppercase tracking-[0.8px] text-[#888780] font-mono-custom font-medium bg-[#F1EFE8]">Poli / Unit</th>
          <th class="px-5 py-2.5 text-left text-[11px] uppercase tracking-[0.8px] text-[#888780] font-mono-custom font-medium bg-[#F1EFE8]">Triage</th>
          <th class="px-5 py-2.5 text-left text-[11px] uppercase tracking-[0.8px] text-[#888780] font-mono-custom font-medium bg-[#F1EFE8]">Waktu</th>
          <th class="px-5 py-2.5 text-left text-[11px] uppercase tracking-[0.8px] text-[#888780] font-mono-custom font-medium bg-[#F1EFE8]">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr class="triage-flash">
          <td class="px-5 py-2.5 text-[13px] font-mono-custom font-medium text-[#5F5E5A] border-b border-[#FDE8E8]">—</td>
          <td class="px-5 py-2.5 border-b border-[#FDE8E8]">
            <div class="flex items-center gap-1.5">
              <span class="text-[9px] font-mono-custom bg-[#E24B4A] text-white px-1.5 py-0.5 rounded font-semibold tracking-[0.5px]">UGD</span>
              <div>
                <div class="text-[13px] font-medium text-[#2C2C2A]">Budi Santoso</div>
                <div class="text-[11px] text-[#888780] font-mono-custom">RM-2024-08821</div>
              </div>
            </div>
          </td>
          <td class="px-5 py-2.5 text-[13px] font-medium text-[#E24B4A] border-b border-[#FDE8E8]">Unit Gawat Darurat</td>
          <td class="px-5 py-2.5 border-b border-[#FDE8E8]"><span class="inline-flex items-center gap-1 text-[11px] font-mono-custom px-2 py-0.5 rounded-md font-medium bg-[#E24B4A] text-white">Merah P1</span></td>
          <td class="px-5 py-2.5 text-xs font-mono-custom text-[#5F5E5A] border-b border-[#FDE8E8]">08:14</td>
          <td class="px-5 py-2.5 border-b border-[#FDE8E8]"><span class="inline-flex items-center gap-1 text-[11px] font-mono-custom px-2 py-0.5 rounded-md font-medium bg-[#E6F1FB] text-[#185FA5]">Ditangani</span></td>
        </tr>
        @foreach([
          ['A-001','Siti Rahayu','RM-2024-09134','Poli Umum','08:31','Diperiksa','bg-[#E6F1FB] text-[#185FA5]'],
          ['B-002','Agus Wirawan','RM-2024-07762','Poli Jantung','08:45','Menunggu','bg-[#FAEEDA] text-[#BA7517]'],
          ['C-001','Dewi Lestari','RM-2024-11203','Poli Anak','08:52','Menunggu','bg-[#FAEEDA] text-[#BA7517]'],
          ['A-002','Hendra Gunawan','RM-2024-06548','Poli Umum','09:05','Menunggu','bg-[#FAEEDA] text-[#BA7517]'],
          ['D-001','Ratna Sari','RM-2024-13041','Poli Kulit','09:10','Menunggu','bg-[#FAEEDA] text-[#BA7517]'],
          ['B-003','Eko Prasetyo','RM-2024-09980','Poli Jantung','09:18','Selesai','bg-[#E1F5EE] text-[#0F6E56]'],
        ] as [$no, $name, $rm, $poli, $time, $status, $badge])
        <tr class="border-b border-[#F0EFE9] last:border-0">
          <td class="px-5 py-2.5 text-[13px] font-mono-custom font-medium text-[#5F5E5A]">{{ $no }}</td>
          <td class="px-5 py-2.5">
            <div class="text-[13px] font-medium text-[#2C2C2A]">{{ $name }}</div>
            <div class="text-[11px] text-[#888780] font-mono-custom">{{ $rm }}</div>
          </td>
          <td class="px-5 py-2.5 text-[13px] text-[#2C2C2A]">{{ $poli }}</td>
          <td class="px-5 py-2.5 text-xs font-mono-custom text-[#888780]">—</td>
          <td class="px-5 py-2.5 text-xs font-mono-custom text-[#5F5E5A]">{{ $time }}</td>
          <td class="px-5 py-2.5"><span class="inline-flex items-center gap-1 text-[11px] font-mono-custom px-2 py-0.5 rounded-md font-medium {{ $badge }}">{{ $status }}</span></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
