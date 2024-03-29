<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\School;
use App\Models\Ward;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'Employee_id' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'name1' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
          
            'regional' => ['required', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
            'ward' => ['required', 'string', 'max:255'],
           
        ]);
    
        $regionals1 = DB::table('regional_rd')->where('id',$request->regional)->value('name');
        $districts1 = DB::table('district_dp')->where('id',$request->district)->value('name');
        $wards1 = DB::table('ward_dp')->where('id',$request->ward)->value('name');
        $schools1 = DB::table('school_dp')->where('id',$request->schools)->value('name');
        $hospital1 = DB::table('hospital_dp')->where('id',$request->schools)->value('name');
        //$regional = DB::select('select name from regionals where id=?',[$request->regional ]);
       //$regionals1->implode($regionals1," ");
       if($request->role_id=="Health_Worker" || $request->role_id=="Medical_Doctor_in-charge"){
        $user = User::create([
            'Employee_id' => $request->Employee_id,
            'name' => $request->name,
            'name1' => $request->name1,
            'email' => $request->email,
            'password' => Hash::make($request->password),
          
            'regional' =>  $regionals1,
            'district' =>  $districts1,
            'ward' => $wards1,
            'hospital' =>  $hospital1,
        ]);
        $user->attachRole($request->role_id);
        if($request->role_id=="Medical_Doctor_in-charge")
            $school = School::create([
                'name' => $request->schools,
                'Medical_Doctor_in-charge' => $request->name,
            ]);
            event(new Registered($user));

            Auth::login($user);
    
            return redirect(RouteServiceProvider::HOME);

        }else{
            $request->validate([
                'Employee_id' => ['required', 'string', 'max:255'],
                'name' => ['required', 'string', 'max:255'],
                'name1' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
              
                'regional' => ['required', 'string', 'max:255'],
                'district' => ['required', 'string', 'max:255'],
                'ward' => ['required', 'string', 'max:255'],
               
            ]);
        
            $regionals1 = DB::table('regional_rd')->where('id',$request->regional)->value('name');
            $districts1 = DB::table('district_dp')->where('id',$request->district)->value('name');
            $wards1 = DB::table('ward_dp')->where('id',$request->ward)->value('name');
            $schools1 = DB::table('school_dp')->where('id',$request->schools)->value('name');
            $hospital1 = DB::table('hospital_dp')->where('id',$request->schools)->value('name');
            //$regional = DB::select('select name from regionals where id=?',[$request->regional ]);
           //$regionals1->implode($regionals1," ");
           if($request->role_id=="Health_Worker"){
            $user = User::create([
                'Employee_id' => $request->Employee_id,
                'name' => $request->name,
                'name1' => $request->name1,
                'email' => $request->email,
                'password' => Hash::make($request->password),
              
                'regional' =>  $regionals1,
                'district' =>  $districts1,
                'ward' => $wards1,
                'schools' =>  $schools1,
            ]);
            $user->attachRole($request->role_id);
            if($request->role_id=="Headmaster")
                $school = School::create([
                    'name' => $request->school,
                    'Headmaster' => $request->name,
                ]);
                event(new Registered($user));
    
                Auth::login($user);
        
                return redirect(RouteServiceProvider::HOME);

        }    
       
        /** elseif($request->role_id=="Weo")
        $ward = Ward::create([
            'name' => $request->school,
            'WEO' => $request->name,
            'description' => $request->name,
        ]);
        */
    

       
    }
  }
}
