<?php 
	$pap  = $jualan->users_id;
	$pap2 = $jualan->buku_id;	
?>

@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>Edit Distribusi</p>

<form class="" action="/jualan/{{$jualan->id}}" method="post">

<div class="form-group col-md-8">
	<label class="mr-sm-2" for="inlineFormCustomSelectPref">Judul Buku</label><br>
 	<select name="buku_id">
			@foreach ($buku as $asu)
				<option value="{{$asu->id}}"><?php if($pap2 == $asu->id){echo "selected";} ?> 
					{{$asu->judul}}
				</option>
			@endforeach
		</select>
    </div>

    <div class="form-group col-md-8">
 	<label class="mr-sm-2" for="inlineFormCustomSelectPref">Name Kasir</label><br>
	<select name="users_id">
			
				<option value="{{ Auth::user()->name }}"><?php if($pap == $asu->id){echo "selected";} ?> 
					{{ Auth::user()->name }}

				</option>
			
		</select>
    </div>
	<input type="text" name="jumlah" value="{{$jualan->jumlah}}" placeholder="jumlah buku"><br>
	{{ ($errors->has ('jumlah')) ? $errors->first('jumlah') : '' }}<br>

		<input type="text" name="total" value="{{$jualan->total}}" placeholder="total"><br>
		{{ ($errors->has ('total')) ? $errors->first('total') : '' }}<br>

			
		
				

					<input type="hidden" name="_method" value="put">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" name="name" value="post">
		


</form>

            </div>
        </div>
    </div>
</div>
@endsection
