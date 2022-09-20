<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $guarded = [];
    
    public function kelas(){
        return $this->belongsToMany(kelas::class);
    }
}
