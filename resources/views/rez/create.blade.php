@extends('layouts.app')
@section('content')
    <h1> Kreiraj novu rezervaciju </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\RezervacijaController@store'],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('ime','Ime')}}

         {{Form::text('ime','',['class'=>'form-control','placeholder'=>'ime'])}}
    </div>
    <div class="form-group">
         {{Form::label('prezime','Prezime')}}

        {{Form::text('prezime','', ['class'=>'form-control','placeholder'=>'prezime'])}}
    </div>
    <div class="form-group">
        {{Form::label('datum_preuzimanja','Datum preuzimanja')}}

        {{ Form::date('datum_preuzimanja', '', ['class'=>'form-control','placeholder'=>'datum_preuzimanja'])}}
    </div>
    <div class="form-group">
        {{Form::label('brDana','Broj dana')}}

        {{Form::text('brDana','', ['class'=>'form-control','placeholder'=>'brDana'])}}
    </div>
    <div class="form-group">
        {{Form::label('kontakt','Kontakt')}}

        {{Form::text('kontakt','', ['class'=>'form-control','placeholder'=>'kontakt'])}}
    </div>
    <div class="form-group">
        {{Form::label('roller_id','Rolleri id')}}

        {{Form::text('roller_id','', ['class'=>'form-control','placeholder'=>'roller_id'])}}
    </div>
    <div class="form-group">
        {{Form::label('user_id','User id')}}

        {{Form::text('user_id','', ['class'=>'form-control','placeholder'=>'user_id'])}}
    </div>
    <br>
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
