<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Mapel;

class DashboardController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        $guru = Guru::all();
        $mapel = Mapel::all();
        return view('home', compact('siswa', 'guru', 'mapel'));
    }
}
