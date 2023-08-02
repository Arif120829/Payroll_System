
@extends('layouts.app')  

@section('content_header')
   <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Salary Arrear</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Salary Arrear</li>
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
            <h3 class="card-title">Add Salary Arrear</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id = "form" method="post" action="{{ route('salaryArr_add_action') }}" onsubmit = "return validateForm()">
            @csrf
            <div class="card-body">

            <div class="form-group">
                    <label for="Employee ID">Employee ID</label>

                    <select name="employeeId" id="employeeId" class="form-control">
                            <option value="">Select Employee ID</option>

                            @foreach($tbl_emp as $com)
                                <option value="{{ $com->employeeId }}">{{ $com->name }} ({{ $com->employeeId }})</option>
                            @endforeach
                    </select>
                    <span id="employeeIdError" class="text-danger"></span>
                  </div>

                  <div class="form-group">
                    <label for="Adjust Month">Adjust Month</label>
                    <input type="month" autocomplete="off" class="form-control" id="adjust_month" name="adjust_month" placeholder="Enter Adjust month">
                    <span id="adjust_monthError" class="text-danger"></span>
                  </div>  

                <div class="form-group">
                    <label for="Amount">Amount</label>
                    <input type="number" autocomplete="off" class="form-control" id="amount" name="amount" placeholder="Enter The Amount"> 
                    <span id="amountError" class="text-danger"></span>
                  </div>  
                  <div class="form-group">
                    <label for="Payable Days">Payable Days</label>
                    <input type="number" autocomplete="off" class="form-control" id="payable_days" name="payable_days" placeholder="Enter Payable days">
                    <span id="payable_daysError" class="text-danger"></span>
                  </div>  
          
                

         
             
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              
               <a href="{{ route('salaryArr_list_route') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
              
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
  <script>
  function validateForm() {
    var inputs = [

    { id: "employeeId", name: "Employee ID" },
    { id: "adjust_month", name: "Leave Date" },
    { id: "amount", name: "Start Time" },
    { id: "payable_days", name: "End Time" },
   

    ];

    var firstInvalidInput = null; // Variable to store the first invalid input

inputs.forEach(function (input) {
  var value = document.getElementById(input.id).value.trim();
  var errorElement = document.getElementById(input.id + "Error");

  errorElement.innerText = "";

  if (value === "") {
    errorElement.innerText = "* Please enter the " + input.name;
    if (!firstInvalidInput) {
      firstInvalidInput = document.getElementById(input.id);
    }
    document.getElementById(input.id).classList.add("is-invalid");
  } else {
    document.getElementById(input.id).classList.remove("is-invalid");
  }
});

// Set focus to the first invalid input, if any
if (firstInvalidInput) {
  firstInvalidInput.focus();
  return false; // Prevent form submission
}

return true; // Proceed with form submission
}
</script>
@endsection   