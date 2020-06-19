<?php

namespace App\Contracts;

interface NilaiRepositoryInterface
{
    public function index();

    public function store($data);

    public function destroy($id);
}
