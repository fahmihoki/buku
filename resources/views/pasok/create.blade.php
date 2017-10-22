@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                 <p>Input Distribusi</p>

<form class="" action="/pasok" method="post">


	<div class="form-group col-md-8">
    <label class="mr-sm-2" for="inlineFormCustomSelectPref">Nama Distributor</label><br>
 	<select name="distri_id" class="col-md-8" id="inlineFormCustomSelectPref">
    		@foreach ($distri as $pap)
				<option value="{{$pap->id}}">
					{{$pap->nama_distri}}
				</option>
			@endforeach
 	</select>
 	</div>
	
	<div class="form-group col-md-8">
 	<label class="mr-sm-2" for="inlineFormCustomSelectPref">Title Book</label><br>
 	<select name="buku_id" class="col-md-8" id="inlineFormCustomSelectPref">
   			@foreach ($buku as $pap)
				<option value="{{$pap->id}}">
					{{$pap->judul}}
				</option>
			@endforeach
 	</select>
 	</div>
		<input type="text" name="jumlah" value="" placeholder="jumlah"><br>
		{{ ($errors->has ('jumlah')) ? $errors->first('jumlah') : '' }}<br>

			<input type="text" name="tanggal" value="" placeholder="tanggal"><br>
			{{ ($errors->has ('tanggal')) ? $errors->first('tanggal') : '' }}<br>

				

				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" name="name" value="post">
	
</form>

            </div>
        </div>
    </div>
</div>
@endsection
