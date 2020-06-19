<?php

namespace App\Http\Controllers;

use App\Studi;
use Illuminate\Http\Request;

use App\Repositories\StudiRepository;
use App\Http\Requests\StudiStoreRequest;
use Yajra\DataTables\Facades\DataTables;

class StudiController extends Controller
{
    private $studirepository;

    public function __construct(StudiRepository $studiRepository)
    {
        $this->studirepository  = $studiRepository;
    }
    public function index()
    {
        if(request()->ajax()){
            $program = $this->studirepository->index();
            return DataTables::of($program)->make(true);     
        }
        return view('studi.index');
    }

    public function create()
    {
        return view('studi.create');
    }

    public function store(StudiStoreRequest $request)
    {
        $data = $request->validated();

        Studi::create([
            'nama' => $data['nama']
        ]);
        return redirect()->route('studi.index');
    }
}
