@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <p>Meniu</p>
                    </div>
                    <div class="panel-bpdy">
                            
                            {{ Form::open(['url' => 'admin/meniu']) }}
                                <div class="form-group">
                                    {!! Form::label('namemeniu', 'Nume:') !!}
                                    {!! Form::text('namemeniu', null, ['class' => 'form-control', 'placeholder' => 'Nume meniu']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('idsubmeniu', 'Id submeniu:') !!}
                                    {!! Form::number('idsubmeniu', null, ['class' => 'form-control', 'placeholder' => 'Id submeniu']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Adauga meniu', ['class' => 'form-control btn btn-primary']) !!}
                                </div>
                            {{ Form::close() }}

                            <div class="">
                                <table class="table">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nume Meniu</th>
                                        <th>Submeniu</th>
                                    </tr>
                                    @foreach ($meniu as $men)
                                        <tr>
                                            <td>
                                            {{ $men->id }}
                                            </td>
                                            <td>
                                            {{ $men->namemeniu }}
                                            </td>
                                            <td>
                                            {{ $men->idsubmeniu }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                    </div>
                </div>            
            </div>
    </div>
</div>

@endsection