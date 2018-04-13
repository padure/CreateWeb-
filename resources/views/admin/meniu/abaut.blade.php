@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        @include('errors.errors')
        <h6 class="text-center">Adăugați Istoric</h6>
        @if(Session::has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{!! Session::get('success') !!}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        {{ Form::open(array('url' => 'admin/despre', 'files' => true )) }}
            <div class="form-group">
                {!! Form::label('nr', 'Numarul de ordine:') !!}
                {!! Form::number('nr', null, ['min' => $numar, 'class' => 'form-control', 'placeholder' => $numar]) !!}
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
                {!! Form::submit('Adaugă Istoric', ['class' => 'form-control btn btn-primary']) !!}
            </div>
        {{ Form::close() }}
        <h6 class="text-center">Istoric</h6>
        <table class="table table-hover table-condensed table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nr/Or</th>
                <th>Limba</th>
                <th>Data</th>
                <th>Titlul</th>
                <th>Descrierea</th>
                <th>Imaginea</th>
                <th>Edit</th>
                <th>Sterge</th>
            </tr>
            </thead>
            <tbody>
            @foreach($istoric as $desc)
            <tr>
                <td>{{ $desc->id }}</td>
                <td>{{ $desc->nr }}</td>
                <td>{{ $desc->language }}</td>
                <td>{{ $desc->date }}</td>
                <td>{{ $desc->title }}</td>
                <td>{{ str_limit($desc->description, 40) }}</td>
                <td>{{ $desc->image }}</td>
                <td><button class="btn btn-primary">Edit</button></td>
                <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection