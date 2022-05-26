<?php

namespace App\Http\Controllers;

use App\Models\Ward;
use App\Models\Letter;
use Illuminate\Http\Request;

class WardController extends Controller
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Wards.create');
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
            'WEO' => 'required',
        ]);

        Ward::create($request->all());

        return redirect()->route('wards.index')
            ->with('success', 'request letter created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
       
            return view('Wards.show', compact('ward'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function edit(Ward $ward)
    {
        //
        return view('Wards.edit', compact('ward'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ward $ward)
    {
        //
        $request->validate([
            'name' => 'required',
            'WEO' => 'required',
            
        ]);
        $ward->update($request->all());

        return redirect()->route('Wards.index')
            ->with('success', 'user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ward $ward)
    {
        //
        $ward->delete();

        return redirect()->route('Wards.index')
            ->with('success', 'request deleted successfully');
    }
}
