<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRamenRequest;
use App\Http\Requests\UpdateRamenRequest;
use App\Models\Ramen;

class RamenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreRamenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ramen $ramen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ramen $ramen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRamenRequest $request, Ramen $ramen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ramen $ramen)
    {
        //
    }
}
