@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('errors.errors')
    <h6 class="text-center">Editați Portofolii</h6>
        @if(Session::has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{!! Session::get('success') !!}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
         @endif
         {!! Form::model($portofoliu, ['method' => 'PATCH', 'action'=>['PortofoliuController@update', $portofoliu->id]]) !!}
        <div class="form-group">
                {!! Form::label('lg', 'Limba:') !!}
                {!! Form::select('lg',  array('RO' => 'Română', 'EN' => 'Engleză'), null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name', 'Numele Proiectului:') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nume']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('subtitle', 'Subtitlu:') !!}
            {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Subtitlul proiectului']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Descriere:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descrierea proiectului']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('date', 'Data:') !!}
            {!! Form::date('date', date('Y-m-d'), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('client', 'Client:') !!}
            {!! Form::text('client', null, ['class' => 'form-control', 'placeholder' => 'Nume client']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('categorie', 'Categorie:') !!}
            {!! Form::text('categorie', null, ['class' => 'form-control', 'placeholder' => 'Nume categorie']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('url', 'Imagine full:') !!}
            {{ Form::file('url', ['class' => 'form-control', 'name' => 'url'])}}
        </div>
        <div class="form-group">
            {!! Form::label('thumbnail', 'Imagine fundal:', ['class' => 'portofoliu-img']) !!}
            {{ Form::file('thumbnail',  ['class' => 'form-control', 'name' => 'thumbnail']) }}
        </div>
        <div class="form-group">
            {!! Form::submit('Editați portofoliu', ['class' => 'form-control btn btn-primary']) !!}
        </div>
    {{ Form::close() }}
</div>
@endsection