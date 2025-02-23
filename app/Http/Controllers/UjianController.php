<?php

namespace App\Http\Controllers;

use App\Models\Ujian;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;
    protected $model = Ujian::class;
    protected $route = 'ujianinfo';
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Ujian::query())
                ->addColumn('action', function ($data) {
                    $klik = '<a href="' . url( $data->linknya) . '" data-id="' . $data->id . '" class="btn btn-primary btn-sm">Klik Disini</a>';
                    return $klik;
                })
                ->make(true);
        }
        return view('infosoal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forminformasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ujian::create($request->all());
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
         return DataTables::of(Ujian::query())
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
