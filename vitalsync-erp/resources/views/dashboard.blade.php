@extends('layouts.app')

@section('content')

  @include('partials._quick_actions')
  @include('partials._metrics')

  {{-- Main Grid: Queue + Right Column --}}
  <div class="grid grid-cols-[1fr_380px] gap-5 mb-6">
    @include('partials._queue')
    <div class="flex flex-col gap-5">
      @include('partials._doctors')
      @include('partials._pharmacy')
    </div>
  </div>

  @include('partials._charts')

  {{-- Bottom Grid: Activity + Memo --}}
  <div class="grid grid-cols-2 gap-5">
    @include('partials._activity')
    @include('partials._memo')
  </div>

@endsection

@push('scripts')
<script>
// Bed bar
const bedBar = document.getElementById('bedBar');
for (let i = 0; i < 50; i++) {
  const d = document.createElement('div');
  d.className = 'w-2.5 h-2.5 rounded-sm ' + (i < 36 ? 'bg-[#378ADD]' : 'bg-[#9FE1CB]');
  bedBar.appendChild(d);
}

// Visit chart
new Chart(document.getElementById('visitChart').getContext('2d'), {
  type: 'line',
  data: {
    labels: ['29 Mar','30 Mar','31 Mar','1 Apr','2 Apr','3 Apr','4 Apr'],
    datasets: [
      { label:'Rawat Jalan', data:[198,215,187,230,224,209,247], borderColor:'#1D9E75', backgroundColor:'rgba(29,158,117,0.08)', borderWidth:2, tension:0.4, fill:true, pointBackgroundColor:'#1D9E75', pointRadius:3, pointHoverRadius:5 },
      { label:'Rawat Inap', data:[34,36,33,38,37,35,36], borderColor:'#378ADD', backgroundColor:'rgba(55,138,221,0.07)', borderWidth:2, tension:0.4, fill:true, pointBackgroundColor:'#378ADD', pointRadius:3, pointHoverRadius:5 }
    ]
  },
  options: { responsive:true, maintainAspectRatio:false, plugins:{ legend:{display:false}, tooltip:{mode:'index',intersect:false} }, scales:{ x:{grid:{color:'rgba(0,0,0,0.04)'}, ticks:{font:{size:11},color:'#888780',maxRotation:0}}, y:{grid:{color:'rgba(0,0,0,0.04)'}, ticks:{font:{size:11},color:'#888780'}, beginAtZero:false} } }
});

// Diag chart
const diagData = [
  {label:'Hipertensi',value:87,color:'#E24B4A'},
  {label:'ISPA / Flu',value:64,color:'#378ADD'},
  {label:'Diabetes',value:52,color:'#EF9F27'},
  {label:'Gastritis',value:38,color:'#1D9E75'},
  {label:'Lainnya',value:45,color:'#888780'},
];
const total = diagData.reduce((a,b) => a+b.value, 0);
new Chart(document.getElementById('diagChart').getContext('2d'), {
  type:'doughnut',
  data:{ labels:diagData.map(d=>d.label), datasets:[{ data:diagData.map(d=>d.value), backgroundColor:diagData.map(d=>d.color), borderWidth:2, borderColor:'#ffffff', hoverOffset:4 }] },
  options:{ responsive:true, maintainAspectRatio:false, cutout:'68%', plugins:{ legend:{display:false}, tooltip:{callbacks:{label:(ctx)=>` ${ctx.label}: ${ctx.raw} kasus`}} } }
});
const legend = document.getElementById('diagLegend');
diagData.forEach(d => {
  const pct = Math.round(d.value/total*100);
  legend.innerHTML += `<div style="display:flex;align-items:center;gap:8px;"><span style="width:10px;height:10px;border-radius:2px;background:${d.color};flex-shrink:0;display:inline-block;"></span><span style="font-size:12px;color:#5F5E5A;flex:1;">${d.label}</span><span style="font-size:12px;font-weight:500;color:#2C2C2A;font-family:'DM Mono',monospace;">${pct}%</span></div>`;
});
</script>
@endpush
