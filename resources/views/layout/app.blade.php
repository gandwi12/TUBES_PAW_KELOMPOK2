<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'My Laravel App')</title>

  {{-- Link Bootstrap CSS CDN --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    nav {
      background-color: #4CAF50;
      padding: 10px;
    }
    nav a {
      color: white;
      text-decoration: none;
      margin-right: 15px;
      font-weight: bold;
    }
    nav a:hover {
      text-decoration: underline;
    }
    .container {
      padding: 20px;
    }
  </style>
</head>
<body>

  {{-- Include Navbar jika ada --}}
  @include('layout.navbar')

  <div class="container">
    @yield('contents')
  </div>

  {{-- Optional: Bootstrap JS CDN jika nanti pakai modal/dropdown --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
