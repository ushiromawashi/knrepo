@extends('layouts.app')
@section('content')


<div class="videos-header card">
    <h2 class="page-heading">Filmy</h2>
</div>
<div class="row">

	@foreach($trenings as $trening)

	    <!-- Single video -->
	    <div class="col-xs-12 col-md-6 col-lg-4 single-video">
	        <div class="card">
	        
	            <div class="embed-responsive embed-responsive-16by9">
	                <iframe class="embed-responsive-item" src="{{$trening->url}}?showinfo=0" frameborder="0" allowfullscreen></iframe>
	            </div>
	            <div class="card-content">
	                <a href="{{url('trenings', $trening->id) }}">
	                    <h4>{{$trening->name}}}</h4>
	                </a>
	                <p>{{$trening->description}}</p>
	                <span class="upper-label">Dodał</span>
	                <span class="video-author">Kamil Nowak</span>
	            </div>
	            
	        </div>
	    </div>

	</div>


	@endforeach


@endsection