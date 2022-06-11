<?php

namespace App\Http\Controllers;

use App\Models\Chance;
use Illuminate\Http\Request;

class ChanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        return redirect('dashboard')
            ->with('success', 'request letter created successfully.');
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
    public function edit(Chance $chance)
    {
        //
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
