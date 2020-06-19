<?php

namespace App\Repositories;

use App\Contracts\NilaiRepositoryInterface;
use App\Mahasiswa;
use App\Nilai;

class NilaiRepository implements NilaiRepositoryInterface
{
    public function index(){
        return Mahasiswa::with('pelajaran')->get();
    }
    public function store($data){
        return  Nilai::create([
            'mahasiswa_id' => $data['mahasiswa_id'],
            'pelajaran_id' => $data['pelajaran_id'],
            'nilai' => $data['nilai']
        ]);
    }
    public function destroy($id){
        return Nilai::find($id)->delete();
    }
}
