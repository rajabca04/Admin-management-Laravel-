<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Companies;
use Illuminate\Auth\Events\Validated;
use Nette\Utils\Paginatorl;

class CompaniesController extends Controller
{
    
    public function index()
    {   
        return view('admin_penal.company.create_company');
    }

    public function ViewCompany()
    {
        $data['data'] = Companies::simplePaginate(2);
        
        return view('admin_penal.company.view_company',$data);
    }
    
    public function create(Request $req)
    {
        $file = $req->logo->getClientOriginalName();
        $req->logo->move(public_path('logos'),$file);

        DB::table('Companies')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'logo' =>$file,
            'website' => $req->website,
        ]);
        return redirect()->back();
    }
    
    public function store(Request $request)
    {
       
    }

    
    public function show($id)
    {
        $company['company'] = Companies::all();
        return view('admin_penal.company.view_company');
    }

    public function edit($id)
    {
        $item['item'] = DB::table('Companies')->find($id);
        return view('admin_penal.company.update_company',$item);
    }

   
    public function update(Request $req ,$id)
    {   
        $file = $req->logo->getClientOriginalName();
        $req->logo->move(public_path('logos'),$file);
        
        DB::table('Companies')->where("id",$id)->update([
        'name' => $req->name,
        'email' => $req->email,
        'logo' =>$file,
        'website' => $req->website,
    ]);
        return redirect()->route('view_company');
    }

    
    public function destroy($id)
    {
        DB::table('Companies')->where('id',$id)->delete();
        return redirect()->back();
    }
}
