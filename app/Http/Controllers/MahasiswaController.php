<?php

namespace App\Http\Controllers;

use App\Studi;
use App\Mahasiswa;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Auth;
use App\Repositories\MahasiswaRepository;
use App\Http\Requests\MahasiswaStoreRequest;
use App\Contracts\MahasiswaRepositoryInterface;

class MahasiswaController extends Controller
{
    private $mahasiswaRepository;

    public function __construct(MahasiswaRepositoryInterface $mahasiswaRepo)
    {
        $this->mahasiswaRepository = $mahasiswaRepo;
    }
    public function index()
    {
        $mahasiswa = $this->mahasiswaRepository->index();
        if(request()->ajax()){
        return DataTables::of($mahasiswa)->make(true);
        }
        // dd($mahasiswa);
        return view('mahasiswa.index');
    }

    public function create()
    {
        $studi = Studi::all();
        return view('mahasiswa.create', compact('studi'));
    }

    public function store(MahasiswaStoreRequest $request)
    {
        $data = $request->validated();

        $this->mahasiswaRepository->store($data);
        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id){
        $this->mahasiswaRepository->destroy($id);
        return redirect()->route('mahasiswa.index');
    }

}
