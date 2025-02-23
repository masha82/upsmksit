<?php

namespace App\Http\Controllers;

use App\Models\Kegiatanosis;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class KegiatanosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;

    protected $model = Kegiatanosis::class;

    public function index()
    {
        $data = Kegiatanosis::orderBy('created_at', 'DESC')->paginate(20);
        return view('kegiatanosis', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formkegosis');
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
        $file->move(public_path("foto_kegosis"), $new_name);
        $data['foto'] = $new_name;
        Kegiatanosis::create($data);
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
        $data = Kegiatanosis::findOrFail($id);
        $kegiatan = Kegiatanosis::orderBy('created_at', 'DESC')->paginate(5);
        return view('showkegiatan', compact('data', 'kegiatan'));
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
                $foto = '<img src="' . asset('foto_kegosis/' . $data->foto) . '" class="col-sm-5 p-5 p-sm-0 pe-sm-3">';
                return $foto;
            })
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Hapus</a>';
                return $del;
            })
            ->rawColumns(['foto', 'action'])
            ->make(true);
    }
    
    public function hapus($id)
    {
        $this->model::destroy($id);
    }
}
