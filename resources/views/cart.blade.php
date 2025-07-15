<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Jaro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <title>Keranjang Belanja</title>
</head>
<body>

    <header class="navbar">
        <div class="logo">BALIM<span><i class="fa-solid fa-bag-shopping"></i></span>RT</div>
        <div class="search-container">
            <input type="text" placeholder="Cari produk...">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="icon-group">
            <span><i class="fa-solid fa-cart-shopping"></i></span>
            <span><i class="fa-solid fa-user"></i></span>
            <span><i class="fa-solid fa-heart"></i></span>
        </div>
    </header>

    <div class="cart-header">
        <div class="cart-header-content">
            <i class="fas fa-shopping-bag"></i>
            <div class="divider"></div>
            <span>Daftar Belanja</span>
        </div>
    </div>

   <div class="empty-cart-content">
        <div class="cart-image-wrapper">
        <img src="/images/cart.png" alt="Keranjang Kosong">
    </div>
        <p>Ups! Keranjangmu masih kosong nih.</p>
        <button class="shop-now-btn">Belanja Sekarang</button>
</div>

</body>
</html>
