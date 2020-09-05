@extends('layouts.adminLte.main')

@section('title')
Add Company 
@endsection()

@section('content4')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add new company</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add new company</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Enter Details here</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form role="form" enctypt = "multipart/form-data" action="{{'/savecompany'}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" name="txtcname" required class="form-control" id="exampleInputEmail1" 
                    placeholder="Enter company name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Details</label>
                    <textarea name="txtcdetails" class="form-control"
                     id="exampleInputPassword1" placeholder="Details...."></textarea>
                  </div>
                  <div class="form-group">
                    {{-- <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="text" name="txtclogo" class="custom-file-input" id="exampleInputFile"/>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        
                      </div>
                    </div> --}}

                    <label for="exampleInputEmail1">File Name</label>
                    <input type="text" name="txtclogo" required class="form-control" id="exampleInputEmail1" 
                    placeholder="Enter text file name">




                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection()