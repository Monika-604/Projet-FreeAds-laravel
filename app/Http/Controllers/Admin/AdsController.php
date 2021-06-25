<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads=Ads::all();
        return view('admin/ads/index',['ads'=>$ads]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $model=Ads::find($id);
        return view('admin/ads/update',['model'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ads=Ads::find($id);
        $ads->title=$request->title;
        $ads->description=$request->description;
        $ads->price=$request->price;
        $ads->location=$request->location;
        $ads->category=$request->category;
        if($request->hasFile('picture')){

            $filename=time().'.'.$request->file('picture')->getClientOriginalExtension();
            //dd($filename);
            if($request->file('picture')->move(public_path().'/upload',$filename)){
                $ads->picture=$filename;
            }
        }

        $ads->save();
        return redirect('admin/adses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ads=Ads::find($id);
        $ads->delete();
        return redirect('admin/adses');
    }
}
