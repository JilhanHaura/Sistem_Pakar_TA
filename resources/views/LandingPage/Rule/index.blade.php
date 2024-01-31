@extends('LandingPage.layout.main')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Konsultasi Penyakit</h2>
                </div>
                <div class="col-12">
                    <a href="home">Home</a>
                    <a href="">Konsultasi Penyakit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container mt-5">
        <h1>Diagnosis Penyakit Ayam</h1>
        <form action="{{ route('diagnose') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="gejala">Pilih 3 Gejala:</label><br>
                @foreach ($gejalaList as $gejala)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gejala[]" value="{{ $gejala->kode_gejala }}"
                            id="{{ $gejala->kode_gejala }}">
                        <label class="form-check-label" for="{{ $gejala->kode_gejala }}">{{ $gejala->nama_gejala }}</label>
                    </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Diagnosa</button>
        </form>
        @if ($data)
            <h2>Hasil Diagnosis:</h2>
            @if (count($data) > 0)
                <ul>
                    @foreach ($data as $p)
                        <li>{{ $p->nama_penyakit }}</li>
                    @endforeach
                </ul>
            @else
                <p>Tidak ditemukan penyakit yang sesuai dengan gejala yang dipilih.</p>
            @endif
        @endif
    </div>
@endsection
