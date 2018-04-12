@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('errors.errors')
    <h6 class="text-center">Adăugați Portofoliu</h6>
    @if(Session::has('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{!! Session::get('success') !!}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    {{ Form::open(array('url' => 'admin/portofoliu', 'files' => true )) }}
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
            {{ Form::file('url', ['name' => 'url'])}}
        </div>
        <div class="form-group">
            {!! Form::label('thumbnail', 'Imagine fundal:', ['class' => 'portofoliu-img']) !!}
            {{ Form::file('thumbnail',  ['name' => 'thumbnail']) }}
        </div>
        <div class="form-group">
            {!! Form::submit('Adaugă portofoliu', ['class' => 'form-control btn btn-primary']) !!}
        </div>
    {{ Form::close() }}
    <h6 class="text-center">Portofoliu</h6>
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nume</th>
        <th>Subtitlu</th>
        <th>Descriere</th>
        <th>Data</th>
        <th>Client</th>
        <th>Categorie</th>
        <th>Imagine full</th>
        <th>Imagine fundal</th>
        <th>Edit</th>
        <th>Sterge</th>
      </tr>
    </thead>
    <tbody>
    @foreach($portofolii as $portofoliu)
      <tr>
        <td>{{ $portofoliu->id }}</td>
        <td>{{ $portofoliu->name }}</td>
        <td>{{ $portofoliu->subtitle }}</td>
        <td>{{ str_limit($portofoliu->description, 40) }}</td>
        <td>{{ $portofoliu->date }}</td>
        <td>{{ $portofoliu->client }}</td>
        <td>{{ $portofoliu->categorie }}</td>
        <td>{{ $portofoliu->url }}</td>
        <td>{{ $portofoliu->thumbnail }}</td>
        <td><button class="btn btn-primary">Edit</button></td>
        <td><button class="btn btn-danger">Delete</button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection