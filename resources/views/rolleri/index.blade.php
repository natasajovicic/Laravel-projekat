@extends('layouts.app')
@section('content')
    <h1> Podaci o rollerima: </h1>
    <a href="/laraveldomaci/public/rolleri/create" class="btn btn-defualt">Kreiraj nove rollere</a>
{!! Form::open(['action'=>['App\Http\Controllers\RollerController@store'],'method'=>'POST']) !!}
     @if(count($r)>0)
    @foreach ($r as $r1)
        <div class="well">
            <h3> <a href = "/laraveldomaci/public/rolleri/{{$r1->id}}">Prikazi roller br: {{$r1->id}}</a> </h3>
</div>
    @endforeach
    @endif
@endsection
