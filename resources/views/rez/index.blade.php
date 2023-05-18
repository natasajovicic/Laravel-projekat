@extends('layouts.app')
@section('content')
    <h1> Rezervacije </h1>
    <a href="/laraveldomaci/public/rezervacije/create" class="btn btn-defualt">Kreiraj rezervaciju</a>
    {!! Form::open(['action'=>['App\Http\Controllers\RezervacijaController@store'],'method'=>'POST']) !!}
     @if(count($rez)>0)
    @foreach ($rez as $r)
        <div class="well">
            <h3> <a href = "/laraveldomaci/public/rezervacije/{{$r->id}}">Prikazi nosioca rezervacije: {{$r->ime}}{{$r->prezime}}</a> </h3>
            <p> Datum preuzimanja: {{$r->datum_preuzimanja}}</p>
</div>
    @endforeach
    @endif
@endsection
