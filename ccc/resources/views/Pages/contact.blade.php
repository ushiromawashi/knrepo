@extends('layouts.app')
@section('content')
  <h2 class="page-heading">Kontakt</h2>

  <div class="dojo1">
    Siemianowicki Klub Kyokushin Karate <br>
    ul.Elizy Orzeszkowej 1 <br>
    41-103 Siemianowice Śląskie <br>
    Telefon: 504-084-126 <br>
    E-mail: klub@skkk.pl <br>
    E-mail: kamil.nowakat@gmail.com <br>
    Nip: 643-15-77-894 <br>
  </div>  



​@if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach( $errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(Session::has('message'))
    <div class="alert alert-success">
        <ul>
            <p>{{ Session::get('message') }}</p>
        </ul>
    </div>
@endif  


<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="card">
<div class="panel-body">

    
{!! Form::open(array('url' => '/contact', 'class'=>'form-horizontal')) !!}
    
    <div class="form-group">
            <div class="col-md-4 control-label">
                <h4>{!! Form::label('title', 'Temat:') !!}</h4>
            </div>
            <div class="col-md-6">
                {!! Form::text('title', null, ['class'=>'form-control', 'placeholder' => 'Temat']) !!}
            </div>
    </div>      

    <div class="form-group">
            <div class="col-md-4 control-label">
                <h4>{!! Form::label('emails', 'E-mail:') !!}</h4>
            </div>
            <div class="col-md-6">
                {!! Form::email('emails', null, ['placeholder' => 'E-mail', 'class'=>'form-control']) !!}
            </div>
    </div>  

    <div class="form-group">
            <div class="col-md-4 control-label">
                <h4>{!! Form::label('messages', 'Treść wiadomości:') !!}</h4>
            </div>
            <div class="col-md-6">
                {!! Form::textarea('messages', null, ['placeholder' => 'Treść wiadomości', 'class'=>'form-control']) !!}
            </div>
    </div>  

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            {!! Form::submit('Wyślij', ['class'=>'btn btn-lg']) !!}
        </div>  
    </div>  

{!! Form::close() !!}

@endsection

