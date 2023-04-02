<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRamenRequest;
use App\Http\Requests\UpdateRamenRequest;
use App\Models\Ramen;
use Illuminate\Http\RedirectResponse;

class RamenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // TODO: ページネーション
        $ramens = Ramen::latest()->get();
        
        return view('ramens.index', compact('ramens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ramens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRamenRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $ramen = $request->user()->ramens()->create($validated);
        $ramen->addMediaFromRequest('media')->toMediaCollection('media');

        return redirect(route('ramens.index'));
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
