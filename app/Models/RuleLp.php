<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuleLp extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'rule_lps'; // Nama tabel sesuaikan dengan nama tabel yang digunakan di database

    public function gejala()
    {
        return $this->belongsToMany(gejaladashboard::class, 'rule_gejala', 'rule_id', 'gejala_id');
    }

    public function penyakit()
    {
        return $this->belongsTo(penyakitDashboard::class, 'penyakit_id');
    }
}