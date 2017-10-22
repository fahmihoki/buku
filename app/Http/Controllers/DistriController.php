<?php

namespace App\Http\Controllers;

use DB;
use App\Distri;
use Illuminate\Http\Request;

class DistriController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$distris = Distri::all();
         $distris = DB::table('distri')->paginate(3);

        return view('distri.index', ['distris' => $distris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('distri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([

        'nama_distri' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
       
    ]);

        $distri = new Distri;

        $distri->nama_distri = $request->nama_distri;
        $distri->alamat = $request->alamat;
        $distri->telepon = $request->telepon;
    

        $distri->save();
        return redirect('distri');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $distri = Distri::find($id);

        return view('distri.detail')->with('distri', $distri);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $distri = Distri::find($id);

        if(!$distri){
            abort(404);
        }

        return view('distri.edit')->with('distri', $distri);
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
        $this->validate($request,[
        'nama_distri' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
       
    ]);

        $distri = Distri::find($id);
        $distri->nama_distri = $request->nama_distri;
        $distri->alamat = $request->alamat;
        $distri->telepon = $request->telepon;
       

        $distri->save();

        return redirect('distri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $distri = Distri::find($id);
        $distri->delete();
        return redirect('distri')->with('message', 'salah satu list sudah di hapus');
    }
}
