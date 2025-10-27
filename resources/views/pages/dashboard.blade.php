@extends('layouts.app')

@section('title', 'Dashboard - Campus Portal')

@section('content')
<div class="text-center mb-8">
    <h2 class="text-4xl font-bold mb-3 text-gray-900 dark:text-white">Dashboard Mahasiswa</h2>
    <p class="text-gray-600 dark:text-gray-300 text-lg">Statistik dan informasi akademik Anda</p>
</div>

<x-alert type="warning" message="Data berikut adalah data dummy untuk keperluan demonstrasi." />

<!-- Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white p-6 rounded-lg shadow-lg">
        <div class="text-3xl font-bold">3.85</div>
        <div class="text-blue-100">IPK Semester Ini</div>
    </div>
    
    <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-6 rounded-lg shadow-lg">
        <div class="text-3xl font-bold">142</div>
        <div class="text-green-100">Total SKS</div>
    </div>
    
    <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white p-6 rounded-lg shadow-lg">
        <div class="text-3xl font-bold">8</div>
        <div class="text-purple-100">Mata Kuliah Aktif</div>
    </div>
    
    <div class="bg-gradient-to-br from-orange-500 to-orange-600 text-white p-6 rounded-lg shadow-lg">
        <div class="text-3xl font-bold">95%</div>
        <div class="text-orange-100">Kehadiran</div>
    </div>
</div>

<!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <!-- Chart 1: IPK per Semester -->
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">IPK per Semester</h3>
        <div class="relative h-64">
            <canvas id="ipkChart"></canvas>
        </div>
    </div>
    
    <!-- Chart 2: Distribusi Nilai -->
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Distribusi Nilai</h3>
        <div class="relative h-64">
            <canvas id="gradeChart"></canvas>
        </div>
    </div>
</div>

<!-- Recent Activities -->
<div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
    <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Aktivitas Terkini</h3>
    <div class="space-y-3">
        <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-3">
            <div>
                <p class="font-semibold text-gray-900 dark:text-white">Pengumpulan Tugas Web Programming</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">Deadline: 30 Oktober 2025</p>
            </div>
            <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-3 py-1 rounded-full">Pending</span>
        </div>
        
        <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-3">
            <div>
                <p class="font-semibold text-gray-900 dark:text-white">Quiz Database Systems</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">Nilai: 88/100</p>
            </div>
            <span class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">Completed</span>
        </div>
        
        <div class="flex items-center justify-between">
            <div>
                <p class="font-semibold text-gray-900 dark:text-white">Praktikum IoT</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">Jadwal: Senin, 10:00 - 12:00</p>
            </div>
            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">Upcoming</span>
        </div>
    </div>
</div>
@endsection