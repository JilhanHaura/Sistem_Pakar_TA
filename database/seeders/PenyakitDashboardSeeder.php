<?php

namespace Database\Seeders;
use App\Models\penyakitDashboard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyakitDashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        penyakitDashboard ::factory()->create([
            'kodePenyakit'=>'P01',
            'namaPenyakit'=>'Penyakit Tatelo', 'dueDate'=> '2023-09-21'
        ]);
        penyakitDashboard ::factory()->create([
            'kodePenyakit'=>'P02',
            'namaPenyakit'=>'Penyakit Gumboro', 'dueDate'=> '2023-09-21'
        ]);
        penyakitDashboard ::factory()->create([
            'kodePenyakit'=>'P03',
            'namaPenyakit'=>'Penyakit Ngorok', 'dueDate'=> '2023-09-21'
        ]);
        penyakitDashboard ::factory()->create([
            'kodePenyakit'=>'P04',
            'namaPenyakit'=>'Penyakit Flu Burung', 'dueDate'=> '2023-09-21'
        ]);
        penyakitDashboard ::factory()->create([
            'kodePenyakit'=>'P05',
            'namaPenyakit'=>'Penyakit Kolibasilosis', 'dueDate'=> '2023-09-21'
        ]);
        penyakitDashboard ::factory()->create([
            'kodePenyakit'=>'P06',
            'namaPenyakit'=>'Penyakit Snot', 'dueDate'=> '2023-09-21'
        ]);
        penyakitDashboard ::factory()->create([
            'kodePenyakit'=>'P07',
            'namaPenyakit'=>'Penyakit Feses Kapur', 'dueDate'=> '2023-09-21'
        ]);
    }
}