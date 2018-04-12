@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('errors.errors')
        <h6 class="text-center">Adaugati Servicii</h6>
        {{  Form::open(['url' => 'admin/servicii']) }}
            <div class="form-group">
                {!! Form::label('title', 'Titlu:') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titlu serviciu']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Descriere:') !!}
                {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Descriere serviciu']) !!} 
            </div>
            <div class="form-group">
                {!! Form::label('icons', 'Iconita:') !!}
                {!! Form::text('icons', null, ['class' => 'form-control', 'placeholder' => 'Iconita serviciu']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Adauga serviciu', ['class' => 'form-control btn btn-primary']) !!}
            </div>
        {{  Form::close()   }}
        <h6 class="text-center">Servicii</h6>
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Titlu</th>
        <th>Descriere</th>
        <th>Iconita</th>
      </tr>
    </thead>
    <tbody>
    @foreach($servicii as $serviciu)
      <tr>
        <td>{{ $serviciu->id }}</td>
        <td>{{ $serviciu->title }}</td>
        <td>{{ $serviciu->description }}</td>
        <td>{{ $serviciu->icons }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
    </div>
@endsection