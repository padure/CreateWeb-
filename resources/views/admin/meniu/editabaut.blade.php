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
         {!! Form::model($abaut, ['method' => 'PATCH', 'action'=>['AbautsController@update', $abaut->id]]) !!}
            <div class="form-group">
                {!! Form::label('nr', 'Numărul de ordine:') !!}
                {!! Form::number('nr', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('language', 'Limba:') !!}
                {!! Form::select('language',  array('RO' => 'Română', 'EN' => 'Engleză'), null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('date', 'Data:') !!}
                {!! Form::text('date', null, ['class' => 'form-control', 'placeholder' => 'Ex: Martie 2018']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('title', 'Titlu:') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titlul istoric']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Descriere:') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descriere istoric', 'rows' => 5]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('image', 'Imagine:') !!}
                {{ Form::file('image', ['class' => 'form-control', 'name' => 'image']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('Editați Istoric', ['class' => 'form-control btn btn-primary']) !!}
            </div>
        {{ Form::close() }}
</div>
@endsection