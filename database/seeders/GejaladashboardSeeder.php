<?php

namespace Database\Seeders;
use App\Models\gejala_dashboard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GejaladashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        gejala_dashboard ::factory()->create([
            'kode_gejala'=>'G01',
            'nama_gejala'=>'Keluarnya cairan dari hidung dan mata.',
            'due_date'=> '2023-09-21'
        ]);
        gejala_dashboard ::factory()->create([
            'kode_gejala'=>'G02',
            'nama_gejala'=>'Perubahan perilaku seperti kelesuan dan depresi.',
            'due_date'=> '2023-09-21'
        ]);
        gejala_dashboard ::factory()->create([
            'kode_gejala'=>'G03',
            'nama_gejala'=>'Gangguan pernapasan.', 'due_date'=> '2023-09-21'
        ]);
        gejala_dashboard ::factory()->create([
            'kode_gejala'=>'G04',
            'nama_gejala'=>'Gangguan pencernaan seperti diare.', 'due_date'=> '2023-09-21'
        ]);
        gejala_dashboard ::factory()->create([
            'kode_gejala'=>'G05',
            'nama_gejala'=>'Gemetaran otot dan kejang.', 'due_date'=> '2023-09-21'
        ]);
        gejala_dashboard ::factory()->create([
            'kode_gejala'=>'G06',
            'nama_gejala'=>'Gejala neurologis seperti kepala terkulai.', 'due_date'=> '2023-09-21'
        ]);
        gejala_dashboard ::factory()->create([
            'kode_gejala'=>'G07',
            'nama_gejala'=>'Penurunan berat badan.', 'due_date'=> '2023-09-21'
        ]);
        gejala_dashboard ::factory()->create([
            'kode_gejala'=>'G08',
            'nama_gejala'=>'Kehilangan nafsu makan.', 'due_date'=> '2023-09-21'
        ]);
        gejala_dashboard ::factory()->create([
            'kode_gejala'=>'G09',
            'nama_gejala'=>'Diare berwarna putih dan kapur.', 'due_date'=> '2023-09-21'
        ]);
        gejala_dashboard ::factory()->create([
            'kode_gejala'=>'G10',
            'nama_gejala'=>'Kelemahan umum.', 'due_date'=> '2023-09-21'
        ]);
        gejala_dashboard ::factory()->create([
            'kode_gejala'=>'G11',
            'nama_gejala'=>'Demam ringan.', 'due_date'=> '2023-09-21'
        ]);
        gejala_dashboard ::factory()->create([
            'kode_gejala'=>'G12',
            'nama_gejala'=>'Diare cair.', 'due_date'=> '2023-09-21'
        ]);
        gejala_dashboard ::factory()->create([
            'kode_gejala'=>'G13',
            'nama_gejala'=>'Perubahan warna kotoran.', 'due_date'=> '2023-09-21'
        ]);
    }
}