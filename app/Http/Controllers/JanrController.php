<?php

namespace App\Http\Controllers;

use App\Http\Requests\JanrRequest;
use App\Models\Janr;
use Illuminate\Http\Request;

class JanrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $janrs = Janr::paginate(5);
        return view('janr', compact('janrs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JanrRequest $request)
    {
        $janr = Janr::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $janr = Janr::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $janr = Janr::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JanrRequest $request, string $id)
    {
        $janr = Janr::find($id)->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Janr::delete($id);
    }
}
