<?php

namespace App\Http\Controllers;

use App\Models\Opini;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class OpiniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;

    protected $model = Opini::class;

    public function index()
    {
        $data = Opini::orderBy('created_at', 'DESC')->paginate(9);
        return view('opini', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formopini');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Opini::create($request->all());
        return redirect()->back()->with(['success' => 'Data berhasil disimpan.']);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function anyData(Request $request)
    {
        return DataTables::of($this->model::query())
            ->addColumn('editor',function ($data) {
                    $editor = "";
                    if ($data->editor == 1) {
                        $editor = "Guru";
                    } elseif ($data->editor == 2) {
                        $kondisi = "Siswa";
                    } elseif ($data->editor == 3) {
                        $editor = "Wali Murid";
                    }
                    return $editor;})
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Hapus</a>';
                return $del;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    
    public function hapus($id)
    {
        $this->model::destroy($id);
    }
}
