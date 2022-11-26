<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }} | uTask</title>
  @vite('resources/css/app.css')
</head>

<body data-theme="bumblebee" class="min-h-screen bg-base-300">
  <x-navbar></x-navbar>

  {{ $slot }}

  @vite('resources/js/app.js')
</body>

</html>
