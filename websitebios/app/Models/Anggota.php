<?php

namespace App\Models;
use App\Http\Controllers\AnggotaController;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $fillable = ['nim', 'nama', 'divisi', 'foto'];
    protected $table = "anggota";

    public function anggota(){
        return $this->belongsTo(Anggota::class);
    }
}
