<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<title>Laporan</title>

<style>

body{

    font-family: DejaVu Sans, sans-serif;
    font-size:12px;
    color:#000;

}

.header{

    text-align:center;
    margin-bottom:15px;

}

.header h2{

    margin:0;
    font-size:22px;

}

.header h4{

    margin:5px 0;

}

.header p{

    margin:2px 0;

}

.line{

    border-top:3px solid black;
    border-bottom:1px solid black;
    margin:15px 0;

}

table{

    width:100%;
    border-collapse:collapse;

}

table th{

    background:#eeeeee;
    border:1px solid #000;
    padding:8px;
    text-align:center;

}

table td{

    border:1px solid #000;
    padding:7px;

}

.text-center{

    text-align:center;

}

.footer{

    margin-top:50px;
    width:100%;

}

.signature{

    float:right;
    width:250px;
    text-align:center;

}

</style>

</head>

<body>

<div class="header">

    <h2>

        SD PLUS Indo Global Mandiri PALEMBANG

    </h2>

    <p>

        Jalan Kol. H. Barlian RT.37 RW.11 Km.10 Kel.Karya Baru Kec.Alang-Alang Lebar Palembang 

    </p>

    <p>

        Telp. (0711) 123456

    </p>

    <p>

        Email : info@sdplusigm.sch.id

    </p>

</div>

<div class="line"></div>

<div class="text-center">

@if($jenis=='guru')

<h3>

LAPORAN DATA GURU

</h3>

@elseif($jenis=='tendik')

<h3>

LAPORAN DATA TENDIK

</h3>

@elseif($jenis=='data_induk')

<h3>

LAPORAN DATA INDUK

</h3>

@endif

</div>

<table>

<thead>

<tr>

<th width="5%">

No

</th>

<th width="12%">

NIY

</th>

<th width="20%">

Nama

</th>

<th width="22%">

Tempat / Tanggal Lahir

</th>

<th width="10%">

JK

</th>

<th width="16%">

Jabatan

</th>

<th width="15%">

Pendidikan

</th>

</tr>

</thead>

<tbody>

@forelse($laporan as $item)

<tr>

<td class="text-center">

{{ $loop->iteration }}

</td>

<td>

{{ $item->niy }}

</td>

<td>

{{ $item->nama }}

</td>

<td>

{{ $item->tempat_lahir }},
{{ \Carbon\Carbon::parse($item->tanggal_lahir)->format('d-m-Y') }}

</td>

<td class="text-center">

{{ $item->jenis_kelamin }}

</td>

<td>

{{ $item->jabatan }}

</td>

<td>

{{ $item->pendidikan }}

</td>

</tr>

@empty

<tr>

<td colspan="7" class="text-center">

Data tidak tersedia

</td>

</tr>

@endforelse

</tbody>

</table>

<div class="footer">

<div class="signature">

<p>

Palembang,

{{ date('d F Y') }}

</p>
<p>

Kepala Sekolah

</p>
<br><br><br>

<p>

<b>

Mefi Laranti, S.Pd

</b>

</p>

<p>

NIY : 2006.04.0020

</p>

</div>

</div>

</body>

</html>