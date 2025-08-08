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
        <form id="filterForm" action="{{ route('produk.index') }}" method="GET">
            <div class="filter-section">
                <h4><i class="fa-solid fa-location-dot"></i> Lokasi</h4>
                @foreach(['Badung','Bangli','Buleleng','Denpasar','Gianyar','Jembrana','Karangasem','Klungkung','Tabanan'] as $lokasi)
                    <label>
                        <input type="checkbox" name="lokasi[]" value="{{ $lokasi }}" 
                            {{ in_array($lokasi, request('lokasi', [])) ? 'checked' : '' }}>
                        {{ $lokasi }}
                    </label>
                @endforeach
            </div>

             <!-- Kategori -->
            <div class="filter-section">
    <h4><i class="fa-solid fa-list"></i> Kategori</h4>
    <ul>
        @foreach(['Pakaian','Kuliner','Kerajinan Tangan','Kebutuhan Upacara','Kesehatan','Elektronik','Bangunan & Pertanian','Bayi & Anak-anak'] as $kategori)
            <li>
                <a href="{{ route('produk.index', array_merge(request()->except('page'), ['kategori' => $kategori])) }}" 
                   class="kategori-item {{ request('kategori') === $kategori ? 'active' : '' }}" 
                   data-kategori="{{ $kategori }}">
                    {{ $kategori }}
                </a>
            </li>
        @endforeach
    </ul>
</div>


        </form>
    </aside>

    <!-- Konten Utama -->
    <main class="produk-container">
        <h4>KAMU MUNGKIN SUKA</h4>

        <div class="produk-grid">
    @forelse($produk as $item)
        <a href="{{ route('produk.show', $item->id) }}">
            <div class="produk-card">
                <img src="{{ asset('images/' . $item->gambar) }}" alt="{{ $item->nama }}">
                <h3>{{ $item->nama }}</h3>
                <p>Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                <div class="rating-cart">
                    <span class="rating">⭐ {{ number_format($item->rating, 1) }}</span>
                    <button class="fav-btn"><i class="fa-regular fa-heart"></i></button>
                    <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
        </a>
    @empty
        {{-- Popup muncul kalau produk kosong --}}
        <div id="popupAlert" class="popup-overlay">
            <div class="popup-box">
                <p>Produk yang anda cari tidak terdaftar</p>
                <button id="popupOk">OK</button>
            </div>
        </div>
    @endforelse
</div>

<script>
    // Auto-submit saat checkbox atau radio diubah
    document.querySelectorAll('#filterForm input').forEach(input => {
        input.addEventListener('change', function() {
            document.getElementById('filterForm').submit();
        });
    });

    // Toggle favorit
    document.querySelectorAll('.fav-btn').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            const icon = this.querySelector('i');
            icon.classList.toggle('fa-regular');
            icon.classList.toggle('fa-solid');
        });
    });
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const popup = document.getElementById("popupAlert");
    const btn = document.getElementById("popupOk");

    if (popup && btn) {
        btn.addEventListener("click", function() {
            popup.style.display = "none";
        });
    }
});
</script>

</body>
</html>
