<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\User;

class EmployeeController extends Controller
{
    public function employeeSearch(Request $request)
    {
     //return "yap";
     $users = DB::select('select * from users');
     return view('Teachdash',compact('users')); 
    

    
          
      
       
        /*
         $users= DB::select('users')->get();
 
     return view('Teachdash', ['users'=> $users]); 
        $users = DB::table('users')
                    ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                    ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                    ->get();
        $permission_lists = DB::table('permission_lists')->get();
        $userList = DB::table('users')->get();

        // search by id
        if($request->employee_id)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->get();
        } 
        */
    }
}
