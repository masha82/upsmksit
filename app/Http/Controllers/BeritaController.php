<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;

    protected $model = Berita::class;
    protected $route = 'berita';
    public function index()
    {
        $data = Berita::orderBy('created_at', 'DESC')->paginate(20);
        return view('berita', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formberita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->judul,'-');
        $data = $request->all();
        $file = $request->file('foto');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("gambar_berita"), $new_name);
        $data['foto'] = $new_name;
        $data['slug'] = $slug;
        $data = Berita::create($data);
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
        $berita =  Berita::all()->take(5);
        $data = Berita::where('slug',$id)->first();
        return view('shownews', compact('data','berita'));
    }

    public function tampilan($id)
    {
        $data = Berita::orderBy('created_at', 'DESC')->paginate(20);
        return view('tampilberita', compact('data'));
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
        return view('editberita', compact('data'));
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
        $data->kategori=$request->kategori;
        $data->isi=$request->isi;
        $data->editor=$request->editor;
        $data->update();
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
                $foto = '<img src="' . asset('gambar_berita/' . $data->foto) . '" class="col-sm-5 p-5 p-sm-0 pe-sm-3">';
                return $foto;
            })
            ->addColumn('action', function ($data) {
                // $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Hapus</a>';
                $edit = '<a href="' . route($this->route . '.edit', $data->id) . '" class="btn btn-primary">Edit</a>';
                return $edit . '&nbsp';
            })
            ->rawColumns(['foto', 'action'])
            ->make(true);
    }
    public function hapus($id)
    {
        $this->model::destroy($id);
    }
}
