<?php

namespace App\Http\Controllers;

use App\Models\Approvesior;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class DashboardJurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'dashboard.data-jurusan.index',
            [
                'jurusans' => Jurusan::all()
            ],
            [
                'approvisiors' => Approvesior::all()
            ],
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
            'kode_jurusan' => 'required',
            'nama_jurusan' => 'required',
            'jabatan' => 'required',
        ]);

        Jurusan::create($validatedData);
        return redirect()->route('data-approvesior.index')->with('succes', 'Jurusan Baru Telah Ditambahkan!');
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
    public function update(Request $request)
    {
        $rules = [
            'kode_jurusan' => 'required',
            'nama_jurusan' => 'required',
            'jabatan' => 'required',
        ];

        $validatedData = $request->validate($rules);

        // dd($validatedData);

        Jurusan::where('id', $request->id)->update($validatedData);

        return redirect()->route('data-approvesior.index')->with('success', "Data Jurusan $request->nama_jurusan berhasil diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $id = Jurusan::find($id);
            $id->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == 23000) {
                //SQLSTATE[23000]: Integrity constraint violation
                return redirect()->route('data-approvesior.index')->with('failed', "Jurusan $id->jurusan tidak dapat dihapus, karena sedang digunakan pada tabel lain!");
            }
        }
        return redirect()->route('data-approvesior.index')->with('success', "Jurusan $id->jurusan berhasil dihapus!");
    }
}
