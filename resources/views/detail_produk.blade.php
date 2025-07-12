<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $detail['nama'] ?? 'Detail Produk' }} - BALIMART</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jaro&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/detail_produk.css') }}">
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

    <nav class="breadcrumb">
        <a href="#">BALIMART</a> >
        <a href="#">Pakaian</a> >
        <a href="#">Baju Wanita</a> >
        <span>Sheer ruched psychedelic crop top</span>
    </nav>

    <div class="product-card">
    <!-- Gambar dulu -->
    <div class="images-section">
        <img class="main-image" src="/images/crop.jpg" alt="Sheer ruched psychedelic crop top">
        <div class="thumbnail">
            <img src="/images/crop.jpg" alt="Thumbnail 1">
            <img src="/images/crop.jpg" alt="Thumbnail 2">
        </div>
    </div>

    <!-- Baru detail produk -->
    <div class="product-detail">
        <h2>Sheer ruched Psychedelic crop top</h2>
        <div class="rating">
            <i class="fa-solid fa-star"></i>
            5.0 | 20 Penilaian | 30 Terjual
        </div>

        <div class="price-box">
            <div class="price">Rp. 100.000</div>
            <div class="icons">
                <i class="fa-regular fa-heart"></i>
            </div>
        </div>

        <div class="product-options">
            <div class="inline-group">
            <label>Warna</label>
            <div class="button-group">
                <button class="option-button">HITAM</button>
                 <button class="option-button">PUTIH</button>
        </div>
    </div>

        <div class="inline-group">
            <label>Ukuran</label>
            <div class="button-group">
                <button class="option-button">S</button>
                <button class="option-button">M</button>
                <button class="option-button">L</button>
                <button class="option-button">XL</button>
            </div>
        </div>

        <div class="option-gorup quantity-control">
            <label>Kuantitas</label>
            <div class="quantity-selector">
                <button class="qty-btn">-</button>
                <span class="qty-display">1</span>
                <button class="qty-btn">+</button>
            </div>
            <span class="stock-status">Tersedia</span>
        </div>

    <div class="buttons-wrapper">
            <button class="buy-now-btn">Beli Sekarang</button>
            <button class="add-to-cart-btn cart-icon-button" aria-label="Tambah Keranjang">
            <i class="fas fa-shopping-cart"></i> </button>
            </div>
        </div>
    </div>
</div>

    <!-- Kartu Toko (Dipisah) -->
    <div class="store-card-wrapper">
        <div class="store-logo-name">
        <img src="/images/Ellipse 2.png" alt="Von Dutch Logo" class="store-logo">
        <span class="store-name">Von Dutch Official</span>
    </div>
    <div class="store-actions">
        <button class="visit-store-btn">
            <i class="fas fa-store"></i> Kunjungi Toko
        </button>
        </div>
    </div>

    <div class="product-description-card">
        <div class="section-header">Deskripsi Produk</div>
        <div class="product-description-row">
            <span class="label">Kategori</span>
            <span class="value">BALIMART > Pakaian > Baju Wanita</span>
    </div>
    <div class="product-description-row">
        <span class="label">Stok</span>
        <span class="value">TERSEDIA</span>
    </div>
        <div class="product-description-row">
        <span class="label">Merek</span>
        <span class="value">Von Dutch</span>
    </div>
        <div class="product-description-row">
        <span class="label">Bahan</span>
        <span class="value">chiffon</span>
    </div>
        <div class="product-description-row">
        <span class="label">Asal</span>
        <span class="value">Indonesia</span>
    </div>
        <div class="product-description-row">
        <span class="label">Dikirm Dari</span>
        <span class="value">Kota Denpasar</span>
    </div>

            

    </body>
</html>