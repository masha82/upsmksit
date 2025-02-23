<?php

namespace App\Http\Controllers;

use App\Models\Bukutamu;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BukutamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;
    protected $model = Bukutamu::class;
    protected $route = 'guestbook';
    public function index()
    {
        $data = Bukutamu::orderBy('created_at', 'DESC')->get();
        return view('viewbukutamu', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formbukutamu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Bukutamu::create($request->all());
        return redirect()->back()->with(['success' => 'Data berhasil disimpan.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function show(Bukutamu $bukutamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function edit(Bukutamu $bukutamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bukutamu $bukutamu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bukutamu  $bukutamu
     * @return \Illuminate\Http\Response
     */
    public function anyData(Request $request)
    {
        return DataTables::of($this->model::query())
        ->addColumn('peran', function ($data) {
            $peran = "";
            if ($data->peran == 1) {
                $peran = "Guru";
            } elseif ($data->peran == 2) {
                $peran = "TAS";
            } elseif ($data->peran == 3) {
                $peran = "Siswa";
            }
            return $peran;
        })
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
