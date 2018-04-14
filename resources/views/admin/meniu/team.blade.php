@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        @include('errors.errors')
        <h6 class="text-center">Adăugați membu în echipă</h6>
        @if(Session::has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{!! Session::get('success') !!}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
         @endif
         {{ Form::open(array('url' => 'admin/team', 'files' => true )) }}
            <div class="form-group">
                {!! Form::label('nr', 'Numărul de ordine:') !!}
                {!! Form::number('nr', null, ['min' => $numar, 'class' => 'form-control', 'placeholder' => 'Numărul personal']) !!}
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
                {!! Form::submit('Adaugă membru', ['class' => 'form-control btn btn-primary']) !!}
            </div>
        {{ Form::close() }}
        <h6 class="text-center">Echipă</h6>
        <table class="table table-hover table-condensed table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nr/Or</th>
                <th>Limba</th>
                <th>Nume</th>
                <th>Statut</th>
                <th>Imaginea</th>
                <th>Edit</th>
                <th>Sterge</th>
            </tr>
            </thead>
            <tbody>
            @foreach($team as $te)
            <tr>
                <td>{{ $te->id }}</td>
                <td>{{ $te->nr }}</td>
                <td>{{ $te->lg }}</td>
                <td>{{ $te->name }}</td>
                <td>{{ $te->position }}</td>
                <td>{{ $te->image }}</td>
                <td><button class="btn btn-primary">Edit</button></td>
                <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection