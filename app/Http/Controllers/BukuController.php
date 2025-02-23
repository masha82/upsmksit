<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;
    protected $model = Buku::class;
    protected $route = 'infobuku';
    public function index()
    {
        $data = Buku::orderBy('created_at', 'DESC')->get();
        return view('listbuku', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formbuku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Buku::create($request->all());
        return redirect()->back()->with(['success' => 'Data berhasil disimpan.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->model::find($id);
        return view('editbuku', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->model::find($id);
        $data->no_buku=$request->no_buku;
        $data->judul=$request->judul;
        $data->penerbit=$request->penerbit;
        $data->update();
        return redirect(route($this->route . '.create'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function anyData(Request $request)
    {
        return DataTables::of($this->model::query())
        ->addColumn('action', function ($data) {
            $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Hapus</a>';
            $edit = '<a href="' . route($this->route . '.edit', $data->id) . '" class="btn btn-primary">Edit</a>';
            return $edit . '&nbsp' . $del;
        })
            ->rawColumns(['action'])
            ->make(true);
    }
    
    public function hapus($id)
    {
        $this->model::destroy($id);
    }
}
