<?php

namespace App\Http\Controllers;

use App\Models\Regional;
use App\Models\District;
use App\Models\Letter;
use Illuminate\Http\Request;


class RegionalController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reg.create');
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
            'DED' => 'required',
        ]);

        District::create($request->all());
       
        return redirect()->route('reg.index')
            ->with('success', 'request letter created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function show(District $district)
    {
        //
       
            return view('reg.show', compact('regional'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function edit(District $district)
    {
        //
        return view('reg.edit', compact('regional'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District $district)
    {
        //
        $request->validate([
            'name' => 'required',
            'DED' => 'required',
            
        ]);
        $school->update($request->all());

        return redirect()->route('reg.index')
            ->with('success', 'user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $district)
    {
        //
        $district->delete();

        return redirect()->route('reg.index')
            ->with('success', 'request deleted successfully');
    }
}
