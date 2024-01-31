@extends('LandingPage.layout.main')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Jenis Penyakit</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Jenis Penyakit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Latest From Blog</p>
                <h2>Jenis Penyakit Ayam</h2>
            </div>
            <div class="row blog-page">
                @foreach ($LpPenyakit as $penyakitlandingpage)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="/storage/{{ $penyakitlandingpage->gambar }}" alt="Blog">
                            </div>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">{{ $penyakitlandingpage->kode_penyakit }}</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>{{ $penyakitlandingpage->due_date }}</p>
                            </div>
                            <div class="blog-text">
                                <h2><a
                                        href="/home/{{ $penyakitlandingpage->id }}">{{ $penyakitlandingpage->nama_penyakit }}</a>
                                </h2>
                                <p>
                                    {{ Illuminate\Support\Str::limit($penyakitlandingpage->definisi, 100) }}
                                </p>
                                <h2>Pencegahan</h2>
                                <p>
                                    {{ Illuminate\Support\Str::limit($penyakitlandingpage->penangganan, 150) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            <li class="page-item {{ $LpPenyakit->previousPageUrl() ? '' : 'disabled' }}">
                                <a class="page-link"
                                    href="{{ $LpPenyakit->previousPageUrl() ? $LpPenyakit->previousPageUrl() : '#' }}">Previous</a>
                            </li>
                            @for ($i = 1; $i <= $LpPenyakit->lastPage(); $i++)
                                <li class="page-item {{ $i == $LpPenyakit->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $LpPenyakit->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="page-item {{ $LpPenyakit->nextPageUrl() ? '' : 'disabled' }}">
                                <a class="page-link"
                                    href="{{ $LpPenyakit->nextPageUrl() ? $LpPenyakit->nextPageUrl() : '#' }}">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Blog End -->
        @endsection
