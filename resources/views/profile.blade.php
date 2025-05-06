@extends('layouts.app')
@section('title')
    Profile
@endsection
@section('content')
<div class="bg-white rounded-2xl shadow-xl w-full max-w-5xl mx-auto p-10 mt-10 mb-10">
    <div class="flex items-center justify-between mb-8">

        <div class="flex items-center gap-4">
            <img class="w-20 h-20 rounded-full object-cover" src="https://images.playground.com/77e75287d9b74a72af18af9bc3f1203e.png" alt="Foto Admin" />
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Username: {{ $username }}</h2>
                <p class="text-gray-500">admin@WebStaff.com</p>
            </div>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Edit</button>
    </div>

    <form class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
        <div>
            <label class="block text-gray-600 font-medium mb-1">Role</label>
            <input type="text" value="Super Admin" disabled class="w-full px-4 py-2 bg-gray-100 rounded-md border border-gray-200" />
        </div>
        <div>
            <label class="block text-gray-600 font-medium mb-1">Status</label>
            <input type="text" value="Aktif" disabled class="w-full px-4 py-2 bg-green-50 rounded-md border border-gray-200 text-green-700 font-semibold" />
        </div>
        <div>
            <label class="block text-gray-600 font-medium mb-1">Tanggal Bergabung</label>
            <input type="text" value="01 Januari 2023" disabled class="w-full px-4 py-2 bg-gray-100 rounded-md border border-gray-200" />
        </div>
        <div>
            <label class="block text-gray-600 font-medium mb-1">Terakhir Login</label>
            <input type="text" value="5 Mei 2025, 08:30 WIB" disabled class="w-full px-4 py-2 bg-gray-100 rounded-md border border-gray-200" />
        </div>
        <div class="md:col-span-2">
            <label class="block text-gray-600 font-medium mb-1">Deskripsi</label>
            <textarea disabled class="resize-none w-full px-4 py-2 bg-gray-100 rounded-md border border-gray-200 text-sm" rows="3 ">
                Administrator sistem yang bertanggung jawab atas pengelolaan data dan pengguna dalam sistem.
            </textarea>
        </div>
    </form>

    <div class="flex justify-end gap-4 mt-6">
        <button class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition">Ubah Data</button>
        <button class="bg-red-600 text-white px-6 py-2 rounded-md hover:bg-red-700 transition">Keluar</button>
    </div>
</div>
@endsection
