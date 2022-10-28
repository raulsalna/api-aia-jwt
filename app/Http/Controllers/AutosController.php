<?php

namespace App\Http\Controllers;

use App\Models\Autos;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use JWTAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Requests\StoreAutosRequest;
use App\Http\Requests\UpdateAutosRequest;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAutosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutosRequest $request)
    {
        //
        dd("fffff StoreAutosRequest fffff:  ", $request->all());
        
        Log::info($request);


        $auto = Autos::create([
            'marca' => $request->get('marca'),
            'modelo' => $request->get('modelo'),
            'anio' => $request->get('anio'),
            'precio' => $request->get('precio'),
            'kilometraje' => $request->get('kilometraje'),
            'color' => $request->get('color'),
            'email' => $request->get('email'),
            'telefono' => $request->get('telefono'),
            'fotografia' => $request->get('fotografia'),
            'ruta' => $request->get('ruta')
        ]);
        return response()->json(compact('auto'),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function show(Autos $autos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function edit(Autos $autos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutosRequest  $request
     * @param  \App\Models\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutosRequest $request, Autos $autos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autos  $autos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autos $autos)
    {
        //
    }
}
