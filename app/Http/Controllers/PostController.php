<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Addonate;
use App\Models\Donate;
use Illuminate\Http\Request;
use App\Classes\Payler\PaylerAPI;


class PostController extends Controller
{
    
    public function home(Request $request)
    {
        $donates = Addonate::all();
        $don = $donates->sum('status');
        $is_payment_success = false;
        $url_param = $request->input();
        
        if(  isset($url_param['order_id']) ){

            $payler = new PaylerAPI();
            $result = $payler->GetStatus($url_param['order_id']);
            
            if($result ==='Charged') $is_payment_success = true;
        }

        return view('index', compact('donates','don','is_payment_success'));
    }


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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    /////////////////////////////////////////////////////////////////////////
    public function about_us()
    {
        return view('posts.about_us');
    }

    public function contact()
    {
        return view('contact');
    }
   
}
