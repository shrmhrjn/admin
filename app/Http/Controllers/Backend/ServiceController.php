<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service=Service::get();
        return view('service.index')->with('services',$service);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service=Service::create($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName =Str::random('32') . '.' . $image->getClientOriginalExtension();
            $image->move('backend/service/', $imageName);
            $service->image = $imageName;
        }
        $service->save();
        return redirect(route('service.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service=Service::find($id);
        return view('service.show')->with('services',$service);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);
        return view('service.edit')->with('services',$service);
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
        $service=Service::find($id)->update($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random('32') . '.' . $image->getClientOriginalExtension();
            $image->move('backend/service/', $imageName);
            $service->image = $imageName;
        }
        $service->save();
        return redirect(route('services.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id)->delete();
        return redirect()->back();
    }
}
