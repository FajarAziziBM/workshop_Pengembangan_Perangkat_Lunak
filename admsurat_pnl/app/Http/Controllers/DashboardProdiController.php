<?php

namespace App\Http\Controllers;

use App\Models\Approvesior;
use App\Models\Jurusan;
use App\Models\Prodi;
use Illuminate\Http\Request;

class DashboardProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'dashboard.data-prodi.index',
            [
                'prodis' => Prodi::all()
            ],
            [
                'approvesiors' => Approvesior::all()
            ],
            [
                'Jurusans' => Jurusan::all()
            ],


        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $validatedData = $request->validate([
            'kode_prodi' => 'required',
            'jenjang' => 'required',
            'nama_prodi' => 'required',
            'jabatan' => 'required',
            'nama_jurusan' => 'required',
        ]);

        Prodi::create($validatedData);
        return redirect()->route('data-prodi.index')->with('succes', 'Prodi Baru Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
