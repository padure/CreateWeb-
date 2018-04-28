@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('errors.errors')
    <h6 class="text-center">Editați Membru</h6>
        @if(Session::has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{!! Session::get('success') !!}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
         @endif
        {!! Form::model($team, ['method' => 'PATCH', 'action'=>['TeamController@update', $team->id]]) !!}
            <div class="form-group">
                {!! Form::label('nr', 'Numărul de ordine:') !!}
                {!! Form::number('nr', null, ['class' => 'form-control', 'placeholder' => 'Numărul personal']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('lg', 'Limba:') !!}
                {!! Form::select('lg',  array('RO' => 'Română', 'EN' => 'Engleză'), null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', 'Nume:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nume, Prexnume']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('position', 'Poziție:') !!}
                {!! Form::text('position', null, ['class' => 'form-control', 'placeholder' => 'Statutul profesional']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('image', 'Imagine:') !!}
                {{ Form::file('image', ['class' => 'form-control', 'name' => 'image']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('Editați membru', ['class' => 'form-control btn btn-primary']) !!}
            </div>
        {{ Form::close() }}
    </div>
@endsection