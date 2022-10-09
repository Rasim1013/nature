<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;
use App\Models\Addonate;
use RealRashid\SweetAlert\Facades\Alert;
class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $donates = Addonate::all();
        return view('donates.index', compact('donates'));
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
        $pay = Donate::create([
            'id_donate' => $request->id,
            'gift' => $request->gift,
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'is_publish' => $request->is_publish,
            'address' => $request->address,
            'unit' => $request->unit,
            'city' => $request->city,
            'state_province' => $request->state_province,
            'credit_card' => $request->credit_card,
            'expiration' => $request->expiration,
            'cvv' => $request->cvv,
        ]);
        
        $id_donate = Addonate::find($request->id);
        $gift = Donate::where('id_donate',$id_donate->id)->get()->sum('gift');
        $id_donate->update(['funding_raised'=>$gift]);
        Alert::success('Thank you for donations!!!');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donates = Addonate::find($id);
        $id = $donates->id;
        $header = $donates->header;
        $image = $donates->photo;
        $description = $donates->description;
        return view('donates.show', compact('id','donates', 'header', 'image', 'description'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donates = Addonate::find($id);
        $id = $donates->id;
        #profile-tab-pane
        return view('donates.edit', compact('id','donates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donate $donate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donate $donate)
    {
        //
    }
}
