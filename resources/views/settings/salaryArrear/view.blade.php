
@extends('layouts.app')  

@section('content_header')
   <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">View SalaryArrear</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Leave</li>
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
            <h3 class="card-title">View SalaryArrear</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="{{ route('update_salaryArr') }}" >
            @csrf
            <div class="card-body">

            <div class="form-group">
                <label for="Id">Employee Id</label>
                <input type="hidden"  class="form-control" id="id" name="id"  value="{{ $tbl_salaryArr->id }}" >
                <input type="text" autocomplete="off" class="form-control"  name="eid" placeholder="employer id" value="{{ $tbl_salaryArr-> emId }}" readonly >
              </div>  

              <div class="form-group">
                <label for="AM">Adjust Month</label>
                <input type="month" autocomplete="off" class="form-control" id="adjust_month" name="adjust_month" placeholder="Enter the adjust month" value="{{ $tbl_salaryArr-> adjust_month}}" readonly>
              </div>  

              <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="text" autocomplete="off" class="form-control" id="amount" name="amount" placeholder="Enter Start Time" value="{{$tbl_salaryArr-> amount}}" readonly>
                    
                  
                  </div>

              <div class="form-group">
                    <label for="pd">Payable Days</label>
                    <input type="text" autocomplete="off" class="form-control" id="payable_days" name="payable_days" placeholder="Enter End Time" value="{{$tbl_salaryArr-> payable_days}}" readonly>
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
              
              <a href="{{route('salaryArr_list_route')}}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
              
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