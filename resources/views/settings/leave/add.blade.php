
@extends('layouts.app')  

@section('content_header')
   <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Leave</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Designation</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection  
  
@section('main_content')


  
   <div class="container-fluid">
   
        <div class="row">
            <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add Leave</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="{{ route('leave_add_action') }}" >
            @csrf
            <div class="card-body">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" autocomplete="off" class="form-control" id="name" name="n" placeholder="Enter Name">
              </div>  

              <div class="form-group">
                <label for="description">Short Name</label>
                <input type="text" autocomplete="off" class="form-control" id="short_name" name="sn" placeholder="Enter Short Name">
              </div>  

            <div class="form-group">
                <label for="rank">Description</label>
                <input type="text" autocomplete="off" class="form-control" id="description" name="dsc" placeholder="Enter Description">
              </div>  

              <div class="form-group">
                <label for="cid">allowedLeave</label>
                <input type="number" autocomplete="off" class="form-control" id="allowedleave" name="aL" placeholder="Enter AllowedLeave">
              </div> 
                

        <!--
              <div class="form-group">
                <label for="exampleInputFile">Company Logo</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
        -->      
             
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
               <a href="{{ route('leave_list_route') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
              
            </div>
          </form>
        </div>
        <!-- /.card -->

           

      </div>
      <!--/.col (left) -->
        </div>

   
    </div>
    <!-- /.row -->
   
    
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
@endsection   