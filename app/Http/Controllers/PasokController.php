<?php
 
namespace App\Http\Controllers;
 

use App\Pasok;
use App\Buku;
use App\Distri;
use Illuminate\Http\Request;

class PasokController extends Controller
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
        //$pasoks = Pasok::all();
        
        $pasoks = Pasok::paginate(2);
        return view('pasok.index',compact('pasoks'));
    }
    
    public function search(Request $request)
    {
        $pasokquery = $request->get('search');
        $pasoks = Pasok::where('id','=','%'.$pasokquery)
        ->orWhere('id','LIKE','%'.$pasokquery.'%')
        ->orWhere('distri_id','LIKE','%'.$pasokquery.'%')
        ->orWhere('buku_id','LIKE','%'.$pasokquery.'%')
        ->orWhere('jumlah','LIKE','%'.$pasokquery.'%')
        ->orWhere('tanggal','LIKE','%'.$pasokquery.'%')
        ->paginate(5);
        return view('pasok.index', compact(['pasokquery', $pasokquery], ['pasoks', $pasoks]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $distri = Distri::all();
        $buku = Buku::all();
        return view('pasok.create',compact(['distri'],['buku']));
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

        'distri_id' => 'required',
         'buku_id' => 'required',
        'jumlah' => 'required',
        'tanggal' => 'required',
       
    ]);

        $pasok = new Pasok;

        $pasok->distri_id = $request->distri_id;
        $pasok->buku_id = $request->buku_id;
        $pasok->jumlah = $request->jumlah;
        $pasok->tanggal = $request->tanggal;
    

        $pasok->save();
        return redirect('pasok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasok = Pasok::find($id);

        return view('pasok.detail')->with('pasok', $pasok);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $distri = Distri::all();
        $buku = Buku::all();

        $pasok = Pasok::find($id);

        return view('pasok.edit',compact(['distri',],['buku',],['pasok',]));
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
        'distri_id' => 'required',
        'buku_id' => 'required',
        'jumlah' => 'required',
         'tanggal' => 'required',
       
    ]);

        $pasok = Pasok::find($id);
        $pasok->distri_id = $request->distri_id;
        $pasok->buku_id = $request->buku_id;
        $pasok->jumlah = $request->jumlah;
        $pasok->tanggal = $request->tanggal;
       

        $pasok->save();

        return redirect('pasok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pasok = Pasok::find($id);
        $pasok->delete();
        return redirect('pasok')->with('message', 'salah satu list sudah di hapus');
    }
}
