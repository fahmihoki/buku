@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @if(Auth::user()->jabatan == 'Admin')
                    <div class="panel-body">
                    Halaman Admin
                </div>

                   @else

                   <div class="panel-body">
                    Halaman Kasir
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
