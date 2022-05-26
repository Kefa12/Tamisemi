<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Letter;
use App\Models\District;
use Illuminate\Http\Request;
use App\Models\Ward;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Masters.create');
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
            'description' => 'required',
            'ward' => 'required',
        ]);

        Letter::create($request->all());

        return redirect()->route('schools.index')
            ->with('success', 'request letter created successfully.');
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
        return view('schools.edit', compact('letter'));
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
            'name' => 'required',
            'cschool' => 'required',
            'cdistrict' => 'required',
            'tdistrict' => 'required',
            'description' => 'required',
            'ward' => 'required',
        ]);
        $letter->update($request->all());
        
        return redirect()->route('letters.index')
            ->with('success', 'user updated successfully');
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
