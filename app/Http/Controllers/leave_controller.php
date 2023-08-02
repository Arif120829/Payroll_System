<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leavetype;
use DB;

class leave_controller extends Controller
{
    
    public function index()
    {
        $tbl_leave=leavetype::get();
        return view('settings.leave.leave_list',compact('tbl_leave'));
    }

    
    public function create()
    {
        return view('settings.leave.add');
    }

    
    public function store(Request $request)
    {
        $data=array();  
        $data['name'] = $request['n'];
        $data['short_name'] = $request['sn'];
        $data['description'] = $request['dsc'];
        $data['allowedLeave'] = $request['aL'];
        
        leavetype::insert($data);
        return redirect()->route('leave_list_route');
        //return back();
        
    }

    
    public function show($id)
    {
        $leave_info= leavetype::findOrFail($id);    
        return view('settings.leave.view',compact('leave_info'));
    }

    public function edit($id)
    {
        $leave_info= leavetype::findOrFail($id);
        return view('settings.leave.edit',compact('leave_info'));
    }

   
    public function update(Request $request)
    {
        $id=$request->id;
        $leave = leavetype::findOrFail($id);
        // print_r($company);
        // exit;
        
        $leave->name = $request->n;
        $leave->short_name = $request->sn;
        $leave->description = $request->dsc;
        $leave->allowedLeave = $request->aL;
        
        

        $leave->save();   
        return redirect()->route('leave_list_route');
    }

    
    public function destroy($id)
    {
        leavetype::destroy($id);
        return redirect()->route('leave_list_route');
    }
}
