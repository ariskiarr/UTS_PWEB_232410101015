<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('home', ['username' => $username]);
    }
    
    public function home(Request $request)
    {
        $username = $request->query('username');
        return view('home', compact('username'));
    }


    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        $aktivitas = [
            ['tanggal' => '2025-05-01', 'nama' => 'Budi', 'aktivitas' => 'Datang ke kantor', 'status' => 'Hadir'],
            ['tanggal' => '2025-05-02', 'nama' => 'Sari', 'aktivitas' => 'Izin ke dokter', 'status' => 'Izin'],
            ['tanggal' => '2025-05-03', 'nama' => 'Andi', 'aktivitas' => 'Tidak hadir tanpa keterangan', 'status' => 'Absen'],
        ];

        return view('dashboard', compact('username', 'aktivitas'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');
        $aktivitas = [
            [ 'nama' => 'Budi','status' => 'Hadir'],
            [ 'nama' => 'Sari','status' => 'Izin'],
            [ 'nama' => 'Andi','status' => 'Absen'],
        ];

        return view('pengelolaan', compact('username','aktivitas'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

}
