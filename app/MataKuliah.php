<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'pelajarans';
    protected $fillable = ['nama'];

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class,'mahasiswas','pelajaran_id','mahasiswa_id')
        ->withPivot('nilai');
    }
}
