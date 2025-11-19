@extends('layouts.app')

@section('title', 'Keranjang')

@section('content')
<section class="min-h-screen bg-gradient-to-b from-blue-800 to-blue-500 text-white py-16">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-bold text-center mb-6">🛒 Keranjang Pesanan</h1>
        
        <div class="max-w-4xl mx-auto">
            <div class="overflow-x-auto bg-white text-black rounded-lg shadow p-6 mb-6">
                <table class="w-full text-sm">
                    <thead class="border-b">
                        <tr>
                            <th class="py-3 text-left">Menu</th>
                            <th class="py-3 text-center">Jumlah</th>
                            <th class="py-3 text-right">Harga</th>
                        </tr>
                    </thead>
                    <tbody id="listKeranjang"></tbody>
                </table>
                <div class="mt-4 flex justify-between items-center">
                    <p class="font-bold text-lg">Total: Rp <span id="totalHarga">0</span></p>
                    <button onclick="clearCart()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                        Kosongkan Keranjang
                    </button>
                </div>
            </div>

            <div class="bg-white text-black rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4">Informasi Pemesan</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium mb-2">Nama Lengkap</label>
                        <input id="nama" type="text" placeholder="Masukkan nama Anda" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Nomor WhatsApp</label>
                        <input id="nomor" type="text" placeholder="Contoh: 081234567890" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <button onclick="pesanWA()" 
                        class="mt-6 w-full bg-green-500 hover:bg-green-600 text-white py-3 rounded-lg font-semibold text-lg transition">
                    📱 Kirim Pesanan via WhatsApp
                </button>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    async function loadKeranjang() {
        try {
            const response = await fetch('{{ route("get.cart") }}');
            const data = await response.json();
            renderKeranjang(data.cart, data.total);
        } catch (error) {
            console.error('Error:', error);
        }
    }

    function renderKeranjang(cart, total) {
        const tbody = document.getElementById('listKeranjang');
        tbody.innerHTML = '';
        
        if (Object.keys(cart).length === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="3" class="py-4 text-center text-gray-500">
                        Keranjang masih kosong
                    </td>
                </tr>
            `;
        } else {
            Object.values(cart).forEach(item => {
                tbody.innerHTML += `
                    <tr class="border-b">
                        <td class="py-3">${item.name}</td>
                        <td class="text-center">${item.quantity}</td>
                        <td class="text-right">Rp ${(item.price * item.quantity).toLocaleString()}</td>
                    </tr>
                `;
            });
        }
        
        document.getElementById('totalHarga').innerText = total.toLocaleString();
    }

    async function clearCart() {
        if (!confirm('Yakin ingin mengosongkan keranjang?')) return;

        try {
            const response = await fetch('{{ route("clear.cart") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            });

            const data = await response.json();
            if (data.success) {
                loadKeranjang();
                alert('Keranjang berhasil dikosongkan!');
            }
        } catch (error) {
            console.error('Error:', error);
        }
    }

    async function pesanWA() {
        const nama = document.getElementById('nama').value;
        const nomor = document.getElementById('nomor').value;

        if (!nama || !nomor) {
            alert("Lengkapi nama dan nomor HP terlebih dahulu!");
            return;
        }

        try {
            const response = await fetch('{{ route("send.order") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    nama: nama,
                    nomor: nomor
                })
            });

            const data = await response.json();
            
            if (data.success) {
                window.open(data.whatsapp_url, '_blank');
                loadKeranjang(); // Refresh cart after order
            } else {
                alert(data.message);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat mengirim pesanan.');
        }
    }

    // Load cart on page load
    document.addEventListener('DOMContentLoaded', loadKeranjang);
</script>
@endsection