<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejala_dashboard extends Model
{
    use HasFactory;
    protected $table = 'gejala_dashboards';

    public function rules()
    {
        return $this->hasMany(Rule::class, 'gejala_id');
    }
}