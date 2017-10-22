@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>Input Penjualan</p>

<form class="" action="/jualan" method="post">

<div class="form-group col-md-8">
	<label class="mr-sm-2" for="inlineFormCustomSelectPref">Judul Buku</label><br>
 	<select name="buku_id" class="col-md-8" id="inlineFormCustomSelectPref">
   			@foreach ($buku as $asu)
				<option value="{{$asu->id}}">
					{{$asu->judul}}
				</option>
			@endforeach
 	</select>
    </div>

    <div class="form-group col-md-8">
 	<label class="mr-sm-2" for="inlineFormCustomSelectPref">Nama Kasir</label><br>
 	<select name="users_id" class="col-md-8" id="inlineFormCustomSelectPref">
  			
				<option value="{{ Auth::user()->name }}">
					{{ Auth::user()->name }}
				</option>
 	</select>
    </div>

	<input type="text" name="jumlah" value="" placeholder="Jumlah buku"><br>
	{{ ($errors->has ('jumlah')) ? $errors->first('jumlah') : '' }}<br>

		<input type="text" name="total" value="" placeholder="total"><br>
		{{ ($errors->has ('total')) ? $errors->first('total') : '' }}<br>

				

				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" name="name" value="post">
		


</form>

            </div>
        </div>
    </div>
</div>
@endsection
