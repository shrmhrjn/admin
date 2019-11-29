<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team=Team::get();
        return view('team.index')->with('teams',$team);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team=Team::create($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName =Str::random('32') . '.' . $image->getClientOriginalExtension();
            $image->move('backend/team/', $imageName);
            $team->image = $imageName;
        }
        $team->save();
        return redirect(route('team.index'));
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
        $team=Team::find($id);
        return view('team.edit')->with('teams',$team);
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
        $team=Team::find($id)->update($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random('32') . '.' . $image->getClientOriginalExtension();
            $image->move('backend/team/', $imageName);
            $team->image = $imageName;
        }
        $team->save();
        return redirect(route('team.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id)->delete();
        return redirect()->back();
    }
}
