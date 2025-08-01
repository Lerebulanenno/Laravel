<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Balimart</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Jaro&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>


        <!-- Navbar -->
    <header class="navbar">
        <div class="logo">BALIM<span><i class="fa-solid fa-bag-shopping"></i></span>RT</div>

        <div class="search-container">
            <input type="text" placeholder="Cari produk...">
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>

        <div class="icon-group">
            <span><i class="fa-solid fa-cart-shopping"></i></span>
            <span><i class="fa-solid fa-user"></i></span>
            <span><i class="fa-solid fa-globe"></i></span>
        </div>
    </header>

    <div class="login-wrapper">
    <!-- Kiri -->
    <div class="login-left">
      <h2>Temukan Pilihan Terbaikmu!</h2>
      <img src="{{ asset('images/login.png') }}" alt="Ilustrasi Belanja" />
    </div>

    <!-- Kanan -->
    <div class="login-right">
      <div class="login-card">
        <h2>Log in</h2>
        <form method="POST" action="{{ route('login') }}">
          @csrf

          <input type="email" name="email" placeholder="Nama" required />
          <input type="password" name="password" placeholder="Password" required />

          <div class="login-links">
            <a href="{{ route('password.request') }}">Lupa Password</a>
          </div>

          <button type="submit">Masuk</button>

          <p class="register-text">Baru diBalimart? <a href="{{ route('register') }}">Daftar</a></p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
