<div class="modal fade" id="ModalGejala" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="/admin-gejala">
                                @csrf
                                <div class="card-header">
                                    <h4>Tambahkan Data Gejala</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Kode Gejala</label>
                                        <input type="text" class="form-control" name="kodeGejala">
                                        @error('kodeGejala')
                                            <p class="text text-danger">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Nama Gejala</label>
                                        <input type="text" class="form-control" name="namaGejala"></input>
                                        @error('namaGejala')
                                            <p class="text text-danger">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Due Date</label>
                                        <input type="date" class="form-control" name="dueDate"></input>
                                        @error('dueDate')
                                            <p class="text text-danger">
                                                {{ $message }}</p>
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
