@extends('layouts.app')
@section('content')
    <h1> Unesi novi par rollera </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\RollerController@store'],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('velicina','Velicina')}}

         {{Form::text('velicina','',['class'=>'form-control','placeholder'=>'velicina'])}}
    </div>
    <div class="form-group">
         {{Form::label('boja','Boja')}}

        {{Form::text('boja','', ['class'=>'form-control','placeholder'=>'boja'])}}
    </div>
    <div class="form-group">
        {{Form::label('materijal','Materijal')}}

       {{Form::text('materijal','', ['class'=>'form-control','placeholder'=>'materijal'])}}
   </div>
    <div class="form-group">
        {{Form::label('stanje','Stanje')}}

        {{Form::text('stanje','', ['class'=>'form-control','placeholder'=>'stanje'])}}
    </div>
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
