<?php

namespace App\Http\Controllers;

use App\Models\Asesoria;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AsesoriaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AsesoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $asesorias = Asesoria::paginate();

        return view('asesoria.index', compact('asesorias'))
            ->with('i', ($request->input('page', 1) - 1) * $asesorias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $asesoria = new Asesoria();

        return view('asesoria.create', compact('asesoria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AsesoriaRequest $request): RedirectResponse
    {
        Asesoria::create($request->validated());

        return Redirect::route('asesorias.index')
            ->with('success', 'Asesoria created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $asesoria = Asesoria::find($id);

        return view('asesoria.show', compact('asesoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $asesoria = Asesoria::find($id);

        return view('asesoria.edit', compact('asesoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AsesoriaRequest $request, Asesoria $asesoria): RedirectResponse
    {
        $asesoria->update($request->validated());

        return Redirect::route('asesorias.index')
            ->with('success', 'Asesoria updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Asesoria::find($id)->delete();

        return Redirect::route('asesorias.index')
            ->with('success', 'Asesoria deleted successfully');
    }
}
