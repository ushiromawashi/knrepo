@extends('layouts.app')
@section('content')


    <div class="videos-header card">
        <h2 class="page-heading">{{$film->name}}</h2>
    </div>

    <div class="row">

        <div class="col-xs-12 col-lg-9 single-video">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{$film->url}}?showinfo=0" frameborder="0"
                        allowfullscreen></iframe>
            </div>

            <div class="single-video-content">
                <h4>Opis</h4>
                <p>{{$film->description}}</p>
                <span class="upper-label">Dodał</span>
                <span class="video-author">Kamil Nowak</span>
            </div>
        </div>

        <div class="col-xs-12 col-lg-3">
            @if (count($comments) > 0)
                <h3>Komentarze</h3>
                <div class="comments">
                    @foreach($comments as $comment)
                        <p>
                            <strong>
                                {{$comment->userName}}
                                <small>{{$comment->created_at->format('d.m.Y')}}</small>
                            </strong>
                            <small>
                                {{ $comment->comment  }}
                            </small>
                        </p>
                    @endforeach
                </div>
            @endif
            @if (!Auth::guest())
                {!! Form::open([ 'class'=>'form-horizontal']) !!}

                {{ Form::hidden('movieId', $film->id) }}
                {{ Form::hidden('usrId', Auth::user()->id) }}

                <div class="form-group">
                    <div class="col-xs-12">
                        {!! Form::textarea('comment',null, ['class'=>'form-control', 'placeholder' => 'Wprowadź komentarz']) !!}
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-xs-12">
                        {!! Form::submit('Dodaj komentarz', ['class'=>'btn btn-primary pull-right']) !!}
                    </div>
                </div>

                {!! Form::close() !!}
            @endif
        </div>
    </div>

@endsection