<?php

/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 04/10/17
 * Time: 9:37
 */

namespace App\Traits;


use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

trait Table
{
    public function anyData(Request $request)
    {
        return DataTables::of($this->model::query())
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Hapus</a>';
                return  $del;
            })
            ->make(true);
    }

    public function destroy($id)
    {
        $this->model::destroy($id);
    }
}
