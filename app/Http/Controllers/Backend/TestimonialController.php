<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial=Testimonial::get();
        return view('testimonial.index')->with('testimonials',$testimonial);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial=Testimonial::create($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName =Str::random('32') . '.' . $image->getClientOriginalExtension();
            $image->move('backend/testimonial/', $imageName);
            $testimonial->image = $imageName;
        }
        $testimonial->save();
        return redirect(route('testimonial.index'));
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
        $testimonial=Testimonial::find('id');
        return view('testimonial.edit')->with('testimonials',$testimonial);
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
        $testimonial=Testimonial::find('id')->update($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName =Str::random('32') . '.' . $image->getClientOriginalExtension();
            $image->move('backend/testimonial/', $imageName);
            $testimonial->image = $imageName;
        }
        $testimonial->save();
        return redirect(route('testimonial.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial=Testimonial::find('id')->delete();
        return redirect()->back();
    }
}
