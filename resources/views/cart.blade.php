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

        @if(count($cart) > 0)
    <div class="cart-container">

        <!-- KIRI: LIST PRODUK -->
        <div class="cart-list-content">
            <!-- Select All Bar -->
            <div class="select-all-bar">
                <div class="select-all-left">
                    <input type="checkbox" id="selectAll">
                    <label for="selectAll">Pilih Semua</label>
                </div>
                <form  id="deleteSelectedForm" action="{{ route('cart.deleteSelected') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="selected_ids" id="selectedIdsInput">
                    <button type="submit" class="delete-btn" title="Hapus Produk Terpilih">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>

            <!-- PRODUK -->
            @foreach ($cart as $index => $item)
                <div class="cart-item-box">
                    <div class="cart-item-left">
                        <input type="checkbox" 
                            class="select-item"
                            data-id="{{ $item['id'] }}"
                            data-harga="{{ $item['harga'] }}">
                        <img src="{{ asset('images/' . $item['gambar']) }}" alt="{{ $item['nama'] }}">
                        <span class="product-name">{{ $item['nama'] }}</span>
                    </div>
                    <div class="cart-item-right">
                       <span class="product-price">Rp {{ number_format($item['harga'], 0, ',', '.') }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- KANAN: RINGKASAN -->
        <div class="cart-summary">
            <div class="cart-summary-box">
                <div class="summary-row">
                    <span>Total</span>
                    <span class="total-harga" id="totalHarga">Rp 0</span>
                </div>
                <button class="checkout-btn">Beli ({{ count($cart) }})</button>
            </div>
        </div>

    </div> <!-- .cart-container -->
@else
    <!-- Jika keranjang kosong -->
    <div class="cart-empty-content">
        <div class="cart-image-wrapper">
            <img src="/images/cart.png" alt="Keranjang Kosong">
        </div>
        <p>Ups! Keranjangmu masih kosong nih.</p>
        <a href="{{ url('/') }}">
            <button class="shop-now-btn">Belanja Sekarang</button>
        </a>
    </div>
@endif


    <script>
        function hitungTotal() {
            let total = 0;
            document.querySelectorAll('.select-item').forEach(cb =>{
                if (cb.checked) {
                    total += parseInt(cb.dataset.harga);
                }
            });
            document.getElementById('totalHarga').innerText = 
            'Rp ' + total.toLocaleString('id-ID')
        }

        //Checkbox per item
        document.querySelectorAll('.select-item').forEach(cb => {
            cb.addEventListener('change', hitungTotal);
        });

        //Pilih Semua Checkbox
        document.getElementById('selectAll')?.addEventListener('change', function() {
            document.querySelectorAll('.select-item').forEach(cb => {
                cb.checked = this.checked;
        });
        hitungTotal();
        });

        //Inisialisasi total saat halaman pertama kali load
        hitungTotal();

    
        // Submit form deleteSelected: kirim ID yang dicentang
        document.getElementById('deleteSelectedForm')?.addEventListener('submit', function (e) {
            const selectedCheckboxes = document.querySelectorAll('.select-item:checked');
            const selectedIds = Array.from(selectedCheckboxes).map(cb => cb.dataset.id);

        if (selectedIds.length === 0) {
            e.preventDefault();
            alert('Pilih setidaknya satu produk untuk dihapus.');
            return;
        }

        document.getElementById('selectedIdsInput').value = JSON.stringify(selectedIds);
    });

    // Inisialisasi total saat load halaman
    hitungTotal();
    </script>

</body>
</html>
