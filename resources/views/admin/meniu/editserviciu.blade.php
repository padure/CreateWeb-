@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('errors.errors')
    <h6 class="text-center">Editați Serviciu</h6>
        @if(Session::has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{!! Session::get('success') !!}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
         @endif
         {!! Form::model($serviciu, ['method' => 'PATCH', 'action'=>['MeniuController@update', $serviciu->id]]) !!}
            <div class="form-group">
                {!! Form::label('lg', 'Limba:') !!}
                {!! Form::select('lg',  array('RO' => 'Română', 'EN' => 'Engleză'), null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('title', 'Titlu:') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titlu serviciu']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Descriere:') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descriere serviciu', 'rows' => 5]) !!} 
            </div>
            <div class="form-group">
                {!! Form::label('icons', 'Iconita:') !!}
                {!! Form::text('icons', null, ['class' => 'form-control', 'placeholder' => 'Iconita serviciu']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Editaţi serviciu', ['class' => 'form-control btn btn-primary']) !!}
            </div>
        {{  Form::close()   }}
</div>
@endsection