@extends('Admin.layout.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Data Penyakit</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item">Edit Data Penyakit</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="/admin-Penyakit/{{ $penyakitdashboard->id }}">
                        @method('PUT')
                        @csrf
                        <div class="card-header">
                            <h4>Edit Data Penyakit</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="kodePenyakit">Kode Penyakit</label>
                                <input type="text" class="form-control" id="kodePenyakit" name="kodePenyakit"
                                    value="{{ old('kodePenyakit', $penyakitdashboard->kodePenyakit) }}" required>
                                <span class="text-danger">
                                    @error('kodePenyakit')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mb-0">
                                <label for="namaPenyakit">Nama Penyakit</label>
                                <input type="text" class="form-control" id="namaPenyakit" name="namaPenyakit"
                                    value="{{ old('namaPenyakit', $penyakitdashboard->namaPenyakit) }}" required>
                                <span class="text-danger">
                                    @error('namaPenyakit')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mb-0">
                                <label for="definisi">Definisi</label>
                                <input type="text" class="form-control" id="definisi" name="definisi"
                                    value="{{ old('definisi', $penyakitdashboard->definisi) }}" required>
                                <span class="text-danger">
                                    @error('definisi')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mb-0">
                                <label for="penangganan">penangganan</label>
                                <input type="text" class="form-control" id="penangganan" name="penangganan"
                                    value="{{ old('penangganan', $penyakitdashboard->penangganan) }}" required>
                                <span class="text-danger">
                                    @error('penangganan')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mb-0">
                                <label for="dueDate">Due Date</label>
                                <input type="date" class="form-control" id="dueDate" name="dueDate"
                                    value="{{ old('dueDate', $penyakitdashboard->dueDate) }}" required>
                                <span class="text-danger">
                                    @error('dueDate')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mb-0">
                                <label for="gambar">Due Date</label>
                                <input type="image" class="form-control" id="gambar" name="gambar"
                                    value="{{ old('gambar', $penyakitdashboard->gambar) }}" required>
                                <span class="text-danger">
                                    @error('gambar')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>
@endsection
