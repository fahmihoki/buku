@if(Auth::user()->jabatan == 'Admin')
@extends('layouts.app1')

@section('content')
<div class="container">
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

