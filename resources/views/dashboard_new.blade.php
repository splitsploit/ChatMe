<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Index</title>
  <!-- Load Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <!-- Load Custom CSS (optional) -->
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      font-family: 'Verdana';
    }

    .container {
      text-align: center;
    }

    .btn-custom {
      background-color: #007bff;
      color: #fff;
      font-weight: bold;
    }

    .blink-bg {
      animation: blinker 1s linear infinite;
      background-color: yellow;
      color: #000;
      padding: 10px;
    }

    @keyframes blinker {
      50% {
        background-color: transparent;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h5 class="mb-3">Selamat Datang, <span style="color: green">{{ auth()->user()->name }}</span></h5>
    <h1>Anda berhasil login</h1>
    <p>Tekan tombol di bawah untuk memulai chat.</p>
    <p class="blink-bg">Untuk saat ini, hanya bisa chat bersama orang lain yang sedang online saja.</p>
    <div class="d-flex justify-content-between">
      <div class="flex-grow-1">
        <a href="{{ route('chatme') }}" class="btn btn-lg btn-custom">Mulai Chat</a>
      </div>
      <div class="flex-grow-1">
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="btn btn-lg btn-danger" type="submit">Logout</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Load Bootstrap JS (optional, for certain features like dropdowns) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
