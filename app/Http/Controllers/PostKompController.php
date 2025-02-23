<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Postkompetensi;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PostKompController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;

    protected $model = Postkompetensi::class;
    protected $route = 'jurusan';
    public function index()
    {
        $data = Postkompetensi::orderBy('created_at', 'DESC')->get();
        return view('jurusan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formkompetensi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $file = $request->file('foto');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("foto_kompetensi"), $new_name);
        $data['foto'] = $new_name;
        Postkompetensi::create($data);
        return redirect()->back()->with(['success' => 'Data berhasil disimpan.']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Postkompetensi::findOrFail($id);
        $jurusan = Postkompetensi::orderBy('created_at', 'DESC')->paginate(5);
        $fotojurusan = Foto::orderBy('created_at', 'DESC')->get();
        return view('showjurusan', compact('data', 'jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->model::find($id);
        return view('editkompetensi', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->model::find($id);
        $data->nama_keahlian=$request->nama_keahlian;
        $data->isi=$request->isi;
        $data->update();
        return redirect(route($this->route . '.create'));
    }

    public function tambah($id)
    {
        $data = Postkompetensi::findOrFail($id);
        return view('addfoto', compact('data'));
    }

    public function simpan($id, Request $request)
    {
        $data = $request->all();
        $file = $request->file('foto');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("foto_jurusan"), $new_name);
        $data['foto'] = $new_name;
        Foto::create([
            'foto'=>$data['foto'], 
            'id_keahlian'=>$id
        ]);
        return redirect(route($this->route . '.create'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function anyData(Request $request)
    {
        return DataTables::of($this->model::query())
            ->addColumn('foto', function ($data) {
                $foto = '<img src="' . asset('foto_kompetensi/' . $data->foto) . '" class="col-sm-5 p-5 p-sm-0 pe-sm-3">';
                return $foto;
            })

            ->addColumn('isi', function ($data) {
                return substr(strip_tags(str_replace('&nbsp;', ' ', $data->isi)),0,100) .'....';
            })
            
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Hapus</a>';
                $edit = '<a href="' . route($this->route . '.edit', $data->id) . '" class="btn btn-primary">Edit</a>';
                $show = '<a href="' . route($this->route . '.tambah', $data->id) . '" class="btn btn-primary">Tambah Foto</a>';
                return $show . '&nbsp' . $edit . '&nbsp' . $del;
            })
            ->rawColumns(['foto', 'action'])
            ->make(true);
    }
    public function hapus($id)
    {
        $this->model::destroy($id);
    }

}
