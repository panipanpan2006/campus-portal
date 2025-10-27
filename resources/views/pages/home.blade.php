@extends('layouts.app')

@section('title', 'Home - Campus Portal')

@section('content')
<div class="text-center mb-8">
    <h2 class="text-4xl font-bold mb-3 text-gray-900 dark:text-white">Selamat Datang di Departemen Teknik Elektro</h2>
    <p class="text-gray-600 dark:text-gray-300 text-lg">Platform portal mahasiswa berbasis Laravel Blade.</p>
</div>

<x-alert type="success" message="Sistem berhasil dimuat! Selamat menggunakan Campus Portal." />

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <x-card 
        title="Akademik" 
        body="Informasi jadwal kuliah, nilai mahasiswa, dan kalender akademik."
        icon="📚"
    />
    
    <x-card 
        title="Berita Kampus" 
        body="Kegiatan terbaru, pengumuman penting, dan informasi kampus."
        icon="📰"
    />
    
    <x-card 
        title="Organisasi" 
        body="Daftar UKM, komunitas mahasiswa, dan kegiatan organisasi."
        icon="🏛️"
    />
    
    <x-card 
        title="Perpustakaan" 
        body="Akses katalog buku, jurnal, dan sumber belajar digital."
        icon="📖"
    />
    
    <x-card 
        title="Laboratorium" 
        body="Jadwal praktikum dan reservasi fasilitas laboratorium."
        icon="🔬"
    />
    
    <x-card 
        title="Konseling" 
        body="Layanan konsultasi akademik dan pengembangan karir."
        icon="💼"
    />
</div>
@endsection