<?php

namespace App\Http\Controllers\Clubs;

use App\Clubs;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Input;



class clubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Clubs::all();
        return view('showClubs',compact('clubs'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addClub');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $club = new Clubs;
        $club->name = $input['clubName'];
        $imageName = $club->id . '.' .
            $input['image']->getClientOriginalName();
        $input['image']->move(
            base_path() . '/public/uploads/images/', $imageName
        );
        $club->logo = $input['image']->getClientOriginalName();
        $club->save();
        return redirect('clubs');
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
        $club = Clubs::findOrFail($id);
        return view('editClub',compact('club'));

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
        Clubs::find($id)->update($request->all());
        return redirect('clubs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clubs::destroy($id);
        return redirect()->back();

    }
}
