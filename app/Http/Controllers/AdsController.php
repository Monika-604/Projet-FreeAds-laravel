<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

        {
            $id=Auth::user()->id;
            $user=User::find($id);
//            $ads=Ads::where('user_id',$id)->get();

            $ads=User::find($id)->adses;
            return view('adses.index',['ads'=>$ads,'user'=>$user]);

        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ads=new Ads($request->all());
        $ads->user_id=\Auth::user()->id;

        if($request->hasFile('picture')){

            $filename=time().'.'.$request->file('picture')->getClientOriginalExtension();
            //dd($filename);
            if($request->file('picture')->move(public_path().'/upload',$filename)){
                $ads->picture=$filename;
            }
        }

        $ads->save();
        return redirect('ads');

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
        return view('adses/update',['model'=>$model]);
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
        return redirect('ads');


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
        return redirect('ads');
    }
}
