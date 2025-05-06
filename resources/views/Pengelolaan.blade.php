@extends('layouts.app')
@section('title')
    Pengolaan
@endsection
@section('content')

<div class="max-w-6xl mx-auto p-6">
    {{-- header --}}
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Karyawan </h1>
        <a href="" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah</a>
    </div>
    {{-- Tabel Karyawan --}}
    <div class="bg-white shadow rounded-lg overflow-x-auto">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">No</th>
                    <th class="px-4 py-2 text-left">Nama</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- Looping data karyawan --}}
                @foreach($aktivitas as $index => $aktivitasItem)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $index + 1 }}</td>
                    <td class="px-4 py-2">{{ $aktivitasItem['nama'] }}</td>
                    <td class="px-4 py-2">{{ $aktivitasItem['status'] }}</td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="# class="text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="text-red-500 hover:underline">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection
