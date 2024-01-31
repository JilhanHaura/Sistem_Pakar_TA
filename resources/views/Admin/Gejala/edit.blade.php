@extends('Admin.layout.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Data Gejala</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item">Edit Data Gejala</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="/admin-gejala/{{ $gejaladashboard->id }}">
                        @method('PUT')
                        @csrf
                        <div class="card-header">
                            <h4>Edit Data Gejala</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="kodeGejala">Kode Gejala</label>
                                <input type="text" class="form-control" id="kodeGejala" name="kodeGejala"
                                    value="{{ old('kodeGejala', $gejaladashboard->kodeGejala) }}" required>
                                <span class="text-danger">
                                    @error('kodeGejala')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mb-0">
                                <label for="namaGejala">Nama Gejala</label>
                                <input type="text" class="form-control" id="namaGejala" name="namaGejala"
                                    value="{{ old('namaGejala', $gejaladashboard->namaGejala) }}" required>
                                <span class="text-danger">
                                    @error('namaGejala')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mb-0">
                                <label for="dueDate">Due Date</label>
                                <input type="date" class="form-control" id="dueDate" name="dueDate"
                                    value="{{ old('dueDate', $gejaladashboard->dueDate) }}" required>
                                <span class="text-danger">
                                    @error('dueDate')
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
