<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\Letter;
use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Redirect,Response;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
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
      
    }
    public function index2(Request $request)
    {
        //
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('search.create1');
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
            'cschool' => 'required',
            'cdistrict' => 'required',
            'tdistrict' => 'required',
            'schools' => 'required',
            'ward1' => 'required',
            'description' => 'required',
          
        ]);
       
        $districts1 = DB::table('districts')->where('id',$request->tdistrict)->value('name');
        $wards1 = DB::table('wards')->where('id',$request->ward)->value('name');
        $schools1 = DB::table('schools')->where('id',$request->schools)->value('name');
        Letter::create([
            'name' =>  $request->name,
            'cschool' => $request->cschool,
            'tschool' => $schools1,
            'cdistrict' => $request->cdistrict,
            'ward' =>  $wards1,
            'tdistrict' =>  $districts1,
            'description' => $request->description,
        ]);
        return redirect()->route('transfers.index')
            ->with('success', 'user created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function show(Transfer $transfer)
    {
        //
        return view('search.show', compact('transfer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfer $transfer)
    {
        //
        return view('search.edit', compact('transfer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transfer $transfer)
    {
        //
        $request->validate([
            'name' => 'required',
            'cdistrict' => 'required',
            'tdistrict' => 'required',
            'schools' => 'required',
            'description' => 'required',
            'Message' => 'required',
            'author' => 'required',
            
        ]);
        $transfer->update($request->all());

        return redirect()->route('transfers.index')
            ->with('success', 'Message Sent Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Letter $letter)
    {
        //
        $transfer->delete();

        return redirect()->route('transfers.index')
            ->with('success', 'request deleted successfully');
    }
    function index6()
    {
        $data['regional_rd'] = DB::table('regional_rd')->get();

        return view("letters.create",$data);     
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
}
