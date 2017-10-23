@if(Auth::user()->jabatan == 'Admin')
@extends('layouts.app1')
 
@section('content')

     <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                {!! Form::open(['method'=>'GET','url'=>'distriquery','role'=>'search']) !!}
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

All distribusi list !<br>

<a href="/distri/create">create</a>
<hr>

	 @foreach($distris as $distri)

	 
  <p>No :{{$distri->id}} </p>
	   <p>Nama Distribusi : {{ $distri->nama_distri }} </p>
	    <p>Alamat : {{ $distri->alamat }} </p>
	     <p>Telepon : {{ $distri->telepon }} </p>
	    

	      

	      <a href="/distri/{{$distri->id}}/edit">Edit</a>
	      <a href="/distri/{{$distri->id}}">detail</a>

	      <form class="" action="/distri/{{$distri->id}}" method="post">
	      	<input type="hidden" name="_method" value="delete">
	      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	      	<input type="submit" name="name" value="delete">


	      </form>

	   <hr>   
	
	@endforeach

	{!!$distris->links()!!}
            </div>
        </div>
    </div>
</div>
@endsection

@endif
