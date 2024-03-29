<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\Letter;
use App\Models\Chance;
use App\Models\User;
use App\Models\School;
use App\Models\Role;
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
            $chances = Chance::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(20);
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
       
                $data=0;
                $k=0;
                $c=0;
                $chance=0;
       
            return view('Dmdash', compact('districts','letters','k','c','chance','data','chances'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }elseif(Auth::user()->hasRole('DMO')){
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

                $chances = Chance::where([
                    ['name','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term)){
                        $query->orWhere('name','LIKE','%'.$term.'%')->get();
                       }
                   }]
                ])
                    ->orderBy("id","desc")
                    ->paginate(20);

                $chance = DB::table("chances")->count('id');
                // $data = Letter::where('school','=','pending')->count();
         $data=0;
                $k=0;
                $c=0;
                $chance=0;
       
            return view('DMOdash', compact('districts','letters','k','c','chance','data','chances'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }elseif(Auth::user()->hasRole('Regional_Director')){
            $chances = Chance::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(20);
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

                $data=0;
                $k=0;
                $c=0;
                $chance=0;
       
            return view('administrator', compact('regionals','letters','k','c','chance','data','chances'))
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
                         $chance = DB::table("chances")->count('id');
                         $data = DB::table("users")->count('id');
                         $data1 = DB::table("school_dp")->count('id');
                         $data4 = DB::table("hospital_dp")->count('id');
                         $data2 = DB::table("letters")->count('id');
                         $data3 = Letter::where('Tamisemi','=','pending')->count();
                        
            if($request->status=="1")
                return view('reg.index', compact('letters','transfers'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
            else
              return view('dashboardT', compact('letters','transfers','data','data1','data2','data3','chance','data4'))
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

                                    $chances = Chance::where([
                                        ['name','!=', NULL],
                                       [function($query) use ($request) {
                                           if(($term=$request->term)){
                                            $query->orWhere('name','LIKE','%'.$term.'%')->get();
                                           }
                                       }]
                                    ])
                                        ->orderBy("id","desc")
                                        ->paginate(20);
                    
                    

                     $data1 = DB::table("letters")->count('Employee_id');
                     $data =Letter::where('chospital','=','pending')->count();
                      $i=0;
                      $s=0;
                   
                         
                    // $chance1 = DB::table("chances")->count('id');
                     // $chance2 = Chance::where('Tamisemi','=','Rejected by Tamisemi_Director')->count();
                      $chance = Chance::where('school','!=','pending')->count();
                     // $chance=$chance1-$chance3;
                    $k=0;
                    $e=0;
            return view('Teachdash2', compact('e','letters','transfers','data','i','k','regionals','districts','wards','schools','s','chance','chances'))
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
         $chances = Chance::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(20);
            $roles = Role::where([
                    ['id','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term)){
                        $query->orWhere('id','LIKE','%'.$term.'%')->get();
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
                $data=0;
                $k=0;
                $c=0;
                $chance=0;
   
        // return view('Masters.index', compact('schools','letters','districts','wards'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        return view('Headmaster_dash', compact('schools','letters','districts','chance','wards','data','k','chances','c','roles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }elseif(Auth::user()->hasRole('Health_Worker')){
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
                        $chances = Chance::where([
                                            ['name','!=', NULL],
                                           [function($query) use ($request) {
                                               if(($term=$request->term)){
                                                $query->orWhere('name','LIKE','%'.$term.'%')->get();
                                               }
                                           }]
                                        ])
                                            ->orderBy("id","desc")
                                            ->paginate(20); 
                        
                        
    
                         $data = Letter::where('chospital','!=','pending')->count('Employee_id');
                          $i=0;
                          $s=0;
                          $e=0;

                       
                             
                         // $chance = DB::table("chances")->count('id');
                          $chance = Chance::where('Tamisemi','=','Approved by Tamisemi_Director')->count();
                        
                        
                        $k=0;
                return view('HealthDash', compact('letters','transfers','data','i','k','regionals','districts','wards','schools','s','chance','chances','e'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
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
            
                $chances = Chance::where([
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

                $data=0;
                $k=0;
                $c=0;
                $chance=0;
       
            return view('WEOdash', compact('wards','letters','k','c','chance','data','chances'))
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

                $chances = Chance::where([
                    ['name','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term)){
                        $query->orWhere('name','LIKE','%'.$term.'%')->get();
                       }
                   }]
                ])
                    ->orderBy("id","desc")
                    ->paginate(20); 

                $data=0;
                $k=0;
                $c=0;
                $chance=0;
       
            return view('DEOdash', compact('districts','letters','k','c','chance','data','chances'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }elseif(Auth::user()->hasRole('Medical_Doctor')){
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
             $chances = Chance::where([
                    ['name','!=', NULL],
                   [function($query) use ($request) {
                       if(($term=$request->term)){
                        $query->orWhere('name','LIKE','%'.$term.'%')->get();
                       }
                   }]
                ])
                    ->orderBy("id","desc")
                    ->paginate(20);
                $roles = Role::where([
                        ['id','!=', NULL],
                       [function($query) use ($request) {
                           if(($term=$request->term)){
                            $query->orWhere('id','LIKE','%'.$term.'%')->get();
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

                   $data=0;
                    $k=0;
                    $c=0;
                    $chance=0;
       
            // return view('Masters.index', compact('schools','letters','districts','wards'))
            //     ->with('i', (request()->input('page', 1) - 1) * 5);
            return view('MDCdash', compact('schools','letters','districts','chance','wards','data','k','chances','c','roles'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
           
        }
        
  

    }
}

