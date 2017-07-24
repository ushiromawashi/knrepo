@extends('layouts.app')
@section('content')

	<div class="movie-thumbs-container">

		<div class="videos-header card">
			<h2 class="page-heading">Filmy</h2><a class="btn btn-primary" href="/scores/create">Dodaj nowy film</a>
			<h3>Twoje filmy:</h3>
		</div>
		<div class="row">

			@if (count($scores) > 0)
				@foreach($scores as $score)
					<!-- Single video -->
					<div class="col-xs-4 col-md-4 col-lg-4 single-video">
						<div class="card">

							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="{{$score->url}}?showinfo=0" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="card-content">
								<a href="{{url('scores', $score->id) }}">
									<h4>{{$score->name}}</h4>
								</a>
								<p>{{$score->description}}</p>
								<span class="upper-label">Dodał</span>
								<span class="video-author">{{$user_name}}</span>
							</div>

						</div>
					</div>
				@endforeach
			@else
				<div class="col-lg-9 col-md-8">
					<p>Brak wyników.</p>
				</div>
			@endif
	</div>


</div>

@endsection