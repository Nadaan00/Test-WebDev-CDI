<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Monitoring;
use Illuminate\Contracts\Queue\Monitor;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monitoring = Monitoring::orderBy('created_at', 'DESC')->get();
        return view('monitoring.index', compact('monitoring'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('monitoring.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Monitoring::create($request->all());

        $monitoring = Monitoring::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('\images', $request->file('image')->getClientOriginalName());
            $monitoring->image = $request->file('image')->getClientOriginalName();
            $monitoring->save();
        }
        return redirect()->route('monitoring.index')->with('success', 'Project Monitoring added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $monitoring = Monitoring::findOrFail($id);
        return view('monitoring.edit', compact('monitoring'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Monitoring::findOrFail($id);
 
        $product->update($request->all());
        return redirect()->route('monitoring.index')->with('success', 'Project Monitoring updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $monitoring = Monitoring::findOrFail($id);
        $monitoring->delete();
        return redirect()->route('monitoring.index')->with('success', 'Project Monitoring deleted successfully');
    }
}
