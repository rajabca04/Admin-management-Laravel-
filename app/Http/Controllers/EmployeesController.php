<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Companies;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    
    public function index()
    {
        $data['data'] = Companies::all();
        
        return view('admin_penal.employee.create_employee',$data);
    }

    public function create(Request $req)
    {
        $req->validate([
            'company_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        DB::table('employees')->insert([
            'company_id' => $req->company_id,
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'email' => $req->email,
            'phone' => $req->phone,
        ]);

        return redirect()->back();
    }

    public function view(Request $request)
    {
        $data['data'] = Employees::all();
        return view('admin_penal.employee.view_employee',$data);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['data'] = Companies::all();
        $item['item'] = DB::table('employees')->find($id);
        return view('admin_penal.employee.update_employee',$item,$data);
    }

    public function update(Request $req,$id)
    {
        
        DB::table('employees')->where("id",$id)->update([
            'company_id' => $req->company_id,
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'email' => $req->email,
            'phone' => $req->phone,
        ]);
        return redirect()->route('view_employee');
    }

    public function destroy($id)
    {
        DB::table('employees')->where('id',$id)->delete();
        return redirect()->back();
    }
}
