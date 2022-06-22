<?php

namespace App\Http\Controllers;

use App\Models\Chance;
use App\Models\Letter;
use Illuminate\Http\Request;





class ChanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
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

            $i=0;
            return view('Teachdash4', compact('chances',"i"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
         
            
            'district' => 'required',
           
            'regional' => 'required',
           
            'description' => 'required',
            'ward' => 'required',
            
           
            'Headmaster' => 'required',
            'WEO' => 'required',
            'DEO' => 'required',
            'DED' => 'required',
        ]);
        Chance::Create($request->all());

        return redirect('letters')
            ->with('success', 'chance request letter created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chance  $chance
     * @return \Illuminate\Http\Response
     */
    public function show(Chance $chance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chance  $chance
     * @return \Illuminate\Http\Response
     */
    public function edit(Chance $chance,Request $request)
    {
        //
     
          
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
        return view('Chances.edit', compact('date2','chance'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chance  $chance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chance $chance)
    {
        //
        $request->validate([
            'school' => 'required',
            'district' => 'required',
            
            'regional' => 'required',
            'description' => 'required',
            'name' => 'required',
           
           
           
          
        ]); 
        $chance->update($request->all());
        if($request->status=='0'){
            return redirect('letters')
        ->with('success', 'user updated successfully');
        }else if($request->status=='1'){
            return redirect('letters')
            ->with('success', 'user updated successfully');
        }else if($request->status=='2'){
            return redirect('letters')
            ->with('success', 'user updated successfully');
        }else if($request->status=='3'){
            return redirect('letters')
            ->with('success', 'user updated successfully');
        }else
        return redirect('letters11')
        ->with('success', 'user updated successfully');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chance  $chance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chance $chance)
    {
        //
    }
}
