@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <div class="min-h-screen bg-gray-100 flex items-center justify-center ">
        <div class="bg-white max-w-3xl w-full rounded-xl shadow-lg p-10 text-center">

          {{-- Header --}}
          <h1 class="text-4xl font-bold text-gray-800 mb-4">Selamat Datang {{$username}} di WebStaff!</h1>

           {{-- Deskripsi --}}
          <p class="text-gray-600 text-lg mb-6">
            Aplikasi ini membantu Anda mengelola data karyawan, mencatat kehadiran, izin, dan absensi secara efisien dalam satu sistem terpadu..
          </p>

           {{-- Tombol Get Started --}}
          <a href="{{ route('login.form')}}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow">
            Get Started
          </a>
        </div>
    </div>
@endsection
