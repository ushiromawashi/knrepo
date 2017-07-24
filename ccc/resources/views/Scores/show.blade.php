@extends('layouts.app')
@section('content')


<div class="videos-header card">
    <h2 class="page-heading">{{$score->name}}</h2>
</div>


<div class="row">

    <!-- left col. -->
    <div class="col-xs-12 col-md-9 single-video-left">

        <div class="card">

            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{$score->url}}?showinfo=0" frameborder="0" allowfullscreen></iframe>
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
                <p>{{$score->description}}</p>
                <span class="upper-label">Dodał</span>
                <span class="video-author">Strefa Kursów</span>
                <div class="edit-button">
                    <button class="btn btn-primary btn-lg">
                        Edytuj Video
                    </button>
                </div>
            </div>
            
        </div>
        
    </div>

    <!-- right col. -->
    <div class="col-xs-12 col-md-3 single-video-right">

    <!-- pojedynczy box -->
        <div class="card">
            <div class="right-col-box">
                <h4>Komentarze</h4>
                        <li class="list-group-item">
                        <span class="badge">832</span>Komentarzy
                    </li>
                </ul>                            
            </div>
        </div>

    </div>

</div>

@endsection