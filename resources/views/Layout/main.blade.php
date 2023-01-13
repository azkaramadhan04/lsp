<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="le=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
  </head>
  <body class="bg-warning-70">
    {{----------------- NAVBAR -----------------}}
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" href="/Home">
                <img src="{{ asset("images/logo/azka.jpeg") }}" width="40" height="40" class="me-2">
                <strong><b>PT. AZKA JAYA<b></strong>
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle Navigation">
          <span class="navbar-toggle-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active text-light fs-5" aria-current="page" href="/Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light fs-5" href="/Jabatan/index">Jabatan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light fs-5" href="/Karyawan/index">Karyawan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light fs-5" href="/Gaji/index">Gaji</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light fs-5" href="/Laporan">Laporan</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  {{----------------- CONTENT -----------------}}
  <div class="div container">
    <div class="row m-4">
      <div class="col">
            @yield('content')
      </div>
    </div>
  </div>

  {{----------------- CONTENT -----------------}}
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
  </body>   
</html>