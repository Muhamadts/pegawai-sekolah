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

        $latestData = collect();

        // Ambil Guru terbaru
        foreach (Guru::latest()->take(5)->get() as $guru) {

            $latestData->push([
                'nama'       => $guru->nama,
                'jabatan'    => $guru->jabatan,
                'badge'      => 'Guru',
                'warna'      => 'guru',
                'inisial'    => strtoupper(substr($guru->nama, 0, 1)),
                'created_at' => $guru->created_at,
            ]);
        }

        // Ambil Tendik terbaru
        foreach (Tendik::latest()->take(5)->get() as $tendik) {

            $latestData->push([
                'nama'       => $tendik->nama,
                'jabatan'    => $tendik->jabatan,
                'badge'      => 'Tendik',
                'warna'      => 'tendik',
                'inisial'    => strtoupper(substr($tendik->nama, 0, 1)),
                'created_at' => $tendik->created_at,
            ]);
        }

        // Urutkan berdasarkan data terbaru
        $latestData = $latestData
            ->sortByDesc('created_at')
            ->take(5);

        return view('dashboard.index', compact(
            'totalGuru',
            'totalTendik',
            'totalPegawai',
            'latestData'
        ));
    }
}