<?php
  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Http\Controllers\Controller;

class BukuController extends Controller
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
       $bukus = Buku::paginate(1);
        return view('buku.index',compact('bukus'));
    }
public function search(Request $request)
    {
        $bukuquery = $request->get('search');
        $bukus = Buku::where('id','=','%'.$bukuquery)
        ->orWhere('id','LIKE','%'.$bukuquery.'%')
        ->orWhere('judul','LIKE','%'.$bukuquery.'%')
        ->orWhere('noisbn','LIKE','%'.$bukuquery.'%')
        ->orWhere('penulis','LIKE','%'.$bukuquery.'%')
        ->orWhere('penerbit','LIKE','%'.$bukuquery.'%')
        ->orWhere('stok','LIKE','%'.$bukuquery.'%')
        ->orWhere('harga_pokok','LIKE','%'.$bukuquery.'%')
        ->orWhere('harga_jual','LIKE','%'.$bukuquery.'%')
        ->orWhere('ppn','LIKE','%'.$bukuquery.'%')
         ->orWhere('diskon','LIKE','%'.$bukuquery.'%')

        ->paginate(5);
        return view('buku.index', compact(['bukuquery', $bukuquery], ['bukus', $bukus]));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\
     * Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'judul' => 'required',
        'noisbn' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'stok' => 'required',
        'harga_pokok' => 'required',
        'harga_jual' => 'required',
        'ppn' => 'required',
        'diskon' => 'required',

    ]);
        $buku = new Buku;

        $buku->judul = $request->judul;
        $buku->noisbn = $request->noisbn;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->stok = $request->stok;
        $buku->harga_pokok = $request->harga_pokok;
        $buku->harga_jual = $request->harga_jual;
        $buku->ppn = $request->ppn;
        $buku->diskon = $request->diskon;

        $buku->save();

        return redirect('buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::find($id);

        return view('buku.detail')->with('buku', $buku);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::find($id);
        return view('buku.edit',compact('buku'));
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
        $this->validate($request, [
        'judul' => 'required',
        'noisbn' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'stok' => 'required',
        'harga_pokok' => 'required',
        'harga_jual' => 'required',
        'ppn' => 'required',
        'diskon' => 'required',

    ]);

        $buku = Buku::find($id);
        $buku->judul = $request->judul;
        $buku->noisbn = $request->noisbn;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->stok = $request->stok;
        $buku->harga_pokok = $request->harga_pokok;
        $buku->harga_jual = $request->harga_jual;
        $buku->ppn = $request->ppn;
        $buku->diskon = $request->diskon;

        $buku->save();

        return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete();

        return redirect('buku')->with('message', 'buku sudah dihapus!');
    }
}
