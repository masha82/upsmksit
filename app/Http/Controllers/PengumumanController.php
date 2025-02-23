<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;

    protected $model = Pengumuman::class;

    public function index()
    {
        $data = Pengumuman::orderBy('created_at','DESC')->paginate(5);
        return view('pengumuman', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formpengumuman');
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
        $thumbnail = $request->file('thumbnail');
        $new_name = rand() . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->move(public_path("thumbnail_pengumuman"), $new_name);
        $data['thumbnail'] = $new_name;

        $file = $request->file('file');
        $baru = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("file_pengumuman"), $baru);
        $data['file'] = $baru;
        Pengumuman::create($data);
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
        $data = Pengumuman::findOrFail($id);
        $info = Pengumuman::orderBy('created_at', 'DESC')->paginate(5);
        return view('showpengumuman', compact('data', 'info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
                $foto = '<img src="' . asset('thumbnail_pengumuman/' . $data->foto) . '" class="col-sm-5 p-5 p-sm-0 pe-sm-3">';
                return $foto;
            })
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Hapus</a>';
                return $del;
            })
            ->rawColumns(['foto', 'file', 'action'])
            ->make(true);
    }
    
    public function hapus($id)
    {
        $this->model::destroy($id);
    }
}
