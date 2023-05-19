@extends('layouts.app')
@section('content')
<html>
<head>
	<meta http-equiv="Content-Language" content="sr" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>O nama</title>
</head>
 <body style="background-color:rgb(243, 217, 217);">
	<nav class="navbar navbar-expand-sm">
		<div class="container">
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
                
					<li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"> </span> Početna</a></li>
					<li class="active"><a href="#">O nama</a></li>
                    <li><a href="{{url('/rolleri')}}"> Rolleri</a></li>
				    <li><a href="{{url('/rezervacije')}}"> Rezervacija</a></li>
                
				</ul>
		    </div>
		</div>
	</nav>
	<div class="container">
        <h3>Iznajmljivanje rollera!</h3>
        <img src="{{asset('/images/skates.jpg')}}" alt="Slika se ne moze prikazati" height="400" align="center"/>
		<div class="row"  align="center">
			<div class="col-md-6">
                <br>
				<div id="dream-land" style="color:black" align="left">Škola rolera Beograd, osnovana je 2006. godine kao jedna od prvih registrovanih škola rolera u Srbiji, kao jedna od članica Skitrack grupe. Tokom godina, sa urađenih preko 6000 časova obuke, postavili smo mnoge standarde u obuci početnika u vožnji na rolerima. Uz najmodernije metode obuke i podršku veoma stručnog i kreativnog tima, licenciranih instruktora rolera, broj zadovoljnih klijenata se svakodnevno povećava. Veliki doprinos u popularnosti škole doprinosi i atraktivna lokacija na Adi Ciganliji, gde su i prostorije kluba, kao i veliki broj akcija koje sprovodimo na nivou grada Beograda a koje se odnose na popularizaciju rolera u Srbiji.
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
<div class="container">
	<div class="row">
	</div>
</div>
<br>
<footer footer-fixed-down>
	<div class="container" >
		<div class="row">
		</div>
	</div>
</footer>
</body>
</html>
@endsection

