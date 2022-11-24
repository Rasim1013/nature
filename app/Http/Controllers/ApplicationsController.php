<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\Application;
use App\Models\Priority;


class ApplicationsController extends Controller
{
    /**  
    $summa_vidachi = Actioner::where('group_id', Auth::user()->group_id)->get()->sum('estimated_amount'); 
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::all();
        return view('admin.applications.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $priority = Priority::all();
        return view ('admin.applications.create', compact('priority'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Application::create([
            'app_name' => $request->app_name,
            'user_id'=>Auth::user()->id,
            'name_org' => $request->name_org,
            'typ_org' => $request->typ_org,
            'name_surname'=> Auth::user()->name, Auth::user()->surname,
            'position'=>$request->position,
            'addres'=> $request->addres,
            'phone'=> Auth::user()->phone,
            'email'=> Auth::user()->email,
            'partner_name'=> $request->partner_name,
            'partner_type'=> $request->partner_type,
            'priority_id'=> $request->priority_id,
            'proj_object'=> $request->proj_object,
            'proj_activ'=> $request->proj_activ,
            'inovat_proj'=> $request->inovat_proj,
            'support_proj'=> $request->support_proj,
            'funding_donors'=> $request->funding_donors,
        ]);
        Alert::success('Операция выполнено успешно!!!');
            return redirect('applications');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $application = Application::find($id);
        return view('admin.applications.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->role_id == 1){
            return back();
        }
        $application = Application::find($id);
        $priority = Priority::all();
        return view('admin.applications.edit', compact('application','priority'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $applications = Application::find($id);
        $applications->update($request->all());
        Alert::success('Операция выполнено успешно');
        return redirect('applications');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
