<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruleDashboard extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function penyakitDashboard()
    {
        return $this->belongsTo(penyakit_dashboard::class,'penyakit_id');
    }
    public function gejaladashboard()
    {
        return $this->belongsTo(gejala_dashboard::class,'gejala_id');
    }
}