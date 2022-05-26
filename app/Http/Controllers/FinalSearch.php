<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\stud;
use App\Models\School;
use App\Models\Ward;
use App\Models\District;
use App\Models\Regional;
use App\Models\Letter;
use App\Models\Transfer;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
class FinalSearch extends Controller
{
    //
    public function index(Request $request)
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
            'schools' => ['required', 'string', 'max:255'],
        ]);
        $regionals1 = DB::table('regionals')->where('id',$request->regional)->value('name');
        $districts1 = DB::table('districts')->where('id',$request->district)->value('name');
        $wards1 = DB::table('wards')->where('id',$request->ward)->value('name');
        $schools1 = DB::table('schools')->where('id',$request->schools)->value('name');


        $user= new User();
        $user->Employee_id= $request['Employee_id'];
        $user->name= $request['name']; 
        $user->name1= $request['name1']; 
        $user->email= $request['email'];
        $user->password= Hash::make($request['password']);
        $user->regional= $regionals1;
        $user->district= $districts1;
        $user->ward=  $wards1;
        $user->schools=  $schools1;
        
        $user->save();
        $user->attachRole($request->user_id);
        $user->attachRole($request->role_id);
        $school= new School();
        $school->name=  $schools1; 
           // 'name' => $request->school,
           $school->Headmaster= $request['name']; 
            //'Headmaster' => $request->name,
            $school->ward_id= $request['district']; 
            //'ward_id' => $request->ward,
            $school->save();

            if($request->term){
                $letters = Letter::where([
                    ['cdistrict','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term)){
                        $query->orWhere('cdistrict','LIKE','%'.$term.'%')->get();
                       }
                   }]
                ])
                    ->orderBy("id","desc")
                    ->paginate(10);
                }elseif($request->term1){
                    $letters = Letter::where([
                        ['name','!=', NULL],
                       [function($query) use ($request) {
                           if(($term=$request->term1)){
                            $query->orWhere('name','LIKE','%'.$term.'%')->get();
                           }
                       }]
                    ])
                        ->orderBy("id","desc")
                        ->paginate(10);
                    }elseif($request->term2){
                        $letters = Letter::where([
                        ['tdistrict','!=', NULL],
                       [function($query) use ($request) {
                           if(($term=$request->term2)){
                            $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                           }
                       }]
                    ])
                        ->orderBy("id","desc")
                        ->paginate(30);
                    }else{
                        $letters = Letter::where([
                        ['tdistrict','!=', NULL],
                        [function($query) use ($request) {
                            if(($term=$request->term2)){
                             $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                            }
                        }]
                     ])
                         ->orderBy("id","desc")
                         ->paginate(30);
                    }
                    $transfers = Transfer::where([
                        ['tdistrict','!=', NULL],
                        [function($query) use ($request) {
                            if(($term=$request->term2)){
                             $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                            }
                        }]
                     ])
                         ->orderBy("id","desc")
                         ->paginate(30);
           
                return view('dashboardT', compact('letters','transfers'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    
           
    }
    public function index1(Request $request)
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
        $regionals1 = DB::table('regionals')->where('id',$request->regional)->value('name');
        $districts1 = DB::table('districts')->where('id',$request->district)->value('name');
        $wards1 = DB::table('wards')->where('id',$request->ward)->value('name');
        $schools1 = DB::table('schools')->where('id',$request->schools)->value('name');


        $user= new User();
        $user->Employee_id= $request['Employee_id'];
        $user->name= $request['name']; 
        $user->name1= $request['name1']; 
        $user->email= $request['email'];
        $user->password= Hash::make($request['password']);
      
        $user->regional=  $regionals1;
        $user->district= $districts1;
        $user->ward=  $wards1;
       
        
        $user->save();
        $user->attachRole($request->user_id);
        $user->attachRole($request->role_id);
        
        
        $wards= new Ward();
        $wards->name= $wards1; 
           // 'name' => $request->school,
           $wards->WEO= $request['name']; 
            //'Headmaster' => $request->name,
           $wards->district_id= $request->district; 
            //'ward_id' => $request->ward,
           $wards->save();

            if($request->term){
                $letters = Letter::where([
                    ['cdistrict','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term)){
                        $query->orWhere('cdistrict','LIKE','%'.$term.'%')->get();
                       }
                   }]
                ])
                    ->orderBy("id","desc")
                    ->paginate(10);
                }elseif($request->term1){
                    $letters = Letter::where([
                        ['name','!=', NULL],
                       [function($query) use ($request) {
                           if(($term=$request->term1)){
                            $query->orWhere('name','LIKE','%'.$term.'%')->get();
                           }
                       }]
                    ])
                        ->orderBy("id","desc")
                        ->paginate(10);
                    }elseif($request->term2){
                        $letters = Letter::where([
                        ['tdistrict','!=', NULL],
                       [function($query) use ($request) {
                           if(($term=$request->term2)){
                            $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                           }
                       }]
                    ])
                        ->orderBy("id","desc")
                        ->paginate(30);
                    }else{
                        $letters = Letter::where([
                        ['tdistrict','!=', NULL],
                        [function($query) use ($request) {
                            if(($term=$request->term2)){
                             $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                            }
                        }]
                     ])
                         ->orderBy("id","desc")
                         ->paginate(30);
                    }
                    $transfers = Transfer::where([
                        ['tdistrict','!=', NULL],
                        [function($query) use ($request) {
                            if(($term=$request->term2)){
                             $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                            }
                        }]
                     ])
                         ->orderBy("id","desc")
                         ->paginate(30);
       

       return view('dashboardT', compact('letters','transfers'))
                         ->with('i', (request()->input('page', 1) - 1) * 5);
                        
           
    }
    public function index2(Request $request)
    {
        $request->validate([
            'Employee_id' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'name1' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            
            'regional' => ['required', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
          
            
        ]);
        
        $regionals1 = DB::table('regionals')->where('id',$request->regional)->value('name');
        $districts1 = DB::table('districts')->where('id',$request->district)->value('name');
        $wards1 = DB::table('wards')->where('id',$request->ward)->value('name');
        $schools1 = DB::table('schools')->where('id',$request->schools)->value('name');

        $user= new User();
        $user->Employee_id= $request['Employee_id'];
        $user->name= $request['name']; 
        $user->name1= $request['name1']; 
        $user->email= $request['email'];
        $user->password= Hash::make($request['password']);
      
        $user->regional=  $regionals1;
        $user->district=  $districts1;
     
       
        
        $user->save();
        $user->attachRole($request->user_id);
        $user->attachRole($request->role_id);
        
        
        $districts =new District();
        $districts->name= $districts1; 
           // 'name' => $request->school,
           $districts->DED= $request['name']; 
            //'Headmaster' => $request->name,
          $districts->regional_id=$request['regional']; 
            //'ward_id' => $request->ward,
            $districts->save();

            if($request->term){
                $letters = Letter::where([
                    ['cdistrict','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term)){
                        $query->orWhere('cdistrict','LIKE','%'.$term.'%')->get();
                       }
                   }]
                ])
                    ->orderBy("id","desc")
                    ->paginate(10);
                }elseif($request->term1){
                    $letters = Letter::where([
                        ['name','!=', NULL],
                       [function($query) use ($request) {
                           if(($term=$request->term1)){
                            $query->orWhere('name','LIKE','%'.$term.'%')->get();
                           }
                       }]
                    ])
                        ->orderBy("id","desc")
                        ->paginate(10);
                    }elseif($request->term2){
                        $letters = Letter::where([
                        ['tdistrict','!=', NULL],
                       [function($query) use ($request) {
                           if(($term=$request->term2)){
                            $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                           }
                       }]
                    ])
                        ->orderBy("id","desc")
                        ->paginate(30);
                    }else{
                        $letters = Letter::where([
                        ['tdistrict','!=', NULL],
                        [function($query) use ($request) {
                            if(($term=$request->term2)){
                             $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                            }
                        }]
                     ])
                         ->orderBy("id","desc")
                         ->paginate(30);
                    }
                    $transfers = Transfer::where([
                        ['tdistrict','!=', NULL],
                        [function($query) use ($request) {
                            if(($term=$request->term2)){
                             $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                            }
                        }]
                     ])
                         ->orderBy("id","desc")
                         ->paginate(30);
       

       return view('dashboardT', compact('letters','transfers'))
                         ->with('i', (request()->input('page', 1) - 1) * 5);
           
    }
    public function index3(Request $request)
    {
        $request->validate([
            'Employee_id' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'name1' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            
            'regional' => ['required', 'string', 'max:255'],
          
          
            
        ]);
        
        $regionals1 = DB::table('regionals')->where('id',$request->regional)->value('name');
        $districts1 = DB::table('districts')->where('id',$request->district)->value('name');
        $wards1 = DB::table('wards')->where('id',$request->ward)->value('name');
        $schools1 = DB::table('schools')->where('id',$request->schools)->value('name');
        
        $user= new User();
        $user->Employee_id= $request['Employee_id'];
        $user->name= $request['name']; 
        $user->name1= $request['name1']; 
        $user->email= $request['email'];
        $user->password= Hash::make($request['password']);
      
        $user->regional=  $regionals1;

        $regionals =new Regional();
        $regionals->name= $regionals1; 
           // 'name' => $request->school,
           $regionals->RD= $request['name']; 
            
            //'ward_id' => $request->ward,
            $regionals->save();
     
     
       
        
        $user->save();
        $user->attachRole($request->user_id);
        $user->attachRole($request->role_id);

        if($request->term){
            $letters = Letter::where([
                ['cdistrict','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('cdistrict','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
            }elseif($request->term1){
                $letters = Letter::where([
                    ['name','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term1)){
                        $query->orWhere('name','LIKE','%'.$term.'%')->get();
                       }
                   }]
                ])
                    ->orderBy("id","desc")
                    ->paginate(10);
                }elseif($request->term2){
                    $letters = Letter::where([
                    ['tdistrict','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term2)){
                        $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                       }
                   }]
                ])
                    ->orderBy("id","desc")
                    ->paginate(30);
                }else{
                    $letters = Letter::where([
                    ['tdistrict','!=', NULL],
                    [function($query) use ($request) {
                        if(($term=$request->term2)){
                         $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                        }
                    }]
                 ])
                     ->orderBy("id","desc")
                     ->paginate(30);
                }
                $transfers = Transfer::where([
                    ['tdistrict','!=', NULL],
                    [function($query) use ($request) {
                        if(($term=$request->term2)){
                         $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                        }
                    }]
                 ])
                     ->orderBy("id","desc")
                     ->paginate(30);
   

   return view('dashboardT', compact('letters','transfers'))
                     ->with('i', (request()->input('page', 1) - 1) * 5);
    
           
    }
    public function index4(Request $request)
    {
        $request->validate([
            'Employee_id' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'name1' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            
         
          
          
            
        ]);
        $user= new User();
        $user->Employee_id= $request['Employee_id'];
        $user->name= $request['name']; 
        $user->name1= $request['name1']; 
        $user->email= $request['email'];
        $user->password= Hash::make($request['password']);
      
      
     
     
       
        
        $user->save();
        $user->attachRole($request->user_id);
        $user->attachRole($request->role_id);

        if($request->term){
            $letters = Letter::where([
                ['cdistrict','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('cdistrict','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
            }elseif($request->term1){
                $letters = Letter::where([
                    ['name','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term1)){
                        $query->orWhere('name','LIKE','%'.$term.'%')->get();
                       }
                   }]
                ])
                    ->orderBy("id","desc")
                    ->paginate(10);
                }elseif($request->term2){
                    $letters = Letter::where([
                    ['tdistrict','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term2)){
                        $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                       }
                   }]
                ])
                    ->orderBy("id","desc")
                    ->paginate(30);
                }else{
                    $letters = Letter::where([
                    ['tdistrict','!=', NULL],
                    [function($query) use ($request) {
                        if(($term=$request->term2)){
                         $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                        }
                    }]
                 ])
                     ->orderBy("id","desc")
                     ->paginate(30);
                }
                $transfers = Transfer::where([
                    ['tdistrict','!=', NULL],
                    [function($query) use ($request) {
                        if(($term=$request->term2)){
                         $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                        }
                    }]
                 ])
                     ->orderBy("id","desc")
                     ->paginate(30);
   

   return view('dashboardT', compact('letters','transfers'))
                     ->with('i', (request()->input('page', 1) - 1) * 5);
           
    }
    public function index5(Request $request)
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
            'schools' => ['required', 'string', 'max:255'],
        ]);
        $regionals1 = DB::table('regionals')->where('id',$request->regional)->value('name');
        $districts1 = DB::table('districts')->where('id',$request->district)->value('name');
        $wards1 = DB::table('wards')->where('id',$request->ward)->value('name');
        $schools1 = DB::table('schools')->where('id',$request->schools)->value('name');


        $user= new User();
        $user->Employee_id= $request['Employee_id'];
        $user->name= $request['name']; 
        $user->name1= $request['name1']; 
        $user->email= $request['email'];
        $user->password= Hash::make($request['password']);
        $user->regional= $regionals1;
        $user->district= $districts1;
        $user->ward=  $wards1;
        $user->schools=  $schools1;
        
        $user->save();
        $user->attachRole($request->user_id);
        $user->attachRole($request->role_id);
        $hospital= new Hospital();
        $hospital->name=  $schools1; 
           // 'name' => $request->school,
           $hospital->doctor= $request['name']; 
            //'Headmaster' => $request->name,
            $hospital->ward_id= $request['district']; 
            //'ward_id' => $request->ward,
            $hospital->save();

        if($request->term){
            $letters = Letter::where([
                ['cdistrict','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('cdistrict','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
            }elseif($request->term1){
                $letters = Letter::where([
                    ['name','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term1)){
                        $query->orWhere('name','LIKE','%'.$term.'%')->get();
                       }
                   }]
                ])
                    ->orderBy("id","desc")
                    ->paginate(10);
                }elseif($request->term2){
                    $letters = Letter::where([
                    ['tdistrict','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term2)){
                        $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                       }
                   }]
                ])
                    ->orderBy("id","desc")
                    ->paginate(30);
                }else{
                    $letters = Letter::where([
                    ['tdistrict','!=', NULL],
                    [function($query) use ($request) {
                        if(($term=$request->term2)){
                         $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                        }
                    }]
                 ])
                     ->orderBy("id","desc")
                     ->paginate(30);
                }
                $transfers = Transfer::where([
                    ['tdistrict','!=', NULL],
                    [function($query) use ($request) {
                        if(($term=$request->term2)){
                         $query->orWhere('tdistrict','LIKE','%'.$term.'%')->get();
                        }
                    }]
                 ])
                     ->orderBy("id","desc")
                     ->paginate(30);
   

   return view('HealthDash', compact('letters','transfers'))
                     ->with('i', (request()->input('page', 1) - 1) * 5);
           
    }
    
    
    
    
    public function create()
    {
        return view('search.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'email1' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('search.index')
            ->with('success', 'user created successfully.');
    }
   
    public function show(User $user)
    {
        return view('search.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('search.edit', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);
        $user->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'user updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $users->delete();

        return redirect()->route('search.index')
            ->with('success', 'Project deleted successfully');
    }
}
