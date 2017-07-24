@extends('layouts.app')
@section('content')


    <div class="videos-header">
        <h2 class="page-heading">{{$film->name}}</h2>
    </div>

    <div class="row">

        <div class="col-xs-12">

            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{$film->url}}?showinfo=0" frameborder="0"
                        allowfullscreen></iframe>
            </div>

            <div class="single-video-content">
                <div class="categories">
                    <h4>Kategorie</h4>
                    <span>
                <a href="">Walka</a>,&nbsp;
                <a href="">Kata</a>,&nbsp;
                <a href="">Kihon</a>
                </span>
                </div>
                <h4>Opis</h4>
                <p>{{$film->description}}</p>
                <span class="upper-label">Dodał</span>
                <span class="video-author">Kamil Nowak</span>
            </div>

        </div>
    </div>

@endsection