@extends('Admin.layout.main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Gejala</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item">Data Gejala</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session()->has('pesan'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('pesan') }} </div>
                            @endif
                            <div class="d-flex justify-content-end mb-3">
                                <a class="btn btn-success active" href="#" data-toggle="modal"
                                    data-target="#ModalGejala">Add Data</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Kode Gejala</th>
                                            <th>Nama Gejala</th>
                                            <th>Due Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($gejaladashboards as $gejaladashboard)
                                            <tr>
                                                <td class="text-center">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>{{ $gejaladashboard->kode_gejala }}</td>
                                                <td>{{ $gejaladashboard->nama_gejala }}</td>
                                                <td>{{ $gejaladashboard->due_date }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item"
                                                                href="admin-gejala/{{ $gejaladashboard->id }}/edit">Edit</a>
                                                            <form action="{{ url('admin-gejala/' . $gejaladashboard->id) }}"
                                                                method="POST" class="d-inline">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button class="dropdown-item"
                                                                    onclick="return confirm('Yakin akan menghapus data ?')">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    @include('Admin.Gejala.create-gejala')
@endsection
