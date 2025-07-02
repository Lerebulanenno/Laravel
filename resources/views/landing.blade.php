<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Balimart - Home</title>

    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Link ke CSS eksternal -->
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
</head>
<body>

    <header class="navbar">
        <div class="logo">BALIM<span><i class="fa-solid fa-bag-shopping"></i></span>RT</div>

        <!-- Search bar baru -->
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

    <section class="hero">
        <div class="hero-text">
            <h1>Dukung UMKM Bali</h1>
            <h1>Hidupkan Budaya Lewat Belanja</h1>
            <a href="{{ route('produk') }}" class="cta">Mulai Belanja →</a>
        </div>
    </section>

</body>
</html>
