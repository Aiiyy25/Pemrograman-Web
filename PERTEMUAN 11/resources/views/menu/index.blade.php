@extends('layouts.app')

@section('title', 'Menu')

@section('content')
<section class="min-h-screen bg-gradient-to-b from-blue-900 to-blue-600 text-white py-16">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-bold text-center mb-4" data-aos="fade-down">📝 Menu Kami</h1>
        <p class="text-center text-gray-200 mb-10" data-aos="fade-down">Pilih menu favorit Anda dan tambahkan ke keranjang</p>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($menuItems as $category => $categoryData)
            <div data-aos="fade-up">
                <h3 class="text-xl font-semibold border-b border-gray-400 mb-4 pb-2">{{ $categoryData['title'] }}</h3>
                <ul class="space-y-3">
                    @foreach($categoryData['items'] as $item)
                    <li class="flex justify-between items-center bg-white/10 rounded-lg px-4 py-3 hover:bg-white/20 transition">
                        <div>
                            <div class="font-medium">{{ $item['name'] }}</div>
                            <div class="text-yellow-300 text-sm">Rp {{ number_format($item['price'], 0, ',', '.') }}</div>
                        </div>
                        <button onclick="tambahKeranjang('{{ $item['name'] }}', {{ $item['price'] }})" 
                                class="bg-yellow-500 hover:bg-yellow-600 text-white rounded-full w-8 h-8 flex items-center justify-center transition">
                            +
                        </button>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    async function tambahKeranjang(nama, harga) {
        try {
            const response = await fetch('{{ route("add.to.cart") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    item_name: nama,
                    item_price: harga
                })
            });

            const data = await response.json();
            if (data.success) {
                // Show success message
                alert('Item berhasil ditambahkan ke keranjang!');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat menambahkan item.');
        }
    }
</script>
@endsection