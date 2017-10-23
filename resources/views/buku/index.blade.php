@extends('layouts.app1')
  
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index Buku</title>
</head>
<body>
 
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                {!! Form::open(['method'=>'GET','url'=>'bukuquery','role'=>'search']) !!}
                    <div class="input-group custom-search-from">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                        <span class="input-group-btn">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Cari</button>
                        </span>
                    </span>
                </div>
                    {!! Form::close() !!}

	<a href="/buku/create">create</a>
@foreach($bukus as $buku)
			<p>{{$buku->id}}</p>
			<p>{{$buku->judul}}</p>
			<p>{{$buku->nosibn}}</p>
			<p>{{$buku->penulis}}</p>
			<p>{{$buku->penerbit}}</p>
			<p>{{$buku->stok}}</p>
			<p>{{$buku->harga_pokok}}</p>
			<p>{{$buku->harga_jual}}</p>
			<p>{{$buku->ppn}}</p>
			<p>{{$buku->diskon}}</p>

			<a href="/buku/{{$buku->id}}/edit">edit</a>

			<a href="/buku/{{$buku->id}}">detail</a>
			
			<form action="/buku/{{$buku->id}}" method="post">			
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			@if(Auth::user()->jabatan == 'Admin')
			<input type="hidden" name="_method" value="delete">

			<input type="submit" name="" value="Delete">
			@endif
			
			</form>
	<hr>
	@endforeach

{!!$bukus->links()!!}
			  

</body>
</html>

            </div>
        </div>
    </div>
</div>
@endsection

