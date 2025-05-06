
@extends('layouts.app')
@section('title')
    Dashboard
@endsection

@section('content')

<div class="min-h-screen bg-gray-100 p-6">

     {{-- Header --}}
    <div class="mb-6">
      <h1 class="text-3xl font-bold text-gray-800">Selamat Datang, {{ $username }}!</h1>
      <p class="text-gray-600 mt-1">Berikut ringkasan aktivitas karyawan terbaru.</p>
    </div>

     {{-- Card --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-sm text-gray-500">Total Karyawan</div>
          <div class="text-2xl font-bold text-blue-600 mt-1">120</div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-sm text-gray-500">Hadir Hari Ini</div>
          <div class="text-2xl font-bold text-green-600 mt-1">110</div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-sm text-gray-500">Cuti</div>
          <div class="text-2xl font-bold text-yellow-500 mt-1">5</div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-sm text-gray-500">Absen</div>
          <div class="text-2xl font-bold text-red-500 mt-1">5</div>
        </div>
      </div>

    {{-- Tabel Aktivitas Karyawan --}}
    <div class="bg-white rounded-xl shadow-lg p-6">
      <h3 class="text-lg font-semibold text-gray-700 mb-4">Aktivitas Karyawan Terbaru</h3>
      <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
          <thead>
            <tr class="bg-gray-100 text-gray-600">
              <th class="px-4 py-3 border-b text-left">Tanggal</th>
              <th class="px-4 py-3 border-b text-left">Nama Karyawan</th>
              <th class="px-4 py-3 border-b text-left">Aktivitas</th>
              <th class="px-4 py-3 border-b text-left">Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($aktivitas as $aktivitasItem)
              <tr class="hover:bg-gray-50 transition duration-300">
                <td class="px-4 py-3 border-b">{{ $aktivitasItem['tanggal'] }}</td>
                <td class="px-4 py-3 border-b">{{ $aktivitasItem['nama'] }}</td>
                <td class="px-4 py-3 border-b">{{ $aktivitasItem['aktivitas'] }}</td>
                <td class="px-4 py-3 border-b
                  @if($aktivitasItem['status'] == 'Hadir')
                    text-green-600
                  @elseif($aktivitasItem['status'] == 'Izin')
                    text-yellow-600
                  @else
                    text-red-600
                  @endif
                  font-semibold">
                  {{ $aktivitasItem['status'] }}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection






