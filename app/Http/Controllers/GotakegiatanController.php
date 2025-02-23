<?php

namespace App\Http\Controllers;

use App\Models\Gotakegiatan;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class GotakegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;

    protected $model = Gotakegiatan::class;  
    protected $route = 'gotakeg'; 
    public function index()
    {
        $data = Gotakegiatan::orderBy('created_at','DESC')->paginate(5);
        return view('gotakegiatan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formgotakegiatan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $file = $request->file('foto');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("foto_gotakeg"), $new_name);
        $data['foto'] = $new_name;
        Gotakegiatan::create($data);
        return redirect()->back()->with(['success' => 'Data berhasil disimpan.']);  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gotakegiatan  $gotakegiatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Gotakegiatan::findOrFail($id);
        $kegiatanku = Gotakegiatan::orderBy('created_at', 'DESC')->paginate(5);
        return view('showgotakeg', compact('data', 'kegiatanku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gotakegiatan  $gotakegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->model::find($id);
        return view('editgotakeg', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gotakegiatan  $gotakegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->model::find($id);
        $data->nama_kegiatan=$request->nama_kegiatan;
        $data->isi=$request->isi;
        $data->update();
        return redirect(route($this->route . '.create'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gotakegiatan  $gotakegiatan
     * @return \Illuminate\Http\Response
     */
    public function anyData(Request $request)
    {
        return DataTables::of($this->model::query())
            ->addColumn('foto', function ($data) {
                $del = '<img src="' . asset('foto_gotakeg/' . $data->foto) . '" class="col-sm-5 p-5 p-sm-0 pe-sm-3">';
                return  $del;
            })
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Hapus</a>';
                $edit = '<a href="' . route($this->route . '.edit', $data->id) . '" class="btn btn-primary">Edit</a>';
                return $edit . '&nbsp' . $del;
            })
            ->rawColumns(['foto', 'action'])
            ->make(true);
    }

    public function hapus($id)
    {
        $this->model::destroy($id);
    }
}
