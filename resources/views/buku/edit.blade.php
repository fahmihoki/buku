@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <form action="/buku/{{$buku->id}}" method="post">
				id :
				<input type="hidden" name="id" placeholder="id" value="{{$buku->id}}"><br>
				judul   : 
				<input type="text" name="judul" placeholder="judul" value="{{$buku->judul}}"><br>
				noisbn  : 
				<input type="text" name="noisbn" placeholder="nosibn" value="{{$buku->noisbn}}"><br>
				penulis   : 
				<input type="text" name="penulis" placeholder="penulis" value="{{$buku->penulis}}"><br>
				penerbit  : 
				<input type="text" name="penerbit" placeholder="penerbit" value="{{$buku->penerbit}}"><br>
				stok   : 
				<input type="text" name="stok" placeholder="stok" value="{{$buku->stok}}"><br>
				harga pokok  : 
				<input type="text" name="harga_pokok" placeholder="harga pokok" value="{{$buku->harga_pokok}}"><br>
				harga jual  : 
				<input type="text" name="harga_jual" placeholder="harga jual" value="{{$buku->harga_jual}}"><br>
				ppn   : 
				<input type="text" name="ppn" placeholder="ppn" value="{{$buku->ppn}}"><br>
				diskon  : 
				<input type="text" name="diskon" placeholder="diskon" value="{{$buku->diskon}}"><br>
				
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<input type="hidden" name="_method" value="put">
				
				<input type="submit" value="ok">
			</form>

            </div>
        </div>
    </div>
</div>
@endsection
