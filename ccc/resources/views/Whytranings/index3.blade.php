@extends('layouts.app')
@section('content')


<div class="videos-header card">
    <h2 class="page-heading">Dlaczego warto trenować</h2>
</div>



 <div class="entry-content">


    <p class="tytuł">Dlaczego warto trenować Karate</p>

    <p class="akapit" >Karate, tak zdecydowanie to nie tylko sztuka walki, a więc co nam daje?
    Karate daje nam nie tylko korzyści fizyczne, czyli siłę ale też pobudzają ciało, wzmacniaja mięśnie i stawy, wbrew pozorom nie jest to najważniejsze. Dyscyplina, opanowanie, stanowczość, silna wola, wyzanaczanie i osiąganie wyznaczonych sobie celów a także ciągła chęć pokonania samego siebie, ciągła chęć udowodnienia sobie że to ja decyduje o tym co teraz zrobie, uczy koncentracji i skupienia, i  właśnie to daje nam karate. 
    Kształtuje ono nasz charakter na całe życie, zmienia nas i sprawia, że stajemy sie silniejsi, sprawia że te proste rzeczy zaczną ułatwiać nam życie codzienne, i nagle przekonamy się o tym, że Karate to nasze życie, nasza droga życia.
    </p>


<div class="row">

	@foreach($whytranings as $whytraning)

	    <!-- Single video -->
	    <div class="col-xs-12 col-md-6 col-lg-4 single-video">
	        <div class="card">
	        
	            <div class="embed-responsive embed-responsive-16by9">
	                <iframe class="embed-responsive-item" src="{{$whytraning->url}}?showinfo=0" frameborder="0" allowfullscreen></iframe>
	            </div>
	            <div class="card-content">
	                <a href="{{url('whytranings', $whytraning->id) }}">
	                    <h4>{{$whytraning->name}}}</h4>
	                </a>
	                <p>{{$whytraning->description}}</p>
	                <span class="upper-label">Dodał</span>
	                <span class="video-author">Kamil Nowak</span>
	            </div>
	            
	        </div>
	    </div>

	</div>


	@endforeach


@endsection