<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampilan Antrian - VitalSync</title>
  @vite(['resources/css/app.css'])
</head>
<body class="bg-[#F5F4EF]">
  <div class="min-h-screen p-8">
    <!-- Header -->
    <div class="bg-[#1D9E75] text-white rounded-2xl p-8 mb-8 text-center">
      <h1 class="text-5xl font-bold mb-2">ANTRIAN POLIKLINIK</h1>
      <p class="text-2xl opacity-90">RS VitalSync Medical Center</p>
      <p class="text-xl mt-4" id="currentTime"></p>
    </div>

    <!-- Queue Display Grid -->
    <div class="grid grid-cols-2 gap-8">
      <!-- Poli Umum -->
      <div class="bg-white rounded-2xl p-8 shadow-lg">
        <div class="flex items-center justify-between mb-6 pb-4 border-b-2 border-[#378ADD]">
          <h2 class="text-3xl font-bold text-[#2C2C2A]">POLI UMUM</h2>
          <div class="text-right">
            <p class="text-sm text-[#5F5E5A]">dr. Sarah Wijaya, Sp.PD</p>
            <p class="text-xs text-[#5F5E5A]">Ruang 101</p>
          </div>
        </div>
        
        <div class="text-center mb-8">
          <p class="text-lg text-[#5F5E5A] mb-2">Sedang Dilayani</p>
          <div class="bg-[#378ADD] text-white rounded-xl p-8">
            <p class="text-7xl font-bold font-mono">A-012</p>
          </div>
        </div>

        <div class="grid grid-cols-3 gap-4">
          <div class="text-center">
            <p class="text-sm text-[#5F5E5A] mb-2">Antrian Berikutnya</p>
            <div class="bg-[#EF9F27]/10 border-2 border-[#EF9F27] rounded-lg p-4">
              <p class="text-3xl font-bold font-mono text-[#EF9F27]">A-013</p>
            </div>
          </div>
          <div class="text-center">
            <p class="text-sm text-[#5F5E5A] mb-2">&nbsp;</p>
            <div class="bg-gray-100 rounded-lg p-4">
              <p class="text-3xl font-bold font-mono text-[#888780]">A-014</p>
            </div>
          </div>
          <div class="text-center">
            <p class="text-sm text-[#5F5E5A] mb-2">&nbsp;</p>
            <div class="bg-gray-100 rounded-lg p-4">
              <p class="text-3xl font-bold font-mono text-[#888780]">A-015</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Poli Anak -->
      <div class="bg-white rounded-2xl p-8 shadow-lg">
        <div class="flex items-center justify-between mb-6 pb-4 border-b-2 border-[#1D9E75]">
          <h2 class="text-3xl font-bold text-[#2C2C2A]">POLI ANAK</h2>
          <div class="text-right">
            <p class="text-sm text-[#5F5E5A]">dr. Michael Chen, Sp.A</p>
            <p class="text-xs text-[#5F5E5A]">Ruang 102</p>
          </div>
        </div>
        
        <div class="text-center mb-8">
          <p class="text-lg text-[#5F5E5A] mb-2">Sedang Dilayani</p>
          <div class="bg-[#1D9E75] text-white rounded-xl p-8">
            <p class="text-7xl font-bold font-mono">B-008</p>
          </div>
        </div>

        <div class="grid grid-cols-3 gap-4">
          <div class="text-center">
            <p class="text-sm text-[#5F5E5A] mb-2">Antrian Berikutnya</p>
            <div class="bg-[#EF9F27]/10 border-2 border-[#EF9F27] rounded-lg p-4">
              <p class="text-3xl font-bold font-mono text-[#EF9F27]">B-009</p>
            </div>
          </div>
          <div class="text-center">
            <p class="text-sm text-[#5F5E5A] mb-2">&nbsp;</p>
            <div class="bg-gray-100 rounded-lg p-4">
              <p class="text-3xl font-bold font-mono text-[#888780]">B-010</p>
            </div>
          </div>
          <div class="text-center">
            <p class="text-sm text-[#5F5E5A] mb-2">&nbsp;</p>
            <div class="bg-gray-100 rounded-lg p-4">
              <p class="text-3xl font-bold font-mono text-[#888780]">B-011</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function updateTime() {
      const now = new Date();
      const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
      document.getElementById('currentTime').textContent = now.toLocaleDateString('id-ID', options);
    }
    updateTime();
    setInterval(updateTime, 1000);
  </script>
</body>
</html>
