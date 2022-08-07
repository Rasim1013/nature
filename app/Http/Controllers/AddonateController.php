<?php

namespace App\Http\Controllers;

use App\Models\Addonate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class AddonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donates = Addonate::all();
        return view('admin.donate.index', compact('donates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.donate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'image',
        ]);

        $data = $request->all(); 
        $data['photo'] = Addonate::uploadimage($request);
        if ($request->photo == null) {
            Alert::warning('Не все поля заполнены!!!');
            return redirect()->back();
        }
        Addonate::create([
            'header' => $request->header,
            'location' => $request->location,
            'photo' => $data['photo'],
            'description' => $request->description,
            'funding_goal'=> $request->funding_goal,
            'final_day'=> $request->final_day,
        ]);
        Alert::success('Операция выполнено успешно!!!');
            return redirect('addonates');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Addonate  $addonate
     * @return \Illuminate\Http\Response
     */
    public function show(Addonate $addonate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Addonate  $addonate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donate = Addonate::find($id);
        return view('admin.donate.edit', compact('donate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Addonate  $addonate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'photo' => 'image',
        ]);
        $donate = Addonate::find($id);
        $img = $donate->photo;
        $data = $request->all();
        $ava = $request->all();
        $ava['photo'] = Addonate::uploadimage($request, $donate->photo);
        if($request->photo == null){
        Alert::warning('Выбeрите фото для поста!!!');
        return redirect()->back();
        }
        $donate->update($ava+['photo'=>$ava]);
        Alert::success('Изменение  внесено успешно');
        return redirect('addonates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Addonate  $addonate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addonate $addonate)
    {
        //
    }
}
