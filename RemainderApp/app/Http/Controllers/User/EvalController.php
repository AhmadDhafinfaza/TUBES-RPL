<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use App\Models\Task;
use App\Models\User;

use Illuminate\Http\Request;

class EvalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $id)
    {
        //
        $data['judul'] = 'Eval';
        $data['class'] = 'Eval';
        $data['subclass'] = 'Eval';
        $data['q'] = Task::all();
        //$data['rows'] = Photographer::where('nama_user', 'like', '%' . $request->q . '%')->get();
        return view('user.eval.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['judul'] = 'Tambah Task';
        $data['class'] = 'Task';
        $data['subclass'] = 'Task';
        $data['d'] = Task::all();
        return view('user.task.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'judul' => 'required',
            'lokasi_barang' => '',
            'deskripsi' => '',
            'tgl' => '',
            'jam' => '',
            'skala_prioritas' => '',
            'status' => '',
            'kategori' => '',
        ]);

        Task::create([
			'judul' => $request->judul,
            'lokasi_barang'=> $request->lokasi_barang,
            'deskripsi' => $request->deskripsi,
            'tgl' => $request->tgl,
            'jam'=> $request->jam,
            'skala_prioritas' => $request->skala_prioritas,
            'status' => $request->status,
            'kategori' => $request->kategori,
		]);

        

        return redirect()->route('user.task')->with('succes','Data Berhasil di Input');
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
        $data['judul'] = 'Edit Task';
        $data['class'] = 'Task';
        $data['subclass'] = 'Task';
        $data['row'] = Task::find($id);
        return view('user.task.edit', $data);
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
        $request->validate([
            'judul' => 'required',
            'lokasi_barang' => '',
            'deskripsi' => '',
            'tgl' => '',
            'jam' => '',
            'skala_prioritas' => '',
            'status' => '',
            'kategori' => '',
        ]);

        $aksi = Task::find($id);
        $aksi->judul = request('judul');
        $aksi->lokasi_barang = request('lokasi_barang');
        $aksi->deskripsi = request('deskripsi');
        $aksi->tgl = request('tgl');
        $aksi->jam = request('jam');
        $aksi->skala_prioritas = request('skala_prioritas');
        $aksi->status = request('status');
        $aksi->kategori = request('kategori');
        $aksi->save();

        return redirect()->route('user.task')->with('succes','Data Berhasil di Input');
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
        $aksi = Task::find($id);
        $aksi->delete();
        return redirect()->route('user.task')->with('succes','Data Berhasil di Hapus');
    }
}
