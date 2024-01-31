@extends('LandingPage.layout.main')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Detail Penyakit Ayam</h2>
                </div>
                <div class="col-12">
                    <a href="/home">Home</a>
                    <a href="">Detail</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Single Page Start -->
    <div class="single">
        <div class="container">
            <div class="section-header text-center">
                <h2>{{ $detailPenyakit->namaPenyakit }}</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <img src="/storage/{{ $detailPenyakit->gambar }}" alt="Image" width="150" height="500">
                    <h1>Definisi {{ $detailPenyakit->namaPenyakit }}</h1>
                    <p>
                        {{ $detailPenyakit->definisi }}
                    </p>

                    <h1> Gejala-Gejala </h1>
                    <ol class="ol-group">
                        <li>First list item</li>
                        <li>Second list item</li>
                        <li>Third list item</li>
                        <li>Fourth list item</li>
                        <li>Fifth list item</li>
                    </ol>
                    <h1> Solusi</h1>
                    <li>{{ $detailPenyakit->penangganan }}</li>
                    {{-- <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Table Head</th>
                                <th>Table Head</th>
                                <th>Table Head</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Table Cell</td>
                                <td>Table Cell</td>
                                <td>Table Cell</td>
                            </tr>
                            <tr>
                                <td>Table Cell</td>
                                <td>Table Cell</td>
                                <td>Table Cell</td>
                            </tr>
                            <tr>
                                <td>Table Cell</td>
                                <td>Table Cell</td>
                                <td>Table Cell</td>
                            </tr>
                        </tbody>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Single Page End -->
@endsection
