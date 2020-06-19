<?php

namespace App\Http\Controllers;

use App\Contracts\MahasiswaRepositoryInterface;
use App\Nilai;
use App\Mahasiswa;
use App\Matakuliah;
use Illuminate\Http\Request;
use App\Http\Requests\NilaiStoreRequest;
use App\Repositories\MahasiswaRepository;
use App\Repositories\NilaiRepository;
use Yajra\DataTables\Facades\DataTables;

class NilaiController extends Controller
{
    private $mahasiswaRepo;
    private $nilairepository;
    public function __construct(MahasiswaRepositoryInterface $mahasiswaRepo, NilaiRepository $nilairepository)
    {
        $this->MahasiswaRepository = $mahasiswaRepo;
        $this->NilaiRepository = $nilairepository;
    }
    public function index()
    {
        if(request()->ajax()){
            $nilai = $this->NilaiRepository->index();
            return DataTables::of($nilai)->make(true);     
        }
        // $nilai = Mahasiswa::all();
        return view('nilai.index');
    }

    public function create()
    {
        $matakuliah = Matakuliah::all();
        $mahasiswa = $this->MahasiswaRepository->index();
        return view('nilai.create' , compact('matakuliah' , 'mahasiswa'));
    }

    public function store(NilaiStoreRequest $request)
    {
        $data = $request->validated();
        $this->NilaiRepository->store($data);
        return redirect()->route('nilai.index');
    }
}
