<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\Letter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
       
        if(Auth::user()->hasRole('DED')){
            return view('DMdash');
        }elseif(Auth::user()->hasRole('Regional_Director')){
            return view('administrator');
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
                        
            if($request->status=="1")
                return view('reg.index', compact('letters','transfers'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
            else
              return view('dashboardT', compact('letters','transfers'))
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
       
            return view('search.index1', compact('letters','transfers'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }elseif(Auth::user()->hasRole('Headmaster')){
            return view('Headmaster_dash');
        }elseif(Auth::user()->hasRole('Health_Worker')){

            return view('HealthDash');
        }elseif(Auth::user()->hasRole('Weo')){
            
            return view('WEOdash');
        }elseif(Auth::user()->hasRole('DEO')){
            return view('DEOdash');
        }elseif(Auth::user()->hasRole('District_Medical_Officer')){
            return view('DMOdash');
        }elseif(Auth::user()->hasRole('Medical_Doctor_in-charge')){
            return view('MDCdash');
        }
        
  

    }
}

