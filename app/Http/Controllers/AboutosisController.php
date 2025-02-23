<?php

namespace App\Http\Controllers;

use App\Models\Aboutosis;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AboutosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;

    protected $model = Aboutosis::class;
    protected $route = 'tentangosis';
    public function index()
    {
        $data = Aboutosis::orderBy('created_at', 'DESC')->first();
        return view('osis',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formosis');
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
        $file->move(public_path("foto_osis"), $new_name);
        $data['foto'] = $new_name;
        Aboutosis::create($data);
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
        $data = $this->model::find($id);
        return view('editosis', compact('data'));
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
        $data = $this->model::find($id);
        $data->tentang=$request->tentang;
        $data->update();
        return redirect(route($this->route . '.create'));
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
            ->addColumn('foto', function ($data) {
                $del = '<img src="' . asset('foto_osis/' . $data->foto) . '" class="col-sm-5 p-5 p-sm-0 pe-sm-3">';
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
