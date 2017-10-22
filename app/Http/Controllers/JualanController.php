<?php
 
namespace App\Http\Controllers;

use App\Buku;
use App\User;
use App\Jualan;
use Illuminate\Http\Request;

class JualanController extends Controller
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
        $jualans = Jualan::paginate(3);
        return view('jualan.index',compact('jualans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $buku = Buku::all();
        return view('jualan.create',compact(['users'],['buku']));
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

        'buku_id' => 'required',
        'users_id' => 'required',
        'jumlah' => 'required',
        'total' => 'required',
     
       
    ]);

        $jualan = new Jualan;

        $jualan->buku_id = $request->buku_id;
        $jualan->users_id = $request->users_id;
        $jualan->jumlah = $request->jumlah;
        $jualan->total = $request->total;
     
    

        $jualan->save();
        return redirect('jualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jualan = Jualan::find($id);

        return view('jualan.detail')->with('jualan', $jualan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $buku = Buku::all();

        $jualan = Jualan::find($id);

        return view('jualan.edit',compact(['jualan'],['users'],['buku']));
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
        'buku_id' => 'required',
        'users_id' => 'required',
        'jumlah' => 'required', 
        'total' => 'required',
             
    ]);

        $jualan = Jualan::find($id);
        $jualan->buku_id = $request->buku_id;
        $jualan->users_id = $request->users_id;
        $jualan->jumlah = $request->jumlah;
        $jualan->total = $request->total;
     
       

        $jualan->save();

        return redirect('jualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jualan = Jualan::find($id);
        $jualan->delete();
        return redirect('jualan')->with('message', 'salah satu list sudah di hapus');
    }
}
