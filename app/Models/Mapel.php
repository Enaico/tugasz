<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Mapel extends Model
{
    use HasFactory;
    
    protected $table = 'mapel';

    protected $guarded = [];

    public function mapel(){
        return $this->belongsToMany(Mapel::class);
    }
}
 