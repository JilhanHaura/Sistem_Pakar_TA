<div class="modal fade" id="ModalPenyakit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="/admin-penyakit" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header">
                                    <h4>Tambahkan Data Penyakit</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Kode Penyakit</label>
                                        <input type="text" class="form-control" name="kode_penyakit" required
                                            value="{{ old('kode_penyakit') }}">
                                        @error('kode_penyakit')
                                            <p class="text text-danger">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Nama Penyakit</label>
                                        <input type="text" class="form-control" name="nama_penyakit" required
                                            value="{{ old('nama_penyakit') }}"></input>
                                        @error('nama_penyakit')
                                            <p class="text text-danger">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Definisi</label>
                                        <input type="text" class="form-control" name="definisi" required
                                            value="{{ old('definisi') }}"></input>
                                        @error('definisi')
                                            <p class="text text-danger">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Penangganan</label>
                                        <input type="text" class="form-control" name="penangganan" required
                                            value="{{ old('penangganan') }}"></input>
                                        @error('penangganan')
                                            <p class="text text-danger">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Due Date</label>
                                        <input type="date" class="form-control" name="due_date" required
                                            value="{{ old('due_date') }}"></input>
                                        @error('due_date')
                                            <p class="text text-danger">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0">
                                        <label for="gambar">Gambar</label>
                                        <input type="file" class="form-control"
                                            @error('gambar') is-invalid
                                        @enderror
                                            id="gambar" name="gambar">
                                        @error('gambar')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
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
        </div>
    </div>
</div>
