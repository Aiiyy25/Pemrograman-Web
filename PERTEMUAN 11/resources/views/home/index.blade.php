@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="min-h-screen flex flex-col justify-center items-center text-center px-6 relative bg-cover bg-center" 
         style="background-image: url('{{ asset('images/sampulToko.jpeg') }}');">
    
    <div class="absolute inset-0 bg-gradient-to-b from-blue-900/70 via-blue-700/60 to-blue-500/50"></div>
    
    <div class="relative z-10 text-white" data-aos="fade-up">
        <h1 class="text-3xl sm:text-5xl font-bold mb-3">☕ Siura Signature</h1>
        <p class="text-gray-200 mb-4 max-w-md">Satu Tempat Dua Kenikmatan.</p>
        <a href="{{ route('menu') }}" 
           class="mt-2 inline-flex items-center px-6 py-3 bg-yellow-500 text-white rounded-lg shadow hover:bg-yellow-600 transition text-lg font-semibold">
            Lihat Menu
        </a>
        <div class="mt-6 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://instagram.com/siura.id" target="_blank" 
               class="inline-flex items-center px-4 py-2 bg-pink-500 text-white rounded-lg shadow hover:bg-pink-600 transition">
                Instagram @siura.id
            </a>
            <a href="https://maps.google.com/?q=Siura+Coffee+Eatery" target="_blank" 
               class="inline-flex items-center px-4 py-2 bg-green-500 text-white rounded-lg shadow hover:bg-green-600 transition">
                📍 Lihat Lokasi
            </a>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12 text-blue-900">Kenapa Memilih Siura?</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center" data-aos="fade-up">
                <div class="text-4xl mb-4">☕</div>
                <h3 class="text-xl font-semibold mb-2">Kualitas Premium</h3>
                <p class="text-gray-600">Kopi pilihan dengan racikan terbaik untuk kenikmatan sempurna</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl mb-4">🚀</div>
                <h3 class="text-xl font-semibold mb-2">Pelayanan Cepat</h3>
                <p class="text-gray-600">Pesanan diproses dengan cepat dan tepat</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl mb-4">💝</div>
                <h3 class="text-xl font-semibold mb-2">Rasa Terjamin</h3>
                <p class="text-gray-600">Setiap sajian dibuat dengan standar kualitas tinggi</p>
            </div>
        </div>
    </div>
</section>
@endsection