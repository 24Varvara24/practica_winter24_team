<?php

namespace App\Http\Controllers;

use App\Models\Performance;
use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $performances=Performance::all();
        //dd($performances);
        return view('afisha.index',compact('performances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("afisha.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Performance::create([
            "name"=> $request->name,
            "description"=> $request->description,
            "annotation"=> $request->annotation,
            "begin"=> $request->begin,
            "duration"=> $request->duration,
            "price"=> $request->price,
            "date"=> $request->date,
            /* фото отправляется в папку upload встроенной папки public */
            /* что бы в паблик появилась эта папка php artisan storage:link   */
            'image_small' => $request->file('image_small')->store('upload', 'public'),        
            'image_big' => $request->file('image_big')->store('upload', 'public')        
        ]);
        return redirect()->route("afisha.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Performance $afisha)
    {
        //dd($afisha->name);
        return view('afisha.show', ['performance'=>$afisha]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Performance $afisha)
    {
        return view('afisha.edit', ['performance'=>$afisha]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Performance $afisha)
    {
        $afisha->update([
            'name' => $request->name,
            'description' => $request->description,
            'annotation' => $request->annotation,
            'begin' => $request->begin,
            'duration' => $request->duration,
            'price' => $request->price,
            'date' => $request->date,
            'image_small' => $request->file('image_small')->store('upload', 'public'),
            'image_big' => $request->file('image_big')->store('upload', 'public'),

        ]);

        return redirect()->route('afisha.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Performance $performance)
    {
        $performance->delete();
       
        return redirect()->route('afisha.index');
    }
}
