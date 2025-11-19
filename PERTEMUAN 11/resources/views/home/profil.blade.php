@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<section class="min-h-screen bg-gradient-to-b from-blue-900 to-blue-600 text-white py-16">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-center mb-8" data-aos="fade-down">Tentang Siura Coffee</h1>
            
            <div class="grid md:grid-cols-2 gap-8 items-center mb-12">
                <div data-aos="fade-right">
                    <img src="{{ asset('images/sampulToko.jpeg') }}" alt="Siura Coffee" 
                         class="rounded-lg shadow-lg w-full h-64 object-cover">
                </div>
                <div data-aos="fade-left">
                    <h2 class="text-2xl font-semibold mb-4">Siura Signature</h2>
                    <p class="text-gray-200 mb-4">
                        Siura Coffee & Eatery hadir dengan konsep "Satu Tempat Dua Kenikmatan" 
                        yang memadukan cita rasa kopi premium dengan suasana yang nyaman.
                    </p>
                    <p class="text-gray-200">
                        Kami berkomitmen untuk memberikan pengalaman terbaik bagi setiap pelanggan 
                        dengan pelayanan yang ramah dan produk berkualitas.
                    </p>
                </div>
            </div>

            <div class="bg-white/10 rounded-lg p-8 backdrop-blur-sm" data-aos="fade-up">
                <h3 class="text-2xl font-semibold mb-6 text-center">Informasi Toko</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-semibold mb-2">📍 Alamat</h4>
                        <p class="text-gray-200">Jl. Tamalate No.6A, Bonto Makkio</p>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-2">🕒 Jam Operasional</h4>
                        <p class="text-gray-200">Setiap Hari: 08:00 - 22:00 WIB</p>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-2">📱 Kontak</h4>
                        <p class="text-gray-200">+62 877-2240-8446</p>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-2">🌐 Sosial Media</h4>
                        <a href="https://instagram.com/siura.id" target="_blank" 
                           class="text-yellow-300 hover:text-yellow-400">@siura.id</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection