<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('rak.index');
    }

    public function dataTables(Request $request): \Illuminate\Http\JsonResponse
    {
        $model = Category::query();
        $model->orderBy('created_at', 'desc');

        return DataTables::eloquent($model)
            //->addColumn('action', function ($model) {
            //    return view('layouts.partials._action', [
            //        'model' => $model,
            //        'show_url' => route('rak.show', $model->id),
            //        'edit_url' => route('rak.edit', $model->id),
            //        'delete_url' => route('rak.destroy', $model->id),
            //    ]);
            //})
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
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
            'nama' => 'required|unique:raks|max:255',
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
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            //ignore the current id
            'nama' => 'required|unique:raks,nama,' . $id . '|max:255',
        ]);

        $model = Category::findOrFail($id);
        $model->fill($request->all());
        $model->save();

        return createJsonResponse($model->toArray());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\JsonResponse
    {
        $model = Category::findOrFail($id);
        $model->delete();

        return createJsonResponse($model->toArray());
    }
}
