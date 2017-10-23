@if(Auth::user()->jabatan == 'Admin')
@extends('layouts.app1')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                {!! Form::open(['method'=>'GET','url'=>'pasokquery','role'=>'search']) !!}
                    <div class="input-group custom-search-from">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                        <span class="input-group-btn">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Cari</button>
                        </span>
                    </span>
                </div>
                    {!! Form::close() !!}

	 <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                	{{  Session::get('message')  }}

		All pasok list !<br>

		<a href="/pasok/create">create</a>
		<hr>

			 @foreach($pasoks as $pasok)

			 
		  <p>No :{{$pasok->id}} </p>
			   <p>nama distribusi : {{ $pasok->distri->nama_distri }} </p>
			    <p>judul buku : {{ $pasok->buku->judul }} </p>
			    <p>Jumlah : {{ $pasok->jumlah }} </p>
			     <p>Tanggal : {{ $pasok->tanggal }} </p>
			    

			      

			      <a href="/pasok/{{$pasok->id}}/edit">Edit</a>
			      <a href="/pasok/{{$pasok->id}}">detail</a>

			      <form class="" action="/pasok/{{$pasok->id}}" method="post">
			      	<input type="hidden" name="_method" value="delete">
			      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
			      	<input type="submit" name="name" value="delete">


			      </form>

			   <hr>   
	
	@endforeach

	{!!$pasoks->links()!!}

            </div>
        </div>
    </div>
</div>
@endsection

@endif

