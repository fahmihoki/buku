@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <p>Edit Distribusi</p>

			<form class="" action="/distri/{{$distri->id}}" method="post">


				<input type="text" name="nama_distri" value="{{$distri->nama_distri}}" placeholder="nama"><br>
				{{ ($errors->has ('nama_distri')) ? $errors->first('nama_distri') : '' }}<br>

					<input type="text" name="alamat" value="{{$distri->alamat}}" placeholder="alamat"><br>
					{{ ($errors->has ('alamat')) ? $errors->first('alamat') : '' }}<br>

						
					<input type="text" name="telepon" value="{{$distri->telepon}}" placeholder="telepon"><br>
					{{ ($errors->has ('telepon')) ? $errors->first('telepon') : '' }}<br>

							

								<input type="hidden" name="_method" value="put">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="submit" name="name" value="post">
					


</form>
            </div>
        </div>
    </div>
</div>
@endsection
