<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VitalSync ERP</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"></script>
</head>
<body class="bg-[#F5F4EF] text-[#2C2C2A] flex min-h-screen text-sm leading-relaxed">

  @include('partials._sidebar')

  <main class="ml-[220px] flex-1 flex flex-col">
    @include('partials._topbar')
    <div class="p-7 flex-1">
      @yield('content')
    </div>
  </main>

  @stack('scripts')
</body>
</html>
