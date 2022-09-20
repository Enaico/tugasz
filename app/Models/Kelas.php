<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Mapel;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $guarded = [];

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

    public function guru(){
        return $this->belongsTo(Guru::class);
    }

    public function mapel(){
        return $this->belongsTo(Mapel::class);
    }
}
