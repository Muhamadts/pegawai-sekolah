<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Tendik;

class DashboardController extends Controller
{
    public function index()
    {
        $totalGuru = Guru::count();
        $totalTendik = Tendik::count();
        $totalPegawai = $totalGuru + $totalTendik;

        $guruTerbaru = Guru::latest()->take(3)->get();

        $tendikTerbaru = Tendik::latest()->take(3)->get();

        return view('dashboard.index', compact(
            'totalGuru',
            'totalTendik',
            'totalPegawai',
            'guruTerbaru',
            'tendikTerbaru'
        ));
    }
}