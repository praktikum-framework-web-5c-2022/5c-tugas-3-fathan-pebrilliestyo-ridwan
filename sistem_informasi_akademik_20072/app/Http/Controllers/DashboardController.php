<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $dsn = Dosen::count();
        $mhs = Mahasiswa::count();
        $mk = Matakuliah::count();
        return view('index', compact('dsn','mhs','mk'));
    }
}
