<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyakit_dashboard extends Model
{
    use HasFactory;
    protected $table = 'penyakit_dashboards';
    protected $fillable = [
        'kode_penyakit',
        'nama_penyakit' ,
        'definisi' ,
        'penangganan' ,
        'due_date' ,
        'gambar'
        // Kolom-kolom lain yang ingin diizinkan untuk mass assignment
    ];

    public function rules()
    {
        return $this->hasMany(Rule::class, 'penyakit_id');
    }
}