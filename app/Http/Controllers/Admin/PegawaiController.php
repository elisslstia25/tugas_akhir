<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class PegawaiController extends Controller
{
   
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.pegawai.index', $data);
    }

   
    public function create()
    {
        return view('admin.pegawai.create');
    }

   
    public function store(Request $request)
    {
        $pegawai = New Pegawai();
        
    }

   
    public function show(string $id)
    {
        //
    }

   
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

   
    public function destroy(string $id)
    {
        //
    }
}
