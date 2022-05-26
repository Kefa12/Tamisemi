<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Redirect,Response;

class DropDown extends Controller
{
    //
    function index()
    {
        $data['regional_rd'] = DB::table('regional_rd')->get();

        return view("registe",$data);
       
       
       
    }
    function index1()
    {
        $data['regional_rd'] = DB::table('regional_rd')->get();

        return view("registe2",$data);
       
       
       
    }
    function index2()
    {
        
      
         
     
        $data['regional_rd'] = DB::table('regional_rd')->get();

        return view("Register_Headmaster",$data);
       
       
       
    }
    function index3()
    {
        $data['regional_rd'] = DB::table('regional_rd')->get();

        return view("Register_WEO",$data);     
    }
    function index4()
    {
        $data['regional_rd'] = DB::table('regional_rd')->get();

        return view("Register_DEO",$data);     
    }
    function index44()
    {
        $data['regional_rd'] = DB::table('regional_rd')->get();

        return view("Register_DED",$data);     
    }
    function index5()
    {
        $data['regional_rd'] = DB::table('regional_rd')->get();

        return view("Register_RD",$data);     
    }
    function index6()
    {
        $data['regional_rd'] = DB::table('regional_rd')->get();

        return view("Register_TAMISEMI_Director",$data);     
    }
    function index7()
    {
        $data['regional_rd'] = DB::table('regional_rd')->get();

        return view("auth.register",$data);     
    }
    function index8()
    {
        $data['regional_rd'] = DB::table('regional_rd')->get();

        return view("register_health_worker",$data);     
    }
    function getCity()
    {
        $id = $_GET['myID'];

        // $data['result'] = DB::table('states')
        // ->join('city','states.id','=','city.state_id')
        // -where('id',$id)
        // ->get();

        $res = DB::table('regional_rd')
        ->join('districts','regional_rd.id','=','districts.regional_id')
        ->where('regional_rd.id', $id)
        ->get();

        return Response::json($res);

        // return view("dropdown",$result);
    }
    function getStadiumDetail()
    {
        $id = $_GET['id'];

  
        // $data['result'] = DB::table('states')
        // ->join('city','states.id','=','city.state_id')
        // -where('id',$id)
        // ->get();

        $res = DB::table('districts')
        ->join('wards','districts.id','=','wards.district_id')
        ->where('districts.id', $id)
        ->get();

     

        return Response::json($res);

        // return view("dropdown",$result);
    }
    function getStadiumDetail1()
    {
        $id = $_GET['id'];

  
        // $data['result'] = DB::table('states')
        // ->join('city','states.id','=','city.state_id')
        // -where('id',$id)
        // ->get();

        $res = DB::table('wards')
        ->join('schools','wards.id','=','schools.ward_id')
       // ->join('address','city.id','=','address.city_id')
        //->join('details','city.id','=','details.stadium_id')
        ->where('wards.id', $id)
        ->get();

        return Response::json($res);

        // return view("dropdown",$result);
    }
    function getStadiumDetail2(Request $request)
    {
        $id = $_GET['idi2'];

  
        // $data['result'] = DB::table('states')
        // ->join('city','states.id','=','city.state_id')
        // -where('id',$id)
        // ->get();
      
        $res = DB::table('schools')
        ->join('schools_role','schools.id','=','schools_role.schools_id')
        ->where('schools.id', $id)
        ->get();
    

       

        return Response::json($res);

        // return view("dropdown",$result);
    }
    function getStadiumDetail3(Request $request)
    {
        $id = $_GET['idi2'];

  
        // $data['result'] = DB::table('states')
        // ->join('city','states.id','=','city.state_id')
        // -where('id',$id)
        // ->get();
      
        $res = DB::table('schools')
        ->join('schools_role','schools.id','=','schools_role.schools_id')
        ->where('schools.id', $id)
        ->get();
    

       

        return Response::json($res);

        // return view("dropdown",$result);
    }
    function getStadiumDetail4()
    {
        $id = $_GET['id'];

  
        // $data['result'] = DB::table('states')
        // ->join('city','states.id','=','city.state_id')
        // -where('id',$id)
        // ->get();

        $res = DB::table('wards')
        ->join('hospitals','wards.id','=','hospitals.ward_id')
       // ->join('address','city.id','=','address.city_id')
        //->join('details','city.id','=','details.stadium_id')
        ->where('wards.id', $id)
        ->get();

        return Response::json($res);

        // return view("dropdown",$result);
    }
}
