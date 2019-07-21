<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kelas;

class SkemaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $kelass = Kelas::all();
    	return view('admin.admin-skema', compact('kelass'));
    }
    public function kelasstore(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'kelas' => 'required',
        ]);
        
        if ($validator->fails()) { return response()->json(['errors'=>$validator->errors()]);}
        
        $kelas= new Kelas();
        $kelas['kelas'] = $request->kelas;
        $kelas->save();

        return response()->json(['success'=>'Berhasil Menambahkan Data']);
    }
    public function kelasUpdate(Request $request)
    {
        $kelas = Kelas::find($request->id);
        $kelas['kelas'] = $request->kelas;
        $kelas->save();
        return back();
    }
}
