<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\salaryarrear;
use App\Models\employee;
use App\Models\tbl_designations;
use App\Models\department;


class salaryArr extends Controller
{
    public function index(){
           // $tbl_employee=employees::get();
           $tbl_salaryArr =salaryarrear::join('employees', 'salaryarrears.emId' ,'=' , 'employees.employeeId')
           ->join('tbl_designations','employees.designation','=','tbl_designations.id')
           ->join('departments','employees.department','=','departments.id')
           ->select('salaryarrears.*', 'employees.name','departments.dept_short_name','tbl_designations.desig_short_name')->get();
        return view('settings.salaryArrear.salary_arrear_list',compact('tbl_salaryArr'));
    }
    public function create()
    {
        $tbl_emp = employee::get();
        return view('settings.salaryArrear.add', compact('tbl_emp'));

    }
    public function store(Request $request)
    {
        $data=array();  
        
        $data['emId'] = $request['employeeId'];
        $data['adjust_month'] = $request['adjust_month'];
        $data['amount'] = $request['amount'];
        $data['payable_days'] = $request['payable_days'];
        salaryarrear::insert($data);
        return redirect()->route('salaryArr_list_route');
        //return back();
        
    }
    public function show($id)
    {
        $tbl_salaryArr= salaryarrear::findOrFail($id);    
        return view('settings.salaryArrear.view',compact('tbl_salaryArr'));
    }
    public function edit($id)
    {
        $salaryArr= salaryarrear::findOrFail($id);
        $employee_Info = employee::get();
        return view('settings.salaryArrear.edit',compact('salaryArr','employee_Info'));
    }
       
    public function update(Request $request)
    {
        $id=$request->id;
        $salaryArr = salaryarrear::findOrFail($id);
        
        
      
        $salaryArr->emId = $request->employeeId;
        $salaryArr->adjust_month = $request->adjust_month;
        $salaryArr->amount = $request->amount;
        $salaryArr->payable_days = $request->payable_days;

        $salaryArr->save();   
        return redirect()->route('salaryArr_list_route');
    }
    public function destroy($id)
    {
        salaryarrear::destroy($id);
        return redirect()->route('salaryArr_list_route');
    }

}
