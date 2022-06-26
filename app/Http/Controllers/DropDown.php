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

        return view("registe3",$data);
       
       
       
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
    function index9()
    {
        $data['regional_rd'] = DB::table('regional_rd')->get();

        return view("Medical_Doctor",$data);     
    }
    function index10()
    {
        $data['regional_rd'] = DB::table('regional_rd')->get();

        return view("DMO",$data);     
    }
    function getCity()
    {
        $id = $_GET['myID'];

        // $data['result'] = DB::table('states')
        // ->join('city','states.id','=','city.state_id')
        // -where('id',$id)
        // ->get();

        $res = DB::table('regional_rd')
        ->join('district_dp','regional_rd.id','=','district_dp.regional_id')
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

        $res = DB::table('district_dp')
        ->join('ward_dp','district_dp.id','=','ward_dp.district_id')
        ->where('district_dp.id', $id)
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

        $res = DB::table('ward_dp')
        ->join('school_dp','ward_dp.id','=','school_dp.ward_id')
       // ->join('address','city.id','=','address.city_id')
        //->join('details','city.id','=','details.stadium_id')
        ->where('ward_dp.id', $id)
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
      
        $res = DB::table('school_dp')
        ->join('schools_role','school_dp.id','=','schools_role.schools_id')
        ->where('school_dp.id', $id)
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
      
        $res = DB::table('school_dp')
        ->join('schools_role','school_dp.id','=','schools_role.schools_id')
        ->where('school_dp.id', $id)
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

        $res = DB::table('ward_dp')
        ->join('hospital_dp','ward_dp.id','=','hospital_dp.ward_id')
       // ->join('address','city.id','=','address.city_id')
        //->join('details','city.id','=','details.stadium_id')
        ->where('ward_dp.id', $id)
        ->get();

        return Response::json($res);

        // return view("dropdown",$result);
    }
}
