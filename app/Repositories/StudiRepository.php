<?php

namespace App\Repositories;

use App\Contracts\StudiRepositoryInterface;
use App\Studi;

class StudiRepository implements StudiRepositoryInterface
{
    public function index(){
        return Studi::all();
    }
}
