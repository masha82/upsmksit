<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;

    protected $model = Siswa::class;

    public function index()
    {
        return view('siswa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formsiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Siswa::create($request->all());
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
        //
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
        return DataTables::of(Siswa::query())
            ->addColumn('kelas', function ($data) {
               $kelas="";
               if($data->kelas == 1){
                $kelas="X";
               }elseif($data->kelas == 2){
                $kelas="XI";
               }elseif($data->kelas == 3){
                $kelas="XII";
               }
               return $kelas;
            })
            ->addColumn('link', function ($data) {
                $del = '<a href="' . $data->link . '" data-id="' . $data->link . '" target="_blank">unduh</a>';
                return $del;
            })
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Hapus</a>';
                return $del;
            })
            ->rawColumns(['link', 'action'])
            ->make(true);
    }
    
    public function hapus($id)
    {
        $this->model::destroy($id);
    }
}
