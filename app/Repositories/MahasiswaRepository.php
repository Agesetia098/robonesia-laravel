<?php

namespace App\Repositories;

use App\Contracts\MahasiswaRepositoryInterface;
use App\Mahasiswa;
use Illuminate\Support\Facades\Auth;

class MahasiswaRepository implements MahasiswaRepositoryInterface
{
    public function index(){
        return Mahasiswa::with('program')->get();
    }
    public function store($data){
        // return Mahasiswa::create([
          
        //     'user_id' => Auth::id()
        // ]);
        return Auth::user()->mahasiswa()->create([
            'nama' => $data['nama'],
            'program_id' => $data['program_id'],
        ]);
    }
    public function destroy($id){
        return Auth::user()->mahasiswa()->find($id)->delete();
    }
}
