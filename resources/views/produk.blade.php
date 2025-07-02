<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Produk - BALIMART</title>
    
    <!-- CSS Kustom -->
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <!-- Responsive Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">BALIM<span><i class="fa-solid fa-bag-shopping"></i></span>RT</div>

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
    <li><a href="#" class="kategori-item" data-kategori="Pakaian">Pakaian</a></li>
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
            <h3>KAMU MUNGKIN SUKA</h3>

            <div class="produk-grid">
                @foreach($produk as $item)
                <div class="produk-card">
                    <img src="{{ asset('images/' . $item['gambar']) }}" alt="{{ $item['nama'] }}">
                    <h3>{{ $item['nama'] }}</h3>
                    <p>Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                    <div class="rating-cart">
                        <span class="rating">⭐ {{ $item['rating'] }}</span>
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                </div>
                @endforeach
            </div>
        </main>
    </div>

    <script>
    const kategoriLinks = document.querySelectorAll('.kategori-item');

    kategoriLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            // Hapus class 'active' dari semua kategori
            kategoriLinks.forEach(k => k.classList.remove('active'));

            // Tambahkan class 'active' ke item yang diklik
            this.classList.add('active');
        });
    });
</script>


</body>
</html>
