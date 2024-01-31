@extends('LandingPage.layout.main')
@section('content')
    @push('css')
        <style>
            .wizard-step {
                display: none;
                padding: 50px;
                /* Menambahkan padding pada setiap langkah */
                border: 1px solid #ccc;
                /* Menambahkan border untuk efek card */
                border-radius: 5px;
                /* Mengubah sudut menjadi rounded */
                background-color: #fff;
                /* Memberikan latar belakang putih */
            }

            .wizard-step.active {
                display: block;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .next-button,
            .prev-button {
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 10px 20px;
                cursor: pointer;
            }

            .submit-button {
                background-color: #28a745;
                color: #fff;
                border: none;
                padding: 10px 20px;
                cursor: pointer;
            }

            .card {
                margin: 50px
                    /* Memberikan jarak antara card */
            }
        </style>
    @endpush
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
    <!-- Wizard Step 1 -->
    <div id="wizard-step-1" class="wizard-step card active">
        <h2>Langkah 1: Informasi Personal</h2>
        <form id="step-1-form">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="umur">Umur:</label>
                <input type="number" id="umur" name="umur" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" required>
            </div>
        </form>
        <button class="next-button" onclick="nextStep(1)">Selanjutnya</button>
    </div>

    <!-- Wizard Step 2 -->
    <div id="wizard-step-2" class="wizard-step card">
        <h2>Langkah 2: Diagnosis Penyakit Ayam</h2>
        <form id="step-2-form" action="{{ route('diagnose') }}" method="POST">
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
            <button class="prev-button" onclick="prevStep(2)">Sebelumnya</button>
            <button class="submit-button" onclick="submitForm()">Diagnosa</button>
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


    @push('js')
        <script>
            let currentStep = 1;

            function nextStep(step) {
                if (step === 1) {
                    const nama = document.getElementById('nama').value;
                    const umur = document.getElementById('umur').value;
                    const alamat = document.getElementById('alamat').value;
                    const pekerjaan = document.getElementById('pekerjaan').value;

                    // Lakukan validasi data sesuai kebutuhan

                    currentStep = 2;
                    updateWizard();
                }
            }

            function prevStep(step) {
                if (step === 2) {
                    currentStep = 1;
                    updateWizard();
                }
            }

            function submitForm() {
                const gejala = []; // Dapatkan gejala dari formulir langkah kedua

                // Kirim data ke server atau lakukan diagnosis berdasarkan data yang telah dikumpulkan

                // Tampilkan hasil diagnosis atau tindakan sesuai kebutuhan Anda
            }

            function updateWizard() {
                const wizardSteps = document.querySelectorAll('.wizard-step');
                wizardSteps.forEach((step) => {
                    step.classList.remove('active');
                });

                const currentStepElement = document.getElementById(`wizard-step-${currentStep}`);
                if (currentStepElement) {
                    currentStepElement.classList.add('active');
                }
            }

            window.onload = function() {
                updateWizard();
            };
        </script>
    @endpush
@endsection
