<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FixShop</title>
  @livewireStyles

  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @yield('conntain')
    @include('page.chart')
    @livewireScriptConfig
</body>
</html>
