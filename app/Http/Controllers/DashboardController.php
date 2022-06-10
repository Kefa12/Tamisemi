<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\Letter;
use App\Models\School;
use App\Models\Ward;
use App\Models\District;
use App\Models\Regional;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
       
        if(Auth::user()->hasRole('DED')){
            $letters = Letter::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
       
           
            $districts = District::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
       
            return view('Dist.index', compact('districts','letters'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }elseif(Auth::user()->hasRole('District_Medical_Officer')){
            $letters = Letter::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
       
           
            $districts = District::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
       
            return view('Dist.index', compact('districts','letters'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }elseif(Auth::user()->hasRole('Regional_Director')){
            $letters = Letter::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
       
           
            $regionals = Regional::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
       
            return view('reg.index', compact('regionals','letters'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }elseif(Auth::user()->hasRole('Tamisemi_Director')){
            if($request->term){
                $letters = Letter::where([
                    ['regional','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term)){
                        $query->orWhere('regional','LIKE','%'.$term.'%')->get();
                       }
                   }]
                ])
                    ->orderBy("id","desc")
                    ->paginate(10);
                }elseif($request->term1){
                    $letters = Letter::where([
                        ['regional','!=', NULL],
                       [function($query) use ($request) {
                           if(($term=$request->term1)){
                            $query->orWhere('regional','LIKE','%'.$term.'%')->get();
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
                         $i=0;
                         $data = DB::table("users")->count('id');
                         $data1 = DB::table("school_dp")->count('id');
                         $data2 = DB::table("letters")->count('id');
                         $data3 = Letter::where('Tamisemi','=','pending')->count();
                        
            if($request->status=="1")
                return view('reg.index', compact('letters','transfers'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
            else
              return view('dashboardT', compact('letters','transfers','data','data1','data2','data3'))
                  ->with('i', (request()->input('page', 1) - 1) * 5);
          
        
        }elseif(Auth::user()->hasRole('Teacher')){
               //
        if($request->term){
            $letters = Letter::where([
                ['ward','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('ward','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
            }elseif($request->term1){
                $letters = Letter::where([
                    ['regional','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term1)){
                        $query->orWhere('regional','LIKE','%'.$term.'%')->get();
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
                $regionals = Regional::where([
                        ['name','!=', NULL],
                       [function($query) use ($request) {
                           if(($term=$request->term)){
                            $query->orWhere('name','LIKE','%'.$term.'%')->get();
                           }
                       }]
                    ])
                        ->orderBy("id","desc")
                        ->paginate(10);

                 $districts = District::where([
                            ['name','!=', NULL],
                           [function($query) use ($request) {
                               if(($term=$request->term)){
                                $query->orWhere('name','LIKE','%'.$term.'%')->get();
                               }
                           }]
                        ])
                            ->orderBy("id","desc")
                            ->paginate(10);

                 $wards = Ward::where([
                                ['name','!=', NULL],
                               [function($query) use ($request) {
                                   if(($term=$request->term)){
                                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                                   }
                               }]
                            ])
                                ->orderBy("id","desc")
                                ->paginate(10);
                                
                $schools = School::where([
                                    ['name','!=', NULL],
                                   [function($query) use ($request) {
                                       if(($term=$request->term)){
                                        $query->orWhere('name','LIKE','%'.$term.'%')->get();
                                       }
                                   }]
                                ])
                                    ->orderBy("id","desc")
                                    ->paginate(20);
                    
                    

                     $data = DB::table("letters")->count('Employee_id');
                      $i=0;
                   
                         

                    
                    $k=0;
            return view('Teachdash2', compact('letters','transfers','data','i','k','regionals','districts','wards','schools'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }elseif(Auth::user()->hasRole('Headmaster')){
           //
        $districts = District::where([
            ['name','!=', NULL],
           [function($query) use ($request) {
               if(($term=$request->term)){
                $query->orWhere('name','LIKE','%'.$term.'%')->get();
               }
           }]
        ])
            ->orderBy("id","desc")
            ->paginate(10);
     
        $letters = Letter::where([
            ['name','!=', NULL],
           [function($query) use ($request) {
               if(($term=$request->term)){
                $query->orWhere('name','LIKE','%'.$term.'%')->get();
               }
           }]
        ])
            ->orderBy("id","desc")
            ->paginate(20);
   
       
        $schools = School::where([
            ['name','!=', NULL],
           [function($query) use ($request) {
               if(($term=$request->term)){
                $query->orWhere('name','LIKE','%'.$term.'%')->get();
               }
           }]
        ])
            ->orderBy("id","desc")
            ->paginate(20);

            
            $wards = Ward::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
   
        return view('Masters.index', compact('schools','letters','districts','wards'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }elseif(Auth::user()->hasRole('Health_Worker')){

            return view('HealthDash');
        }elseif(Auth::user()->hasRole('Weo')){
            
            $letters = Letter::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
       
           
            $wards = Ward::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
       
            return view('Wards.index', compact('wards','letters'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }elseif(Auth::user()->hasRole('DEO')){
            $letters = Letter::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
       
           
            $districts = District::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
       
            return view('Dist.index', compact('districts','letters'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }elseif(Auth::user()->hasRole('District_Medical_Officer')){
            $letters = Letter::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
       
           
            $districts = District::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);
       
            return view('Dist.index', compact('districts','letters'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }elseif(Auth::user()->hasRole('Medical_Doctor_in-charge')){
            return view('MDCdash');
        }
        
  

    }
}

