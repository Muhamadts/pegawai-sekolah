<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Tendik;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    /**
     * Menampilkan halaman laporan
     */
    public function index(Request $request)
    {
        $jenis = $request->get('jenis', 'guru');

        switch ($jenis) {

            case 'guru':

                $laporan = Guru::select(
                    'niy',
                    'nama',
                    'tempat_lahir',
                    'tanggal_lahir',
                    'jenis_kelamin',
                    'jabatan',
                    'pendidikan'
                )
                ->orderBy('nama')
                ->get();

                break;

            case 'tendik':

                $laporan = Tendik::select(
                    'niy',
                    'nama',
                    'tempat_lahir',
                    'tanggal_lahir',
                    'jenis_kelamin',
                    'jabatan',
                    'pendidikan'
                )
                ->orderBy('nama')
                ->get();

                break;

            case 'data_induk':

                $guru = Guru::select(
                    'niy',
                    'nama',
                    'tempat_lahir',
                    'tanggal_lahir',
                    'jenis_kelamin',
                    'jabatan',
                    'pendidikan'
                )->get();

                $tendik = Tendik::select(
                    'niy',
                    'nama',
                    'tempat_lahir',
                    'tanggal_lahir',
                    'jenis_kelamin',
                    'jabatan',
                    'pendidikan'
                )->get();

                $laporan = $guru->concat($tendik)->values();

                break;

            default:

                $laporan = collect();

                break;
        }

        return view('laporan.index', compact(
            'laporan',
            'jenis'
        ));
    }

    /**
     * Cetak PDF
     */
    public function pdf(Request $request)
    {
        $jenis = $request->get('jenis', 'guru');

        switch ($jenis) {

            case 'guru':

                $laporan = Guru::orderBy('nama')->get();

                break;

            case 'tendik':

                $laporan = Tendik::orderBy('nama')->get();

                break;

            case 'data_induk':

                $guru = Guru::all();

                $tendik = Tendik::all();

                $laporan = $guru->concat($tendik)->values();

                break;

            default:

                $laporan = collect();

                break;
        }

        $pdf = Pdf::loadView(
            'laporan.pdf',
            compact(
                'laporan',
                'jenis'
            )
        );

        $pdf->setPaper('A4', 'landscape');

        return $pdf->stream(
            'laporan-' . $jenis . '.pdf'
        );
    }

    /**
     * Display the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource.
     */
    public function destroy(string $id)
    {
        //
    }
}