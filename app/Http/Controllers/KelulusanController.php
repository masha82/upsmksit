<?php

namespace App\Http\Controllers;

use App\Models\Kelulusan;
use App\Models\Countdown;
use App\Traits\Table;
use Illuminate\Http\Request;
//use PHPUnit\Framework\Constraint\Count;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
use DB;

class KelulusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;
    protected $model = Kelulusan::class;
    protected $route = 'graduate';
     public function index()
    {
        $lulus = Kelulusan::orderBy('namasiswa', 'ASC')->get();
        return view('hasilkelulusan', compact('lulus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formlulus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kelulusan::create($request->all());
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
    
    public function infograduate()
    {
        $info = Countdown::orderBy('created_at', 'DESC')->first();
        date_default_timezone_set('Asia/Jakarta');
        $skg = date('Y-m-d H:i:s');
        $tj = DB::table('countdown')->orderby('id','DESC')->take(1)->first();
        // dd ($tj);
        $tujuan = $tj->time;
        if($skg>=$tujuan){
            return view('kelulusan_input', compact('info'));

        }else{
            return view('kelulusan', compact('info'));
        }
        
    }

    public function waktu()
    {
        return view('countdown');
    }

    public function simpanwaktu(Request $request)
    {
        Countdown::create($request->all());
        return redirect()->back()->with(['success' => 'Data berhasil disimpan.']);
    }

    public function showwaktu(Request $request)
    {
        $show = Countdown::orderBy('created_at', 'ASC')->first();
        return view('countdown', compact('show'));
    }

    public function search(Request $request)
    {
        $keyword = $request->no_peserta;
        $data = Kelulusan::where('no_peserta', $keyword)->first();
        if($data){
            return view('infokelulusan', compact('data'));
        }else{
            echo "Data Tidak Ditemukan, Silakan Periksa Inputan Anda.";
        }
        
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
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Hapus</a>';
                return $del;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function datawaktu(Request $request)
    {
        return DataTables::of(Countdown::query())
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Hapus</a>';
                return $del;
            })
            ->addColumn('time', function ($data) {
                return Carbon::parse($data->time)->isoFormat('dddd, D MMMM Y HH:m');
            })
            ->rawColumns(['action'])
            ->make(true); 
    }
}
