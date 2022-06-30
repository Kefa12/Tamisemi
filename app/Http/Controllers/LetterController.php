<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Models\letter_back;
use App\Models\Chance;
use Illuminate\Http\Request;
use App\Models\Transfer;


use App\Models\User;
use App\Models\School;
use App\Models\District;
use App\Models\Ward;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Redirect,Response;


class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index(Request $request)
    {
        //$date1 = "2022-05-01 04:03:00";
// End date
      
     
        //
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
            $chances =Chance::where([
                ['name','!=', NULL],
               [function($query) use ($request) {
                   if(($term=$request->term)){
                    $query->orWhere('name','LIKE','%'.$term.'%')->get();
                   }
               }]
            ])
                ->orderBy("id","desc")
                ->paginate(10);

            $date1 =DB::table('letters')->where('name',$request->name)->value('created_at');
            
          
            $date2 = date('Y-m-d H:i:s');
            $diff = strtotime($date2) - strtotime($date1);
     
           $dateDiff = abs(round($diff / 86400));
           $t=1;
   
        return view('Letters.index', compact('letters','date2','t','chances'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index2(Request $request)
    {
        //
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
   
        return view('Letters.index3', compact('letters'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index12(Request $request)
    {
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
    }
    public function index30(Request $request)
    {
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
   
        return view('Health.index', compact('schools','letters','districts','wards'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index31(Request $request)
    {
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
   
        return view('Health.create', compact('schools','letters','districts','wards'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index13(Request $request)
    {
        //
        $chances =Chance::where([
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
        
        $letter_back = letter_back::where([
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
   
        return view('Teachdash5', compact('schools','letters','districts','wards','chances','letter_back'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index22(Request $request)
    {
        //
        $chances =Chance::where([
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
        
        $letter_back = letter_back::where([
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
        //   $users = User::join('role_user','users.id','=','role_user.user_id')
        //                 ->Where('role_user.role_id','=','2')
        //                   ->get(['users.*','role_user.*']); 
                          
                          $users = DB::table('users')->get();
   
        return view('Headmaster_dash0', compact('schools','letters','districts','wards','chances','letter_back','users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index23(Request $request)
    {
        //
        $chances =Chance::where([
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
        
        $letter_back = letter_back::where([
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
          $users = User::join('role_user','users.id','=','role_user.user_id')
                        ->Where('role_user.role_id','=','2')
                          ->get(['users.*','role_user.*']);   
   
        return view('WEOdash2', compact('schools','letters','districts','wards','chances','letter_back','users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index24(Request $request)
    {
        //
        $chances =Chance::where([
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
        
        $letter_back = letter_back::where([
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
                $users = User::join('role_user','users.id','=','role_user.user_id')
                ->Where('role_user.role_id','=','2')
                  ->get(['users.*','role_user.*']); 
         $T_users = User::join('role_user','users.id','=','role_user.user_id')
                     ->Where('role_user.role_id','=','2')
                       ->get(['users.*','role_user.*']); 
         $H_users = User::join('role_user','users.id','=','role_user.user_id')
                       ->Where('role_user.role_id','=','10')
                         ->get(['users.*','role_user.*']);
                         
                          
   
        return view('DEOdash2', compact('schools','letters','districts','wards','chances','letter_back','T_users','H_users','users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index25(Request $request)
    {
        //
        $chances =Chance::where([
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
        
        $letter_back = letter_back::where([
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
          $T_users = User::join('role_user','users.id','=','role_user.user_id')
                        ->Where('role_user.role_id','=','2')
                          ->get(['users.*','role_user.*']);
          $H_users = User::join('role_user','users.id','=','role_user.user_id')
                          ->Where('role_user.role_id','=','10')
                            ->get(['users.*','role_user.*']);    
   
        return view('administrator1', compact('schools','letters','districts','wards','chances','letter_back','T_users','H_users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function index3(Request $request, Letter $letter)
    {
        //
        $request->validate([
            'name' => 'required',
            'cschool1' => 'required',
            'cdistrict' => 'required',
            'tdistrict' => 'required',
            'regional' => 'required',
            'description' => 'required',
            'Message' => 'required',
            'author' => 'required',
            'ward1' => 'required',
            'schools' => 'required',
            'Headmaster' => 'required',
            'tHeadmaster' => 'required',
            'WEO' => 'required',
            'DEO' => 'required',
            'DED' => 'required',
        ]);

     
        $letter->update($request->all());
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
                $i=0;
      
        return view('Masters.index', compact('letters','schools','i'))
        ->with('success', 'request update successfully.');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Letters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
           
            'name' => 'required',
           
            'cdistrict' => 'required',
            'tdistrict' => 'required',
            'regional' => 'required',
            'tregional' => 'required',
            'description' => 'required',
            'ward1' => 'required',
            'tward' => 'required',
           
            'Headmaster' => 'required',
           
            'DED' => 'required',
        ]);
        $exist = DB::table('letters')->where('Employee_id',$request->Employee_id)->value('Employee_id');
        $exist1 = DB::table('letters')->where('name',$request->name)->value('name');
        if(($exist==NULL) && ($exist1==NULL)){
        $regional1 = DB::table('regional_rd')->where('id',$request->tregional)->value('name');
        $districts1 = DB::table('district_dp')->where('id',$request->tdistrict)->value('name');
        $wards1 = DB::table('ward_dp')->where('id',$request->tward)->value('name');
        $schools1 = DB::table('school_dp')->where('id',$request->tschool)->value('name');
        $hospital = DB::table('hospital_dp')->where('id',$request->thospital)->value('name');
        if(  $request->stat=="stat"){
        Letter::create([
            'Employee_id' => $request->Employee_id,
            'name' =>  $request->name,
      
            'chospital' => $request->chospital,
          
            'thospital' => $hospital,
            'cdistrict' => $request->cdistrict,
            'tregional' =>  $regional1,
            'regional' =>  $request->regional,
            'ward' => $request->ward1,
            'tward' =>  $wards1,
            'tdistrict' =>  $districts1,
            'description' => $request->description,
        ]);
    }else{
        Letter::create([
            'Employee_id' => $request->Employee_id,
            'name' =>  $request->name,
            'cschool' => $request->cschool1,
          
            'tschool' => $schools1,
           
            'cdistrict' => $request->cdistrict,
            'tregional' =>  $regional1,
            'regional' =>  $request->regional,
            'ward' => $request->ward1,
            'tward' =>  $wards1,
            'tdistrict' =>  $districts1,
            'description' => $request->description,
        ]);
    }

        return redirect()->route('letters.index')
            ->with('success', 'request letter created successfully.');
    }
    else
    return redirect()->route('letters.index')
    ->with('success', 'duplication of request.');
    
    }
    public function store2(Request $request)
    {
        //
        $request->validate([
            
            'name' => 'required',
            'cschool1' => 'required',
            'cdistrict' => 'required',
            'tdistrict' => 'required',
            'regional' => 'required',
            'description' => 'required',
            'Message' => 'required',
            'author' => 'required',
            'ward1' => 'required',
            'schools' => 'required',
            'Teacher_approved'=>'required',
            'Headmaster' => 'required',
            'tHeadmaster' => 'required',
            'WEO' => 'required',
            'DEO' => 'required',
            'DED' => 'required',
        ]);
        $exist = DB::table('letters')->where('Employee_id',$request->Employee_id)->value('Employee_id');
        if($exist==NULL){
            if($request->thospital !="" && $request->chospital!=""){
        Letter::create([
            'Employee_id' =>  $request->Employee_id,
            'name' =>  $request->name,
            'chospital' => $request->chospital,
            'thospital' => $request->thospital,
            'cdistrict' => $request->cdistrict,
            'ward' => $request->ward1,
            'tdistrict' => $request->tdistrict,
            'tregional' => $request->tregional,
            'regional' => $request->regional,
            'tward' => $request->tward,
            'description' => $request->description,
            'Message' => $request->Message,
            'author' => $request->author,
            'Health_approved' => $request->Health_approved,
         
            'DED' => $request->DED,
        ]);
    }else{
        Letter::create([
            'Employee_id' =>  $request->Employee_id,
            'name' =>  $request->name,
            'cschool' => $request->cschool1,
            'tschool' => $request->schools,
            'cdistrict' => $request->cdistrict,
            'ward' => $request->ward1,
            'tdistrict' => $request->tdistrict,
            'tregional' => $request->tregional,
            'regional' => $request->regional,
            'tward' => $request->tward,
            'description' => $request->description,
            'Message' => $request->Message,
            'author' => $request->author,
            'Teacher_approved' => $request->Teacher_approved,
            'Headmaster' => $request->Headmaster,
            'Transfer_Headmaster' => $request->tHeadmaster,
            'WEO' => $request->WEO,
            'DEO' => $request->DEO,
           
            'DED' => $request->DED,
        ]);
    }

           // Letter::create($request->all());

        return redirect()->route('letters.index')
            ->with('success', 'request letter created successfully.');
    } else
    return redirect()->route('letters.index')
    ->with('success', 'duplication of request.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function show(Letter $letter)
    {
        //
        $date2 = date('Y-m-d H:i:s');
        return view('Letters.show', compact('letter','date2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function edit(Letter $letter,Request $request, Chance $chance)
    {
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
                ->paginate(10);
        $date2 = date('Y-m-d H:i:s');
        return view('Letters.edit', compact('letter','date2','chance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Letter $letter)
    {
        //    
        $request->validate([
            'cschool1' => 'required',
            'cdistrict' => 'required',
            'tdistrict' => 'required',
            'regional' => 'required',
            'description' => 'required',
           
            
            'DED' => 'required',
           
           
          
        ]); 
      
        if($request->Teacher_approved=="support BY TEACHER" && $request->statusi=='m'){
          
           $letter->update($request->all());
           $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
           $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
           if($exist1==NULL){
           Letter::create([
            'Employee_id' =>   $exist,
            'name' =>  $request->author,
            'cschool' => $request->schools,
            'tschool' => $request->cschool1,
            'cdistrict' => $request->tdistrict,
            'ward' => $request->tward,
            'tdistrict' => $request->cdistrict,
            'tregional' => $request->regional,
            'regional' => $request->tregional,
            'tward' => $request->ward,
            'description' => $request->description,
            'Message' => $request->Message,
            'author' => $request->name,
            'Teacher_approved' => $request->Teacher_approved,
            'Headmaster' => $request->tHeadmaster,
            'Transfer_Headmaster' => $request->Headmaster,
            'WEO' => $request->WEO,
            'DEO' => $request->DEO,
           
            'DED' => $request->DED,
         ]);
        
         return redirect()->route('letters.index')
         ->with('success', 'request created.');
  

    }else{
        $exist2=$request->cschool1;
        DB::table('letters')
        ->where('name',  $request->author)
        ->update(['tregional' => $request->regional]);
        DB::table('letters')
        ->where('name',  $request->author)
        ->update(['tdistrict' =>  $request->cdistrict]);
        DB::table('letters')
        ->where('name',  $request->author)
        ->update(['Teacher_approved' =>  $request->Teacher_approved]);
       
        DB::table('letters')
        ->where('name',  $request->author)
        ->update(['tward' =>  $request->ward1]);
        DB::table('letters')
        ->where('name',  $request->author)
        ->update(['author' =>  $request->name]);
        DB::table('letters')
        ->where('name',  $request->author)
        ->update(['tschool' =>  $exist2]);
        return redirect()->route('letters.index')
        ->with('success', 'request updated');
    }
        }else if($request->Teacher_approved=="Not_support BY TEACHER" && $request->statusi=='m'){
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
                
                    return redirect()->route('letters.index')
                    ->with('success', 'not support swapping.');
        }
       
            if($request->Tamisemi=="Approved BY Tamisemi_Director" && $request->author=="unknown"){
                letter_back::create([
                    'Employee_id' =>   $request->Employee_id,
                    'name' =>  $request->name,
                    'tschool' => $request->schools,
                    'cschool' => $request->cschool1,
                    'chospital' => $request->chospital,
                    'cdistrict' => $request->cdistrict,
                    'thospital' => $request->thospital,
                    'tward' => $request->tward,
                    'tdistrict' => $request->tdistrict,
                    'tregional' => $request->tregional,
                    'regional' => $request->regional,
                    'ward' => $request->ward,
                    'description' => $request->description,
                    'Message' => $request->Message,
                    'author' => $request->author,
                    'Tamisemi' => $request->Tamisemi,
                    'Teacher_approved' => $request->Teacher_approved,
                    'Headmaster' => $request->tHeadmaster,
                    'Transfer_Headmaster' => $request->Headmaster,
                    'WEO' => $request->WEO,
                    'DEO' => $request->DEO,
                   
                    'DED' => $request->DED,
                ]); 
          
            $request1= $request->regional;
        
            $request2=  $request->cdistrict;
           
            $request3= $request->ward;
          
           
            $request4=$request->tschool;
         
          
            // DB::update('update users set regional = ?,district=?,ward=?,schools=? where Employee_id = ?',[$request->tregional, $request->tdistrict,$request3,$request->tschool,$request->Employee_id]);
            if($request->tschool !="" ){
                DB::table('users')
                ->where('Employee_id', $request->Employee_id)
                ->update(['schools' =>  $request->tschool]);
              
                }
                if($request->thospital !="" ){
                    DB::table('users')
                    ->where('Employee_id', $request->Employee_id)
                    ->update(['hospital' =>$request->thospital]);
                }
              DB::table('users')
              ->where('Employee_id', $request->Employee_id)
              ->update(['regional' =>  $request->tregional]);
              DB::table('users')
              ->where('Employee_id', $request->Employee_id)
              ->update(['district' =>   $request->tdistrict]);
              DB::table('users')
              ->where('Employee_id', $request->Employee_id)
              ->update(['ward' =>  $request->tward]);
              $letter=Letter::where('Employee_id',$request->Employee_id)->delete();
            
            //$users = User::find($request->Employee_id);
            // $users->schools = $request4;
            // $users->district = $request->tdistrict;
            // $users->regional = $request->tregional;
          
            // $users->update();
            return redirect()->route('dashboard')
            ->with('success', 'request approved.');
        }
        if($request->Tamisemi=="Approved BY Tamisemi_Director" && $request->Teacher_approved!="support BY TEACHER"){
            letter_back::create([
                'Employee_id' =>   $request->Employee_id,
                'name' =>  $request->name,
                'tschool' => $request->schools,
                'cschool' => $request->cschool1,
                'chospital' => $request->chospital,
                'cdistrict' => $request->cdistrict,
                'thospital' => $request->thospital,
                'tward' => $request->tward,
                'tdistrict' => $request->tdistrict,
                'tregional' => $request->tregional,
                'regional' => $request->regional,
                'ward' => $request->ward,
                'description' => $request->description,
                'Message' => $request->Message,
                'author' => $request->author,
                'Tamisemi' => $request->Tamisemi,
                'Teacher_approved' => $request->Teacher_approved,
                'Headmaster' => $request->tHeadmaster,
                'Transfer_Headmaster' => $request->Headmaster,
                'WEO' => $request->WEO,
                'DEO' => $request->DEO,
               
                'DED' => $request->DED,
            ]); 
      
        $request1= $request->regional;
    
        $request2=  $request->cdistrict;
       
        $request3= $request->ward;
      
       
        $request4=$request->tschool;
     
      
        // DB::update('update users set regional = ?,district=?,ward=?,schools=? where Employee_id = ?',[$request->tregional, $request->tdistrict,$request3,$request->tschool,$request->Employee_id]);
        if($request->tschool !="" ){
            DB::table('users')
            ->where('Employee_id', $request->Employee_id)
            ->update(['schools' =>  $request->tschool]);
          
            }
            if($request->thospital !="" ){
                DB::table('users')
                ->where('Employee_id', $request->Employee_id)
                ->update(['hospital' =>$request->thospital]);
            }
          DB::table('users')
          ->where('Employee_id', $request->Employee_id)
          ->update(['regional' =>  $request->tregional]);
          DB::table('users')
          ->where('Employee_id', $request->Employee_id)
          ->update(['district' =>   $request->tdistrict]);
          DB::table('users')
          ->where('Employee_id', $request->Employee_id)
          ->update(['ward' =>  $request->tward]);
          $letter=Letter::where('Employee_id',$request->Employee_id)->delete();
        
        //$users = User::find($request->Employee_id);
        // $users->schools = $request4;
        // $users->district = $request->tdistrict;
        // $users->regional = $request->tregional;
      
        // $users->update();
        return redirect()->route('dashboard')
        ->with('success', 'request approved.');
        }
        if($request->author!="unknown" && $request->Tamisemi=="Approved BY Tamisemi_Director" && $request->Teacher_approved=="pending" ){
            letter_back::create([
                'Employee_id' =>   $request->Employee_id,
                'name' =>  $request->name,
                'tschool' => $request->schools,
                'cschool' => $request->cschool1,
                'chospital' => $request->chospital,
                'cdistrict' => $request->cdistrict,
                'thospital' => $request->thospital,
                'tward' => $request->tward,
                'tdistrict' => $request->tdistrict,
                'tregional' => $request->tregional,
                'regional' => $request->regional,
                'ward' => $request->ward,
                'description' => $request->description,
                'Message' => $request->Message,
                'author' => $request->author,
                'Tamisemi' => $request->Tamisemi,
                'Teacher_approved' => $request->Teacher_approved,
                'Headmaster' => $request->tHeadmaster,
                'Transfer_Headmaster' => $request->Headmaster,
                'WEO' => $request->WEO,
                'DEO' => $request->DEO,
               
                'DED' => $request->DED,
            ]); 
      
        $request1= $request->regional;
    
        $request2=  $request->cdistrict;
       
        $request3= $request->ward;
      
       
        $request4=$request->tschool;
     
      
        // DB::update('update users set regional = ?,district=?,ward=?,schools=? where Employee_id = ?',[$request->tregional, $request->tdistrict,$request3,$request->tschool,$request->Employee_id]);
        if($request->tschool !="" ){
            DB::table('users')
            ->where('Employee_id', $request->Employee_id)
            ->update(['schools' =>  $request->tschool]);
          
            }
            if($request->thospital !="" ){
                DB::table('users')
                ->where('Employee_id', $request->Employee_id)
                ->update(['hospital' =>$request->thospital]);
            }
          DB::table('users')
          ->where('Employee_id', $request->Employee_id)
          ->update(['regional' =>  $request->tregional]);
          DB::table('users')
          ->where('Employee_id', $request->Employee_id)
          ->update(['district' =>   $request->tdistrict]);
          DB::table('users')
          ->where('Employee_id', $request->Employee_id)
          ->update(['ward' =>  $request->tward]);
          $letter=Letter::where('Employee_id',$request->Employee_id)->delete();
        
        //$users = User::find($request->Employee_id);
        // $users->schools = $request4;
        // $users->district = $request->tdistrict;
        // $users->regional = $request->tregional;
      
        // $users->update();
        return redirect()->route('dashboard')
        ->with('success', 'request approved.');
       
        }else if($request->author!="unknown" && $request->Tamisemi=="Approved BY Tamisemi_Director" && $request->Teacher_approved=="Not_support BY TEACHER"){
            letter_back::create([
                'Employee_id' =>   $request->Employee_id,
                'name' =>  $request->name,
                'tschool' => $request->schools,
                'cschool' => $request->cschool1,
                'chospital' => $request->chospital,
                'cdistrict' => $request->cdistrict,
                'thospital' => $request->thospital,
                'tward' => $request->tward,
                'tdistrict' => $request->tdistrict,
                'tregional' => $request->tregional,
                'regional' => $request->regional,
                'ward' => $request->ward,
                'description' => $request->description,
                'Message' => $request->Message,
                'author' => $request->author,
                'Tamisemi' => $request->Tamisemi,
                'Teacher_approved' => $request->Teacher_approved,
                'Headmaster' => $request->tHeadmaster,
                'Transfer_Headmaster' => $request->Headmaster,
                'WEO' => $request->WEO,
                'DEO' => $request->DEO,
               
                'DED' => $request->DED,
            ]); 
      
        $request1= $request->regional;
    
        $request2=  $request->cdistrict;
       
        $request3= $request->ward;
      
       
        $request4=$request->tschool;
     
      
        // DB::update('update users set regional = ?,district=?,ward=?,schools=? where Employee_id = ?',[$request->tregional, $request->tdistrict,$request3,$request->tschool,$request->Employee_id]);
        if($request->tschool !="" ){
            DB::table('users')
            ->where('Employee_id', $request->Employee_id)
            ->update(['schools' =>  $request->tschool]);
          
            }
            if($request->thospital !="" ){
                DB::table('users')
                ->where('Employee_id', $request->Employee_id)
                ->update(['hospital' =>$request->thospital]);
            }
          DB::table('users')
          ->where('Employee_id', $request->Employee_id)
          ->update(['regional' =>  $request->tregional]);
          DB::table('users')
          ->where('Employee_id', $request->Employee_id)
          ->update(['district' =>   $request->tdistrict]);
          DB::table('users')
          ->where('Employee_id', $request->Employee_id)
          ->update(['ward' =>  $request->tward]);
          $letter=Letter::where('Employee_id',$request->Employee_id)->delete();
        
        //$users = User::find($request->Employee_id);
        // $users->schools = $request4;
        // $users->district = $request->tdistrict;
        // $users->regional = $request->tregional;
      
        // $users->update();
        return redirect()->route('dashboard')
        ->with('success', 'request approved.');
        }else if($request->Tamisemi=="Rejected BY Tamisemi_Director"){
                letter_back::create([
                 
                    'Employee_id' =>   $request->Employee_id,
                    'name' =>  $request->name,
                    'tschool' => $request->schools,
                    'chospital' => $request->chospital,
                    'thospital' => $request->thospital,
                    'cschool' => $request->cschool1,
                    'cdistrict' => $request->cdistrict,
                    'tward' => $request->tward,
                    'tdistrict' => $request->tdistrict,
                    'tregional' => $request->tregional,
                    'regional' => $request->regional,
                    'ward' => $request->ward,
                    'description' => $request->description,
                    'Message' => $request->Message,
                    'author' => $request->author,
                    'Tamisemi' => $request->Tamisemi,
                    'Teacher_approved' => $request->Teacher_approved,
                    'Headmaster' => $request->tHeadmaster,
                    'Transfer_Headmaster' => $request->Headmaster,
                    'WEO' => $request->WEO,
                    'DEO' => $request->DEO,
                   
                    'DED' => $request->DED,
                ]); 
          
         
               // DB::update('update users set regional = ?,district=?,ward=?,schools=? where Employee_id = ?',[$request->tregional, $request->tdistrict,$request->ward,$request->tschool,$request->Employee_id]);
         
                $letter=Letter::where('Employee_id',$request->Employee_id)->delete();
             
          
            // DB::update('update users set regional = ?,district=?,ward=?,schools=? where Employee_id = ?',[$request->tregional, $request->tdistrict,$request3,$request->tschool,$request->Employee_id]);
         
           return redirect()->route('letters.index')
              ->with('success', 'request rejected.');
            }else if($request->Tamisemi=="Approved BY Tamisemi_Director" && $request->Teacher_approved=="support BY TEACHER"){
                letter_back::create([
                    'Employee_id' =>   $request->Employee_id,
                    'name' =>  $request->name,
                    'tschool' => $request->schools,
                    'cschool' => $request->cschool1,
                    'chospital' => $request->chospital,
                    'thospital' => $request->thospital,
                    'cdistrict' => $request->cdistrict,
                    'tward' => $request->tward,
                    'tdistrict' => $request->tdistrict,
                    'tregional' => $request->tregional,
                    'regional' => $request->regional,
                    'ward' => $request->ward,
                    'description' => $request->description,
                    'Message' => $request->Message,
                    'author' => $request->author,
                    'Tamisemi' => $request->Tamisemi,
                    'Teacher_approved' => $request->Teacher_approved,
                    'Headmaster' => $request->tHeadmaster,
                    'Transfer_Headmaster' => $request->Headmaster,
                    'WEO' => $request->WEO,
                    'DEO' => $request->DEO,
                   
                    'DED' => $request->DED,
                ]); 
            
              
                DB::table('users')
                ->where('name', $request->author)
                ->update(['schools' => $request->schools]);
                DB::table('users')
                ->where('name', $request->author)
                ->update(['regional' => $request->regional]);
                DB::table('users')
                ->where('name', $request->author)
                ->update(['district' =>  $request->cdistrict]);
                if($request->ward!=""){
                DB::table('users')
                ->where('name', $request->author)
                ->update(['ward' =>  $request->ward]);
                }
                DB::table('letters')
                ->where('name', $request->author)
                ->update(['Tamisemi' =>  $request->Tamisemi]);
                $request1= $request->tregional;
        
                $request2=  $request->tdistrict;
               
                $request3= $request->tward;
                DB::update('update users set regional = ?,district=?,ward=?,schools=? where Employee_id = ?',[$request->tregional, $request->tdistrict,$request3,$request->tschool,$request->Employee_id]);
             
               
                $request4=$request->tschool;
                $letter=Letter::where('Employee_id',$request->Employee_id)->delete();
                return redirect()->route('letters.index')
                ->with('success', 'request approved.');
               
           
             
               ;

            }else if($request->Tamisemi=="Approved BY Tamisemi_Director" || $request->Tamisemi=="Rejected BY Tamisemi_Director"  ){
                letter_back::create([
                    'Employee_id' =>   $request->Employee_id,
                    'name' =>  $request->name,
                    'tschool' => $request->schools,
                    'cschool' => $request->cschool1,
                    'cdistrict' => $request->cdistrict,
                    'tward' => $request->tward,
                    'tdistrict' => $request->tdistrict,
                    'tregional' => $request->tregional,
                    'regional' => $request->regional,
                    'ward' => $request->ward,
                    'description' => $request->description,
                    'Message' => $request->Message,
                    'author' => $request->author,
                    'Tamisemi' => $request->Tamisemi,
                    'Teacher_approved' => $request->Teacher_approved,
                    'Headmaster' => $request->tHeadmaster,
                    'Transfer_Headmaster' => $request->Headmaster,
                    'WEO' => $request->WEO,
                    'DEO' => $request->DEO,
                   
                    'DED' => $request->DED,
                ]); 
            
              
                DB::table('users')
                ->where('name', $request->author)
                ->update(['schools' => $request->schools]);
                DB::table('users')
                ->where('name', $request->author)
                ->update(['regional' => $request->regional]);
                DB::table('users')
                ->where('name', $request->author)
                ->update(['district' =>  $request->cdistrict]);
                DB::table('users')
                ->where('name', $request->author)
                ->update(['ward' =>  $request->ward]);
                DB::table('letters')
                ->where('name', $request->author)
                ->update(['Tamisemi' =>  $request->Tamisemi]);
                DB::table('letters')
                ->where('name', $request->name)
                ->update(['Tamisemi' =>  $request->Tamisemi]);
                $request1= $request->tregional;
        
                $request2=  $request->tdistrict;
               
                $request3= $request->tward;
              
               
                $request4=$request->tschool;
                 $letter=Letter::where('Employee_id',$request->Employee_id)->delete();
                 $letter=Letter::where('name',$request->author)->delete();
           
             
                DB::update('update users set regional = ?,district=?,ward=?,schools=? where Employee_id = ?',[$request->tregional, $request->tdistrict,$request3,$request->tschool,$request->Employee_id]);
             
                 ;

            }else
            $request1= $request->tregional;
        
            $request2=  $request->tdistrict;
           
            $request3= $request->tward;
          
           
            $request4=$request->tschool;
            // $letter->update($request->all());
                if( $request->Health_approved=='Not_support BY nurse'){
                    $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
                    $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
                    $exist2=$request->chospital;
                    
                 
        
                    DB::table('letters')
                    ->where('name',$request->author)
                    ->update(['Health_approved' =>  $request->Health_approved]);
        
                    DB::table('letters')
                    ->where('name',  $request->name)
                    ->update(['Health_approved' =>  $request->Health_approved]);
        
                  
        
                    // $exist2=$request->cschool1;
               
               
                return redirect()->route('letters.index')
                ->with('success', 'request updated');
                   
                    
                  
                }else if(( $request->Health_approved=='support BY nurse')){
                    $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
                    $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
        
                    $exist3 = DB::table('users')->where('name',$request->name)->value('Employee_id');
                    $exist4 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
                    $exist2=$request->chospital;
                    
                    DB::table('letters')
                    ->where('name',$request->author)
                    ->update(['author' =>  $request->name]);


        
                    DB::table('letters')
                    ->where('name',$request->author)
                    ->update(['Health_approved' =>  $request->Health_approved]);
        
                    DB::table('letters')
                    ->where('name',  $request->name)
                    ->update(['Health_approved' =>  $request->Health_approved]);
        
                  
        
                    // $exist2=$request->cschool1;
                DB::table('letters')
                ->where('name',  $request->author)
                ->update(['tregional' => $request->regional]);
                DB::table('letters')
                ->where('name',  $request->author)
                ->update(['tdistrict' =>  $request->cdistrict]);
        
               
                DB::table('letters')
                ->where('name',  $request->author)
                ->update(['tward' =>  $request->ward1]);
                
                DB::table('letters')
                ->where('name',  $request->author)
                ->update(['author' =>  $request->name]);
               
                return redirect()->route('letters.index')
                ->with('success', 'request updated');
        
                   
        
                   
                    
                   
                    
                    
                }
                if(( $request->MDC_approved=='Not_support BY MDC')){
                    $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
                    $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
                    $exist2=$request->chospital;
                    
                    DB::table('letters')
                    ->where('name',  $request->name)
                    ->update(['MDC_approved' =>  $request->MDC_approved]);
                    return redirect('dashboard');
                }
                   
                    
                  
               if(( $request->MDC_approved=='support BY MDC')){
                    $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
                    $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
                    $exist2=$request->chospital;
                    
                    DB::table('letters')
                    ->where('name',  $request->name)
                    ->update(['MDC_approved' =>  $request->MDC_approved]);
                   return redirect('dashboard');
                   
                    
                    
                }
                if(( $request->DMO_approved=='Not_support BY DMO')){
                    $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
                    $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
                    $exist2=$request->chospital;
                    
                    DB::table('letters')
                    ->where('name',  $request->name)
                    ->update(['DMO' =>  $request->DMO_approved]);
                    return redirect('dashboard');
                }
                   
                    
                  
               if(( $request->DMO_approved=='support BY DMO')){
                    $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
                    $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
                    $exist2=$request->chospital;
                    
                    DB::table('letters')
                    ->where('name',  $request->name)
                    ->update(['DMO' =>  $request->DMO_approved]);
                   return redirect('dashboard');
                   
                    
                    
                }
                
                if(( $request->Regional_Director=='support BY RD')){
                    $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
                    $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
                    $exist2=$request->chospital;
                    $date2 = date('Y-m-d H:i:s');
            
                    DB::table('letters')
                    ->where('name',  $request->name)
                    ->update(['RD_date'=> $date2]);
                    if( $request->RD_comment!=''){
                        DB::table('letters')
                        ->where('name',  $request->name)
                        ->update(['RD_comment' => $request->RD_comment]);
                        }
                    
                    DB::table('letters')
                    ->where('name',  $request->name)
                    ->update(['Regional_Director' =>  $request->Regional_Director]);
                   return redirect('dashboard');       
                }
                if(( $request->Regional_Director=='Not_support BY RD')){
                    $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
                    $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
                    $exist2=$request->chospital;
                    $date2 = date('Y-m-d H:i:s');
            
                    DB::table('letters')
                    ->where('name',  $request->name)
                    ->update(['RD_date'=> $date2]);
                    if( $request->RD_comment!=''){
                        DB::table('letters')
                        ->where('name',  $request->name)
                        ->update(['RD_comment' => $request->RD_comment]);
                        }
                    
                    DB::table('letters')
                    ->where('name',  $request->name)
                    ->update(['Regional_Director' =>  $request->Regional_Director]);
                   return redirect('dashboard');       
                }
           
            
                if(( $request->DEO=='support BY District_Education_Officer')){
                    $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
                    $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
                    $exist2=$request->chospital;
                    
                    DB::table('letters')
                    ->where('name',  $request->name)
                    ->update(['DEO' =>  $request->DEO]);
                   return redirect('dashboard');       
                }
                if(( $request->DEO=='Not_support BY District_Education_Officer')){
                    $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
                    $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
                    $exist2=$request->chospital;
                    
                    DB::table('letters')
                    ->where('name',  $request->name)
                    ->update(['DEO' =>  $request->DEO]);
                   return redirect('dashboard');       
                }
              
                if($request->Teacher_approved=="support BY TEACHER" && $request->statusi=='m'){
                  
                   $letter->update($request->all());
                   $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
                   $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
                   if($exist1==NULL){
                   Letter::create([
                    'Employee_id' =>   $exist,
                    'name' =>  $request->author,
                    'cschool' => $request->schools,
                    'tschool' => $request->cschool1,
                    'cdistrict' => $request->tdistrict,
                    'ward' => $request->tward,
                    'tdistrict' => $request->cdistrict,
                    'tregional' => $request->regional,
                    'regional' => $request->tregional,
                    'tward' => $request->ward,
                    'description' => $request->description,
                    'Message' => $request->Message,
                    'author' => $request->name,
                    'Teacher_approved' => $request->Teacher_approved,
                    'Headmaster' => $request->tHeadmaster,
                    'Transfer_Headmaster' => $request->Headmaster,
                    'WEO' => $request->WEO,
                    'DEO' => $request->DEO,
                   
                    'DED' => $request->DED,
                 ]);
                
                 return redirect()->route('letters.index')
                 ->with('success', 'request created.');
          
        
            }else{
                $exist2=$request->cschool1;
                DB::table('letters')
                ->where('name',  $request->author)
                ->update(['tregional' => $request->regional]);
                DB::table('letters')
                ->where('name',  $request->author)
                ->update(['tdistrict' =>  $request->cdistrict]);
                DB::table('letters')
                ->where('name',  $request->author)
                ->update(['Teacher_approved' =>  $request->Teacher_approved]);
               
                DB::table('letters')
                ->where('name',  $request->author)
                ->update(['tward' =>  $request->ward1]);
                DB::table('letters')
                ->where('name',  $request->author)
                ->update(['author' =>  $request->name]);
                DB::table('letters')
                ->where('name',  $request->author)
                ->update(['tschool' =>  $exist2]);
                return redirect()->route('letters.index')
                ->with('success', 'request updated');
            }
                }else if($request->Teacher_approved=="Not_support BY TEACHER" && $request->statusi=='m'){
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
                        
                            return redirect()->route('letters.index')
                            ->with('success', 'not support swapping.');
                }
       

           
         
       
       
       
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
            
                if($request->status=="0")
                return redirect()->route('schools.index')
                ->with('success', 'Request updated successfully');
         elseif ($request->status=="1") {
            return redirect()->route('wards.index')
            ->with('success', 'user updated successfully');
         }elseif ($request->status=="2") {
            return redirect()->route('districts.index')
            ->with('success', 'user updated successfully');
         } elseif ($request->status=="3") {
            return redirect()->route('districts.index')
            ->with('success', 'user updated successfully');
         }elseif ($request->status=="4") {
            return redirect()->route('regionals.index')
            ->with('success', 'user updated successfully');
         }elseif($request->status=="5") {
            return redirect('letters10');
         }else{
            return redirect('letters3');
                

                // $i=0;
                // return view('letters.index3',compact('letters','i'))
                //          ->with('i', (request()->input('page', 1) - 1) * 5);
         } 
        
        }
   
    
   
    
    public function update1(Request $request, Letter $letter)
    {
        //
       
        $request->validate([
            'name' => 'required',
            'cschool' => 'required',
            'cdistrict' => 'required',
            'tdistrict' => 'required',
            'description' => 'required',
            'ward' => 'required',
        ]);

     
        $letter->update($request->all());
      
        return redirect()->route('schools.index')
            ->with('success', 'user updated successfully');
          
           
       
    }
    public function update2(Request $request, Letter $letter)
    {
        //
       
        $request->validate([
            'name' => 'required',
            'cschool1' => 'required',
            'cdistrict' => 'required',
            'tdistrict' => 'required',
            'regional' => 'required',
            'description' => 'required',
            'Message' => 'required',
            'author' => 'required',
            'ward1' => 'required',
            'schools' => 'required',
            'Teacher_approved'=>'required',
            'Headmaster' => 'required',
            'tHeadmaster' => 'required',
            'WEO' => 'required',
            'DEO' => 'required',
            'DED' => 'required',
        ]);

     
        $letter->update($request->all());
      
        return redirect()->route('letters.index')
        ->with('success', 'request letter created successfully.');
          
           
       
    }
    public function update70(Request $request, Letter $letter)
    {
        //
       
        $request->validate([
            'name' => 'required',
            'cschool1' => 'required',
            'cdistrict' => 'required',
            'tdistrict' => 'required',
            'regional' => 'required',
            'description' => 'required',
            'Message' => 'required',
            'author' => 'required',
           
            'schools' => 'required',
            'Teacher_approved'=>'required',
            'Headmaster' => 'required',
            'tHeadmaster' => 'required',
           
            'DEO' => 'required',
            'DED' => 'required',
        ]);

        $date2 = date('Y-m-d H:i:s');
        if(( $request->Headmaster=='support BY HEADMASTER')){
            $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
            $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
            $exist2=$request->chospital;

            $date2 = date('Y-m-d H:i:s');
            if( $request->T_comment!=''){
                DB::table('letters')
                ->where('name',  $request->name)
                ->update(['T_comment' => $request->T_comment]);
                }

           
            
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['T_date' =>    $date2]);

           return redirect('dashboard');       
        }
        if(( $request->Headmaster=='Not_support BY HEADMASTER')){
            $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
            $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
            $exist2=$request->chospital;
            
            if( $request->T_comment!=''){
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['T_comment' => $request->T_comment]);
            }
            
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['T_date' =>    $date2]);
            
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['Headmaster' =>  $request->Headmaster]);
           return redirect('dashboard');       
        }
        return redirect('dashboard'); 
    
          
           
       
    }
    public function update71(Request $request, Letter $letter)
    {
        //
       
        $request->validate([
            'name' => 'required',
            'cschool1' => 'required',
            'cdistrict' => 'required',
            'tdistrict' => 'required',
            'regional' => 'required',
            'description' => 'required',
            'Message' => 'required',
          
           
            'schools' => 'required',
        
            'Headmaster' => 'required',
            'tHeadmaster' => 'required',
           
            'DEO' => 'required',
            'DED' => 'required',
        ]);
        if(( $request->DEO=='support BY District_Education_Officer')){
            $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
            $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
            $exist2=$request->chospital;
            $date2 = date('Y-m-d H:i:s');
            
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['DEO_date'=> $date2]);
           

              
           DB::table('letters')
           ->where('name',  $request->name)
           ->update(['DEO' =>  $request->DEO]);
           if( $request->DEO_comment!=''){
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['DEO_comment' => $request->DEO_comment]);
            }
          return redirect('dashboard');
        }
        if(( $request->DEO=='Not_support BY District_Education_Officer')){
            $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
            $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
            $exist2=$request->chospital;
            $date2 = date('Y-m-d H:i:s');
            
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['DEO_date'=> $date2]);
            if( $request->DEO_comment!=''){
                DB::table('letters')
                ->where('name',  $request->name)
                ->update(['DEO_comment' => $request->DEO_comment]);
                }
            
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['DEO' =>  $request->DEO]);
           
           return redirect('dashboard');       
        }
        return redirect('dashboard'); 
    
          
           
       
    }
    public function update72(Request $request, Letter $letter)
    {
        //
       
        $request->validate([
            'name' => 'required',
            'cschool1' => 'required',
            'cdistrict' => 'required',
            'tdistrict' => 'required',
            'regional' => 'required',
            'description' => 'required',
            'Message' => 'required',
          
           
            'schools' => 'required',
        
            'Headmaster' => 'required',
            'tHeadmaster' => 'required',
           
            'DEO' => 'required',
            'DED' => 'required',
        ]);
        if(( $request->DED=='support BY District_Executive_Director')){
            $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
            $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
            $exist2=$request->chospital;
            $date2 = date('Y-m-d H:i:s');
            
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['DED_date'=> $date2]);
            if( $request->DED_comment!=''){
                DB::table('letters')
                ->where('name',  $request->name)
                ->update(['DED_comment' => $request->DED_comment]);
                }
            
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['DED' =>  $request->DED]);
           return redirect('dashboard');       
        }
        if(( $request->DED=='Not_support BY District_Executive_Director')){
            $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
            $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
            $exist2=$request->chospital;
            $date2 = date('Y-m-d H:i:s');
            
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['DED_date'=> $date2]);
            if( $request->DED_comment!=''){
                DB::table('letters')
                ->where('name',  $request->name)
                ->update(['DED_comment' => $request->DED_comment]);
                }
            
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['DED' =>  $request->DED]);
           return redirect('dashboard');       
        }
        return redirect('dashboard'); 
    
          
           
       
    }
    public function update73(Request $request, Letter $letter)
    {
        //
       
        $request->validate([
            'name' => 'required',
            'cschool1' => 'required',
            'cdistrict' => 'required',
            'tdistrict' => 'required',
            'regional' => 'required',
            'description' => 'required',
            'Message' => 'required',
          
           
            'schools' => 'required',
        
            'Headmaster' => 'required',
            'tHeadmaster' => 'required',
           
            'DEO' => 'required',
            'DED' => 'required',
        ]);
        if(( $request->WEO=='support BY WEO')){
            $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
            $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
            $exist2=$request->chospital;
            $date2 = date('Y-m-d H:i:s');
            
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['W_date'=> $date2]);
            if( $request->W_comment!=''){
                DB::table('letters')
                ->where('name',  $request->name)
                ->update(['W_comment' => $request->W_comment]);
                }
            
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['WEO' =>  $request->WEO]);
           return redirect('dashboard');       
        }
        if(( $request->WEO=='Not_support BY WEO')){
            $exist = DB::table('users')->where('name',$request->author)->value('Employee_id');
            $exist1 = DB::table('letters')->where('Employee_id', $exist)->value('Employee_id');
            $exist2=$request->chospital;
            $date2 = date('Y-m-d H:i:s');
            
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['W_date'=> $date2]);
            if( $request->W_comment!=''){
                DB::table('letters')
                ->where('name',  $request->name)
                ->update(['W_comment' => $request->W_comment]);
                }
            
            DB::table('letters')
            ->where('name',  $request->name)
            ->update(['WEO' =>  $request->WEO]);
           return redirect('dashboard');       
        }
        return redirect('dashboard'); 
    
          
           
       
    }
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Letter $letter,Request $request)
    {
        
      
        $letter=Letter::where('id',$request->del)->delete();  
        //Letter::find($id)->delete();
        // $letter->forcedelete();
        // $letter=Letter::where('id',$request->id)->forcedelete();
        // Letter::destroy($request->id);

        return redirect()->route('Letters.index')
            ->with('success', 'request deleted successfully');
    }
    public function DEL(Request $request)
    {
        $request->tregional="dsm";
        letter_back::create([
            'Employee_id' =>   $request->Employee_id,
            'name' =>  $request->name,
           
            'cschool' => $request->cschool,
           
            'cdistrict' => $request->cdistrict,
            'tward' => $request->cdistrict,
          
            'tdistrict' => $request->tdistrict,
            'tregional' => $request->tregional,
            'regional' => $request->regional,
            'description' => $request->regional,
           
          
          
            'author' => $request->author,
        ]); 
        $exist = DB::table('letters')->where('author',$request->author)->value('Employee_id');
        DB::table('letters')
        ->where('author', $request->name )
        ->update(['author' =>  'unknown']);
      
        $letter=Letter::where('id',$request->del)->delete();  
        //Letter::find($id)->delete();
        // $letter->forcedelete();
        // $letter=Letter::where('id',$request->id)->forcedelete();
        // Letter::destroy($request->id);

        return redirect('letters')
            ->with('success', 'request deleted successfully');
    }
    public function index9(Request $request)
    {
        //
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
                    
       
          return view('dashboardT2', compact('letters','transfers','data','data1','data2','data3'))
              ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index10(Request $request)
    {
        //
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

                 $letter_backs = letter_back::where([
                        ['regional','!=', NULL],
                       [function($query) use ($request) {
                           if(($term=$request->term)){
                            $query->orWhere('regional','LIKE','%'.$term.'%')->get();
                           }
                       }]
                    ])
                        ->orderBy("id","desc")
                        ->paginate(10);
                     $i=0;
                     $data = DB::table("users")->count('id');
                     $data1 = DB::table("school_dp")->count('id');
                     $data2 = DB::table("letters")->count('id');
                     $data3 = Letter::where('Tamisemi','=','pending')->count();
                    
       
          return view('dashboardT3', compact('letters','transfers','data','data1','data2','data3','letter_backs'))
              ->with('i', (request()->input('page', 1) - 1) * 5);
    }
public function index11(Request $request)
    {
        //
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
                $chances = Chance::where([
                    ['name','!=', NULL],
                    [function($query) use ($request) {
                        if(($term=$request->term2)){
                         $query->orWhere('name','LIKE','%'.$term.'%')->get();
                        }
                    }]
                 ])
                     ->orderBy("id","desc")
                     ->paginate(30);
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
                    
       
          return view('dashboardT4', compact('letters','transfers','data','data1','data2','data3','chances'))
              ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index14(Request $request)
    {
        //
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
                $chances = Chance::where([
                    ['name','!=', NULL],
                    [function($query) use ($request) {
                        if(($term=$request->term2)){
                         $query->orWhere('name','LIKE','%'.$term.'%')->get();
                        }
                    }]
                 ])
                     ->orderBy("id","desc")
                     ->paginate(30);
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
                     $i=0;
                     $data = DB::table("users")->count('id');
                     $data1 = DB::table("school_dp")->count('id');
                     $data2 = DB::table("letters")->count('id');
                     $data3 = Letter::where('Tamisemi','=','pending')->count();
                    
       
          return view('Chances.index', compact('letters','transfers','wards','data','data1','data2','data3','chances'))
              ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
}
