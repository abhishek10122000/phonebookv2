<?php

namespace App\Http\Controllers;

use App\Models\Vcard;
use Illuminate\Http\Request;
use Auth;

class VcardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.contactInsert');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $request->validate([
                'name'=>'required',
                'contact'=>'required',
            ]);
            $vacard=new Vcard();
            $vacard->user_id=Auth::id();
            $vacard->name=$request->name;
            $vacard->contact=$request->contact;
            $vacard->save();
            
            return redirect()->route('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vcard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function show(Vcard $vcard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vcard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function edit(Vcard $vcard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vcard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vcard $vcard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vcard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vcard $vcard)
    {
        //
    }
}
