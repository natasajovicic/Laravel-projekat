@extends('layouts.app')
@section('content')
<a href="/laraveldomaci/public/rolleri" class="btn btn-default"> Vrati se nazad</a>
<h1> Podaci o rollerima: {{$r->id}}</h1>
    <div> Velicina: {{$r->velicina}} </div>
    <div> Boja: {{$r->boja}} </div>
    <div> Materijal: {{$r->materijal}} </div>
    <div> Stanje: {{$r->stanje}} </div>
    <a href="/laraveldomaci/public/rolleri/{{$r->id}}/edit" class="btn btn-defualt">Izmeni</a>
    {!!Form::open(['action'=>['App\Http\Controllers\RollerController@destroy',$r->id,
    'method'=>'POST','class'=>'pull-right']])!!}
    <br>
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Izbrisi',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection
