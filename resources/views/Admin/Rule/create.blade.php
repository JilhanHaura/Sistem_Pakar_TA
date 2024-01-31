<div class="modal fade" id="ModalRule" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="/admin-rule">
                                @csrf
                                <div class="card-header">
                                    <h4>Tambahkan Data Rule</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama Penyakit</label>
                                        <select class="form-select" name="penyakit_id">
                                            @foreach ($penyakit_dashboards as $penyakitdashboards)
                                                <option value="{{ $penyakitdashboards->id }}">
                                                    {{ $penyakitdashboards->nama_penyakit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Nama Gejala</label>
                                        <select class="form-select" name="gejala_id">
                                            @foreach ($gejaladashboards as $gejaladashboard)
                                                <option value="{{ $gejaladashboard->id }}">
                                                    {{ $gejaladashboard->nama_gejala }}</option>
                                            @endforeach
                                        </select>
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
