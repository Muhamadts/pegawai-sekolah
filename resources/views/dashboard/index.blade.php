@extends('layouts.app')

@section('content')

<div class="mb-4">

    <h2 class="fw-bold">
        Selamat Datang
    </h2>

    <p class="text-secondary">
        Kelola data kepegawaian SD Plus IGM Palembang dengan mudah
    </p>

</div>

<div class="row g-4">

    <div class="col-md-3">

        <div class="card card-dashboard">

            <div class="card-body">

                <small>Total Guru</small>

                <h2 class="text-primary">

                    5

                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card card-dashboard">

            <div class="card-body">

                <small>Total Tendik</small>

                <h2 class="text-danger">

                    3

                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card card-dashboard">

            <div class="card-body">

                <small>Total Pegawai</small>

                <h2 class="text-success">

                    8

                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card card-dashboard">

            <div class="card-body">

                <small>Status</small>

                <h2 class="text-success">

                    Aktif

                </h2>

            </div>

        </div>

    </div>

</div>

@endsection