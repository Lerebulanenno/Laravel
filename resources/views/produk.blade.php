<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Produk - BALIMART</title>

    <!-- CSS Kustom -->
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jaro&display=swap" rel="stylesheet">

    <!-- Responsive Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div class="logo">
        BALIM<span><i class="fa-solid fa-bag-shopping"></i></span>RT
    </div>

    <div class="search-container">
        <input type="text" placeholder="Cari produk...">
        <button><i class="fa fa-search"></i></button>
    </div>

    <div class="icon-group">
        <i class="fa fa-heart"></i>
         <a href="{{ route('cart') }}">
        <i class="fa fa-shopping-cart"></i>
        </a>
        <i class="fa fa-user"></i>
    </div>
</div>

<!-- Container -->
<div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="filter-section">
            <h4><i class="fa-solid fa-location-dot"></i> Lokasi</h4>
            <label><input type="checkbox" name="lokasi[]" value="Badung"> Badung</label>
            <label><input type="checkbox" name="lokasi[]" value="Bangli"> Bangli</label>
            <label><input type="checkbox" name="lokasi[]" value="Buleleng"> Buleleng</label>
            <label><input type="checkbox" name="lokasi[]" value="Denpasar"> Denpasar</label>
            <label><input type="checkbox" name="lokasi[]" value="Gianyar"> Gianyar</label>
            <label><input type="checkbox" name="lokasi[]" value="Jembrana"> Jembrana</label>
            <label><input type="checkbox" name="lokasi[]" value="Karangasem"> Karangasem</label>
            <label><input type="checkbox" name="lokasi[]" value="Klungkung"> Klungkung</label>
            <label><input type="checkbox" name="lokasi[]" value="Tabanan"> Tabanan</label>
        </div>

        <div class="filter-section">
            <h4><i class="fa-solid fa-list"></i> Kategori</h4>
            <ul>
                <li><a href="#" class="kategori-item active" data-kategori="Pakaian">Pakaian</a></li>
                <li><a href="#" class="kategori-item" data-kategori="Kuliner">Kuliner</a></li>
                <li><a href="#" class="kategori-item" data-kategori="Kerajinan Tangan">Kerajinan Tangan</a></li>
                <li><a href="#" class="kategori-item" data-kategori="Kebutuhan Upacara">Kebutuhan Upacara</a></li>
                <li><a href="#" class="kategori-item" data-kategori="Kesehatan">Kesehatan</a></li>
                <li><a href="#" class="kategori-item" data-kategori="Elektronik">Elektronik</a></li>
                <li><a href="#" class="kategori-item" data-kategori="Bangunan & Pertanian">Bangunan & Pertanian</a></li>
                <li><a href="#" class="kategori-item" data-kategori="Bayi & Anak-anak">Bayi & Anak-anak</a></li>
            </ul>
        </div>
    </aside>

    <!-- Konten Utama -->
    <main class="produk-container">
        <h4>KAMU MUNGKIN SUKA</h4>

        <div class="produk-grid">
            @foreach($produk as $item)
                <div class="produk-card">
                    <img src="{{ asset('images/' . $item['gambar']) }}" alt="{{ $item['nama'] }}">
                    <h3>{{ $item['nama'] }}</h3>
                    <p>Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                    <div class="rating-cart">
                    <span class="rating">⭐ {{ number_format($item['rating'], 1) }}</span>
                        <button class="fav-btn"><i class="fa-regular fa-heart"></i></button>
                        <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</div>

<!-- JS: Kategori aktif -->
<script>
    const kategoriLinks = document.querySelectorAll('.kategori-item');

    kategoriLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            kategoriLinks.forEach(k => k.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>


<script>
document.querySelectorAll('.fav-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        const icon = this.querySelector('i');
        icon.classList.toggle('fa-regular');
        icon.classList.toggle('fa-solid');
    });
});
</script>

</body>
</html>
