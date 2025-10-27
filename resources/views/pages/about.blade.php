@extends('layouts.app')

@section('title', 'About - Campus Portal')

@section('content')
<div class="text-center mb-8">
    <h2 class="text-4xl font-bold mb-3 text-gray-900 dark:text-white">Tentang Kami</h2>
    <p class="text-gray-600 dark:text-gray-300 text-lg">Departemen Teknik Elektro Universitas Diponegoro</p>
</div>

<x-alert type="info" message="Halaman ini menampilkan profil dosen pengampu mata kuliah." />

<div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg mb-8">
    <h3 class="text-2xl font-bold mb-4 text-undip-blue dark:text-blue-400">Visi & Misi</h3>
    <p class="text-gray-700 dark:text-gray-300 mb-4">
        Departemen Teknik Elektro berkomitmen untuk menghasilkan lulusan yang unggul dalam bidang teknologi elektro
        dan mampu bersaing di tingkat nasional maupun internasional.
    </p>
</div>

<h3 class="text-3xl font-bold mb-6 text-center text-gray-900 dark:text-white">Profil Dosen Pengampu</h3>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <x-card 
        title="Dr. Ir. Budi Santoso, M.T." 
        body="Dosen Pengampu Web Programming. Bidang keahlian: Software Engineering, Web Development, dan Database Systems."
    />
    
    <x-card 
        title="Prof. Dr. Siti Nurhasanah, S.T., M.Kom." 
        body="Dosen Pengampu Framework Development. Spesialisasi: Modern Web Frameworks, Cloud Computing, dan DevOps."
    />
    
    <x-card 
        title="Ir. Ahmad Fauzi, M.Sc., Ph.D." 
        body="Dosen Pengampu UI/UX Design. Expertise: Human-Computer Interaction, Mobile Development, dan Design Thinking."
    />
    
    <x-card 
        title="Dr. Eng. Rizky Pratama, S.T., M.T." 
        body="Koordinator Laboratorium. Fokus penelitian: Internet of Things, Embedded Systems, dan Robotics."
    />
    
    <x-card 
        title="Maya Kusuma Dewi, S.Kom., M.T." 
        body="Asisten Lab Web Development. Keahlian: Frontend Technologies, API Development, dan Testing."
    />
    
    <x-card 
        title="Drs. Hendra Wijaya, M.Kom." 
        body="Ketua Departemen. Bidang: Network Security, Cloud Infrastructure, dan IT Management."
    />
</div>

<div class="mt-8 bg-undip-blue text-white p-6 rounded-lg text-center">
    <h4 class="text-2xl font-bold mb-2">Kontak Kami</h4>
    <p>Email: teknik.elektro@undip.ac.id</p>
    <p>Telepon: (024) 7460054</p>
    <p>Alamat: Jl. Prof. Sudarto, SH, Tembalang, Semarang</p>
</div>
@endsection