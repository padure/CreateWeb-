@extends('layouts.app')

@section('content')
<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
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
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nume</th>
                  <th>Email</th>
                  <th>Telefon</th>
                  <th>Mesaj</th>
                  <th>Data Expedierii</th>
                </tr>
              </tfoot>
              <tbody>
              @foreach ($message as $ms)
                <tr>
                  <td>{{ $ms->nume }}</td>
                  <td>{{ $ms->email }}</td>
                  <td>{{ $ms->telefon }}</td>
                  <td>{{ $ms->mesaj }}</td>
                  <td>{{ $ms->created_at }}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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