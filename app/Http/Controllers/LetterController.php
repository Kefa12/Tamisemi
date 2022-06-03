<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;

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

            $date1 =DB::table('letters')->where('name',$request->name)->value('created_at');
            
          
            $date2 = date('Y-m-d H:i:s');
            $diff = strtotime($date2) - strtotime($date1);
     
           $dateDiff = abs(round($diff / 86400));
   
        return view('Letters.index', compact('letters','date2'))
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
            'cschool1' => 'required',
            'cdistrict' => 'required',
            'tdistrict' => 'required',
            'regional' => 'required',
            'description' => 'required',
            'ward1' => 'required',
            'schools' => 'required',
            'Headmaster' => 'required',
            'WEO' => 'required',
            'DEO' => 'required',
            'DED' => 'required',
        ]);
        $exist = DB::table('letters')->where('Employee_id',$request->Employee_id)->value('Employee_id');
        $exist1 = DB::table('letters')->where('name',$request->name)->value('name');
        if(($exist==NULL) && ($exist1==NULL)){
        $regional1 = DB::table('regional_rd')->where('id',$request->regional)->value('name');
        $districts1 = DB::table('district_dp')->where('id',$request->tdistrict)->value('name');
        $wards1 = DB::table('ward_dp')->where('id',$request->ward1)->value('name');
        $schools1 = DB::table('school_dp')->where('id',$request->schools)->value('name');
        Letter::create([
            'Employee_id' => $request->Employee_id,
            'name' =>  $request->name,
            'cschool' => $request->cschool1,
            'tschool' => $schools1,
            'cdistrict' => $request->cdistrict,
            'regional' => $regional1,
            'ward' => $request->ward1,
            'tdistrict' =>  $districts1,
            'description' => $request->description,
        ]);

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
        Letter::create([
            'Employee_id' =>  $request->Employee_id,
            'name' =>  $request->name,
            'cschool' => $request->cschool1,
            'tschool' => $request->schools,
            'cdistrict' => $request->cdistrict,
            'ward' => $request->ward1,
            'tdistrict' => $request->tdistrict,
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
       
            return view('Letters.show', compact('letter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function edit(Letter $letter)
    {
        //
        $date2 = date('Y-m-d H:i:s');
        return view('Letters.edit', compact('letter','date2'));
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
            'Message' => 'required',
            'ward1' => 'required',
            'schools' => 'required',
            'Headmaster' => 'required',
            'tHeadmaster' => 'required',
         
            'DEO' => 'required',
            'DED' => 'required',
           
           
          
        ]);  
        $letter->update($request->all());
       
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
                ->with('success', 'user updated successfully');
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
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Letter $letter)
    {
        //
        $transfer->delete();

        return redirect()->route('letters.index')
            ->with('success', 'request deleted successfully');
    }
   
}
