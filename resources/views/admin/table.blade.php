@extends('layouts.app')

@section('content')
<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('admin') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Messages</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-fw fa-envelope"></i> Mesaje</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nume</th>
                  <th>Email</th>
                  <th>Telefon</th>
                  <th>Mesaj</th>
                  <th>Data Expedierii</th>
                  <th>Status</th>
                  <th>Setari</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nume</th>
                  <th>Email</th>
                  <th>Telefon</th>
                  <th>Mesaj</th>
                  <th>Data Expedierii</th>
                  <th>Status</th>
                  <th>Setari</th>
                </tr>
              </tfoot>
              <tbody>
              @foreach ($message as $ms)
                <tr>
                  @if($ms->statut == 'New')
                  <td class="text-danger">{{ $ms->nume }}</td>
                  <td class="text-danger">{{ $ms->email }}</td>
                  <td class="text-danger">{{ $ms->telefon }}</td>
                  <td class="text-danger">{{ $ms->mesaj }}</td>
                  <td class="text-danger">{{ $ms->created_at }}</td>
                  <td><p class="text-danger">{{ $ms->statut }}</p></td>
                  @else
                  <td>{{ $ms->nume }}</td>
                  <td>{{ $ms->email }}</td>
                  <td>{{ $ms->telefon }}</td>
                  <td>{{ $ms->mesaj }}</td>
                  <td>{{ $ms->created_at }}</td>
                  <td>{{ $ms->statut }}</td>
                  @endif
                  <td><a href="{{$ms->id}}/message"><button class="btn btn-primary">Finiseaza</button></a></td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        @foreach ($lastMessage as $lm)
          <div class="card-footer small text-darck">Updated {{ $lm->updated_at }}</div>
        @endforeach
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
@endsection