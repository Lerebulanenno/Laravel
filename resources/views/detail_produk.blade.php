<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $produk->nama ?? 'Detail Produk' }} - BALIMART</title>

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
            <a href = "{{ route('cart') }}">
            <span><i class="fa-solid fa-cart-shopping"></i></span>
            </a>
            <span><i class="fa-solid fa-user"></i></span>
            <span><i class="fa-solid fa-heart"></i></span>
        </div>
    </header>

    <nav class="breadcrumb">
        <a href="#">BALIMART</a> >
        <a href="#">{{ $produk->kategori ?? 'Kategori' }}</a> >
        <span>{{ $produk->nama }}</span>
    </nav>

    <!-- WRAPPER START -->
    <div class="page-wrapper">

        <div class="product-card">
            <div class="images-section">
                <img class="main-image" src="{{ asset('images/' . $produk->gambar) }}" alt="{{ $produk->nama }}">
                <div class="thumbnail">
                    <img src="{{ asset('images/' . $produk->gambar) }}" alt="{{ $produk->nama }}">
                    <img src="{{ asset('images/' . $produk->gambar) }}" alt="{{ $produk->nama }}">
                </div>
            </div>

            <div class="product-detail">
                <h2>{{ $produk->nama }}</h2>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    {{ $produk->rating ?? '0' }} | 0 Penilaian | 0 Terjual
                </div>

                <div class="price-box">
                    <div class="price">Rp. {{ number_format($produk->harga, 0, ',', '.') }}</div>
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
                
                            <button type="button" class="add-to-cart-btn cart-icon-button"
                                data-id="{{ $produk->id }}"
                                data-nama="{{ $produk->nama }}"
                                data-harga="{{ $produk->harga }}"
                                data-gambar="{{ $produk->gambar }}">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                    </div>
                </div>
            </div>
        </div>

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
                <div class="label">Kategori</div>
                <div class="value">BALIMART > Pakaian > Baju Wanita</div>
            </div>

            <div class="product-description-row">
                <div class="label">Stok</div>
                <div class="value">TERSEDIA</div>
            </div>

            <div class="product-description-row">
                <div class="label">Merek</div>
                <div class="value">Von Dutch</div>
            </div>

            <div class="product-description-row">
                <div class="label">Bahan</div>
                <div class="value">Chiffon</div>
            </div>

            <div class="product-description-row">
                <div class="label">Asal</div>
                <div class="value">Indonesia</div>
            </div>

            <div class="product-description-row">
                <div class="label">Dikirim Dari</div>
                <div class="value">Kota Denpasar</div>
            </div>
        </div>

        <div class="product-rating-card">
            <div class="rating-header">Penilaian Produk</div>

            <div class="rating-score">
                <span>5.0</span>
                <i class="fas fa-star"></i>
            </div>

            <div class="rating-divider"></div>
        </div>

    </div>
    <!-- WRAPPER END -->

    <script>
        document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', function() {
            const data = {
             id: this.dataset.id,
                nama: this.dataset.nama,
                harga: this.dataset.harga,
                gambar: this.dataset.gambar,
                _token: '{{ csrf_token() }}'
            };

        fetch("{{ route('cart.store') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': data._token
            },
            body: JSON.stringify(data)
        })
            .then(res => res.json())
            .then(response => {
            alert('✅ ' + response.message);
        })
            .catch(error => {
            alert('❌ Gagal menambahkan ke keranjang');
        });
    });
});
</script>

</body>
</html>
