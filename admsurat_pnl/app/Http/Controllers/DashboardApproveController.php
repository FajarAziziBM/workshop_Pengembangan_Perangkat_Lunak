<?php

namespace App\Http\Controllers;

use App\Models\Approvesior;
use App\Models\Jurusan;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardApproveController extends Controller
{
    public function index()
    {
        return view(
            'dashboard.approve.index',
            [
                'appapprovesiors' => Approvesior::all()
            ],
            [
                'prodis' => Prodi::all()
            ],
            [
                'jurusans' => Jurusan::all()
            ],
            [
                'users' => User::all()
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
            'nama' => 'required',
            'NIP' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        Approvesior::create($validatedData);
        return redirect()->route('data-approvesior.index')->with('succes', 'Approvesior Baru Telah Ditambahkan!');
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
            'nama' => 'required',
            'NIP' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ];

        $validatedData = $request->validate($rules);

        // dd($validatedData);

        Approvesior::where('id', $request->id)->update($validatedData);

        return redirect()->route('data-approvesior.index')->with('success', "Data Approvesior $request->nama berhasil diperbarui!");
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
            $id = Approvesior::find($id);
            $id->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == 23000) {
                //SQLSTATE[23000]: Integrity constraint violation
                return redirect()->route('data-approvesior.index')->with('failed', "Approvesior $id->Approvesior tidak dapat dihapus, karena sedang digunakan pada tabel lain!");
            }
        }
        return redirect()->route('data-approvesior.index')->with('success', "Approvesior $id->Approvesior berhasil dihapus!");
    }
}
