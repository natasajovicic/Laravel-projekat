@extends('layouts.app')
@section('content')
    <h1> Izmeni podatke o rollerima </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\RollerController@update',$r->id],'method'=>'POST']) !!}
   <!--  ovo ispod je bootstrap -->
   <div class="form-group">
    {{Form::label('velicina','Velicina')}}

     {{Form::text('velicina',$r->velicina,['class'=>'form-control','placeholder'=>'velicina'])}}
</div>
<div class="form-group">
     {{Form::label('boja','Boja')}}

    {{Form::text('boja',$r->boja, ['class'=>'form-control','placeholder'=>'boja'])}}
</div>
<div class="form-group">
    {{Form::label('materijal','Materijal')}}

   {{Form::text('materijal',$r->materijal, ['class'=>'form-control','placeholder'=>'materijal'])}}
</div>
<div class="form-group">
    {{Form::label('stanje','Stanje')}}

    {{Form::text('stanje',$r->stanje, ['class'=>'form-control','placeholder'=>'stanje'])}}
</div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
