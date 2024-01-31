@extends('Admin.layout.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="admin-penyakit"> Penyakit</a></div>
                    <div class="breadcrumb-item">Detail Penyakit</div>

                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="container">
                            <p><strong>Image/Video</strong></p>
                            <img src="/storage/{{ $detailPenyakit->gambar }}" alt="Return Image" width="300">
                            <br><br>
                            <div class="row">
                                <div class="col-2"><strong>Kode Penyakit</strong></div>
                                <div class="col">: {{ $detailPenyakit->kode_penyakit }}</div>
                            </div><br>
                            <div class="row">
                                <div class="col-2"><strong>Nama Penyakit</strong></div>
                                <div class="col">: {{ $detailPenyakit->nama_penyakit }}</div>
                            </div><br>
                            <div class="row">
                                <div class="col-2"><strong>Definisi</strong></div>
                                <div class="col justified-text">: {{ $detailPenyakit->definisi }}
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-2"><strong>Penangganan</strong></div>
                                <div class="col">: {{ $detailPenyakit->penangganan }}
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-2"><strong>Due Date</strong></div>
                                <div class="col">: {{ $detailPenyakit->dueDate }}</div>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="/admin-penyakit" class="btn btn-success mx-1">Back</a>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
