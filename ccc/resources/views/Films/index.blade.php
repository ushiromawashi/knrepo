@extends('layouts.app')
@section('content')

	<h2 class="page-heading">Filmy</h2>

	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#kata" aria-controls="kata" role="tab" data-toggle="tab">Kata</a></li>
		<li role="presentation"><a href="#kichon" aria-controls="kichon" role="tab" data-toggle="tab">Kichon</a></li>
		<li role="presentation"><a href="#kumite" aria-controls="kumite" role="tab" data-toggle="tab">Kumite</a></li>
		<li role="presentation"><a href="#user-scores" aria-controls="user-scores" role="tab" data-toggle="tab">Osiągnięcia użytkowników</a></li>
	</ul>

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="kata">
			<div class="movie-thumbs-container">
				<div class="row">

				@if (count($materialsKata) > 0)

					@foreach($materialsKata as $film)

						<!-- Single video -->
							<div class="col-xs-12 col-md-6 col-lg-4 ">
								<div class="card">

									<div class="embed-responsive embed-responsive-4by3">
										<iframe class="embed-responsive-item" src="{{$film->url}}?showinfo=0" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="card-content">
										<a href="{{url('films/movie-details', $film->id) }}">
											<h4>{{$film->name}}</h4>
										</a>
										<p>{{$film->description}}</p>
										<span class="video-author">{{$film->usrId}}</span>
									</div>

								</div>
							</div>

						@endforeach
					@else
					<div class="col-xs-12">
						<p>Brak wyników.</p>
					</div>
					@endif
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="kichon">
			<div class="movie-thumbs-container">
				<div class="row">

				@if (count($materialsKichon) > 0)

					@foreach($materialsKichon as $film)

						<!-- Single video -->
							<div class="col-xs-12 col-md-6 col-lg-4 ">
								<div class="card">

									<div class="embed-responsive embed-responsive-4by3">
										<iframe class="embed-responsive-item" src="{{$film->url}}?showinfo=0" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="card-content">
										<a href="{{url('films/movie-details', $film->id) }}">
											<h4>{{$film->name}}</h4>
										</a>
										<p>{{$film->description}}</p>
										<span class="video-author">{{$film->usrId}}</span>
									</div>

								</div>
							</div>

						@endforeach
					@else
					<div class="col-xs-12">
						<p>Brak wyników.</p>
					</div>
					@endif
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="kumite">
			<div class="movie-thumbs-container">
				<div class="row">

				@if (count($materialsKumite) > 0)

					@foreach($materialsKumite as $film)

						<!-- Single video -->
							<div class="col-xs-12 col-md-6 col-lg-4 ">
								<div class="card">

									<div class="embed-responsive embed-responsive-4by3">
										<iframe class="embed-responsive-item" src="{{$film->url}}?showinfo=0" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="card-content">
										<a href="{{url('films/movie-details', $film->id) }}">
											<h4>{{$film->name}}</h4>
										</a>
										<p>{{$film->description}}</p>
										<span class="video-author">{{$film->usrId}}</span>
									</div>

								</div>
							</div>

						@endforeach
					@else
					<div class="col-xs-12">
						<p>Brak wyników.</p>
					</div>
					@endif
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="user-scores">
			<div class="movie-thumbs-container">
				<div class="row">

					@if (count($userScores) > 0)

						@foreach($userScores as $film)

							<div class="col-xs-12 col-md-6 col-lg-4 ">
								<div class="card">

									<div class="embed-responsive embed-responsive-4by3">
										<iframe class="embed-responsive-item" src="{{$film->url}}?showinfo=0" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="card-content">
										<a href="{{url('films/score-details', $film->id) }}">
											<h4>{{$film->name}}</h4>
										</a>
										<p>{{$film->description}}</p>
										<span class="upper-label">Dodał</span>
										<span class="video-author">{{$film->userName}}</span>
									</div>

								</div>
							</div>

						@endforeach
					@else
						<div class="col-xs-12">
						<p>Brak wyników.</p>
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>


@endsection

