<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lokasi.index');
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
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $this->validate($request, [
            'name' => 'required|unique:lokasis|max:255',
        ]);

        $model = new Category();
        $model->fill($request->all());
        $model->save();

        return createJsonResponse($model->toArray());
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): \Illuminate\Http\JsonResponse
    {
        $this->validate($request, [
            //ignore the current id
            'name' => 'required|unique:lokasis,name,' . $id . '|max:255',
        ]);

        $model = Category::findOrFail($id);
        $model->fill($request->all());
        $model->save();

        return createJsonResponse($model->toArray());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Category::findOrFail($id);
        $model->delete();

        return createJsonResponse($model->toArray());
    }
}
