@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <?php
	$distri1 = $pasok->distri_id;
	$buku2  = $pasok->buku_id;
?> 


<p>Edit Distribusi</p>

<form class="" action="/pasok/{{$pasok->id}}" method="post">

	<div class="form-group col-md-8">
    <label class="mr-sm-2" for="inlineFormCustomSelectPref">Name Distributor</label><br>
 	<select name="distri_id" class="col-md-8" id="inlineFormCustomSelectPref">
    		@foreach ($distri as $pap)
				<option value="{{$pap->id}}" <?php if($distri1 == $pap->id){echo "selected";} ?> > 
					{{$pap->nama_distri}}
				</option>
			@endforeach
		</select>
 	</div>
	
	<div class="form-group col-md-8">
 	<label class="mr-sm-2" for="inlineFormCustomSelectPref">Title Book</label><br>
 	<select name="buku_id" class="col-md-8" id="inlineFormCustomSelectPref">
   			@foreach ($buku as $pap)
				<option value="{{$pap->id}}" <?php if($buku2 == $pap->id){echo "selected";} ?> >
					{{$pap->judul}}
				</option>
			@endforeach
		</select>
 	</div>

		<input type="text" name="jumlah" value="{{$pasok->jumlah}}" placeholder="jumlah"><br>
		{{ ($errors->has ('jumlah')) ? $errors->first('jumlah') : '' }}<br>

			
		<input type="text" name="tanggal" value="{{$pasok->tanggal}}" placeholder="tanggal"><br>
		{{ ($errors->has ('tanggal')) ? $errors->first('tanggal') : '' }}<br>

				

					<input type="hidden" name="_method" value="put">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" name="name" value="post">
		


</form>

            </div>
        </div>
    </div>
</div>
@endsection
