<?php

namespace App\Http\Controllers\fronted;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Project;
use App\Models\Suggetion;

class EmployeesController extends Controller
{
    public function index()
    {
        $customers= Customers::get();
        $projects= Project::orderBy('id', 'desc')->take(6)->get();
        return view('fronted.employees.home', compact('customers','projects'));
    }

    public function report()
    {
        return view('fronted.employees.reports');
    }

    public function workHours()
    {
        return view('fronted.employees.workHours');
    }

    public function team()
    {
        return view('fronted.employees.team');
    }


    public function whoWork()
    {
        return view('fronted.employees.whoWorkNow');
    }

    public function storeOpinion(Request $request)
    {
       
        $data = $request->validate([
             'name'=>'required|string|max:50',
             'content'=> 'required|string',                         
            ]);
       
        Customers::create($data);
        return redirect('/employeesHome');
    
    }

    public function storeSuggetion(Request $request)
    {
       
        $data = $request->validate([
             'name'=>'required|string|max:50',
             'email'=> 'required|email',
             'message'=>'required|string',                         
            ]);
       
        Suggetion::create($data);
        return redirect('/employeesHome');
    
    }

}
