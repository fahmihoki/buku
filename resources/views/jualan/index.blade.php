@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                	{{  Session::get('message')  }}

All Penjualan list !<br>

<a href="/jualan/create">create</a>
<hr>
<table class="table table-hover">
	        <thead>
	          <tr>
	              <th>Judul</th>
	              <th>Nama Kasir</th>
	              <th>Jumlah</th>
	              <th>Total</th>
	              <th>edit</th>
	              <th>view</th>
	              <th>delete</th>
	          </tr>
	        </thead>

	 @foreach($jualans as $jualan)
	 <tbody>
	 	<tr>
		 <td>{{$jualan->buku->judul}}</td> 
  		 <td>{{ $jualan->users_id }}</td> 
		 <td>{{ $jualan->jumlah }} </td>
		 <td>{{ $jualan->total }} </td>
			    
	      

	      <td><a href="/jualan/{{$jualan->id}}/edit">Edit</a></td>
	      <td><a href="/jualan/{{$jualan->id}}">detail</a></td>

		  <td>@if(Auth::user()->jabatan == 'Admin')
	      <form class="" action="/jualan/{{$jualan->id}}" method="post">
	      	<input type="hidden" name="_method" value="delete">
	      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	      	<input type="submit" name="name" value="delete">
	      </form>
	      @endif
	      </td>	
		</tr>
	 	
	 </tbody>   
	@endforeach
	</table>

	{!!$jualans->links()!!}

            </div>
        </div>
    </div>
</div>
@endsection
