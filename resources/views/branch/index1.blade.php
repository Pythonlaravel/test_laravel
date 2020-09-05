@extends('layouts.adminLte.main')
@section('title')
Add Branches
@endsection()


@section('content5')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Branches</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Branches</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Branches in HROnline</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Branch ID</th>
                    <th>Branch Name </th>
                    <th>Company</th>
                    <th>Details</th>
                    <th>Option</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($table as $c)
                      <tr>
                      <td>{{$c->$brid}}</td>
                      <td>{{$c->$bname}}</td>
                      <td>{{$c->$cpname}}</td>
                      <td>{{$c->$bdetails}}</td>
                      <td>X</td>
                      </tr>

                      @endforeach()
                </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection()