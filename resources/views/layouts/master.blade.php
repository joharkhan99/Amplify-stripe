<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>Amplify</title>


  @include('partials.styles')
</head>

<body>

  <main>
    <!-- @include('partials.header') -->
    @yield('content')
  </main>

  @include('partials.footer')
  @include('partials.scripts')

</body>

</html>