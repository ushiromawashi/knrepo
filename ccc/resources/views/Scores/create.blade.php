@extends('layouts.app')
@section('content')


<div class="videos-header card">
    <h2 class="page-heading">Dodaj Film</h2>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
                 {!! Form::open(['url'=>'scores', 'class'=>'form-horizontal']) !!}

                    @if (!Auth::guest())
                    {{ Form::hidden('usrId', Auth::user()->id) }}
                    @endif

                    <!-- Napis tytał dać text-align: left;  tylko nie wiem gdzie wstawić-->
                    <div class="form-group">
                        <div  class="col-xs-4 control-label">

                           {!! Form::label('name','Tytuł: ') !!}
                        </div>
                        <div class="col-xs-6">
                            {!! Form::text('name',null, ['class'=>'form-control']) !!}
                        </div>
                    </div>


                    <div class="form-group">
                        <div  class="col-xs-4 control-label">

                           {!! Form::label('description','Opis: ') !!}
                        </div>
                        <div class="col-xs-6">
                            {!! Form::textarea('description',null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div  class="col-xs-4 control-label">

                           {!! Form::label('url','Url filmu: ') !!}
                        </div>
                        <div class="col-xs-6">
                            {!! Form::text('url',null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Dodaj film', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>



@endsection