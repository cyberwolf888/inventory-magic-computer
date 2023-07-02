<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lokasi.index');
    }

    public function dataTables(Request $request): \Illuminate\Http\JsonResponse
    {
        $model = Lokasi::query();
        $model->orderBy('created_at', 'desc');

        return DataTables::eloquent($model)
            ->addColumn('created_at', function ($model) {
                return $model->created_at->format('d-m-Y H:i:s');
            })
            ->addColumn('action', function ($model) {
                $html = ' <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                Actions
                                <span class="svg-icon fs-5 m-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                            <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="currentColor" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-filter="edit_row" data-id="'. $model->id .'" data-model="'. htmlspecialchars(json_encode($model->toArray())) .'">
                                        Edit
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-filter="delete_row" data-id="'. $model->id .'">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->';
                return $html;
                //return '<a href="#" class="btn btn-sm btn-primary btn-edit" data-kt-filter="edit_row" data-id="'. $model->id .'" data-model="'. htmlspecialchars(json_encode($model->toArray())) .'">Edit</a>';
                //return view('layouts.partials._action', [
                //    'model' => $model,
                //    'show_url' => route('rak.show', $model->id),
                //    'edit_url' => route('rak.edit', $model->id),
                //    'delete_url' => route('rak.destroy', $model->id),
                //]);
            })
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
            'nama' => 'required|unique:lokasis|max:255',
        ]);

        $model = new Lokasi();
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
            'nama' => 'required|unique:lokasis,nama,' . $id . '|max:255',
        ]);

        $model = Lokasi::findOrFail($id);
        $model->fill($request->all());
        $model->save();

        return createJsonResponse($model->toArray());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $model = Lokasi::findOrFail($id);
        $model->delete();

        return createJsonResponse($model->toArray());
    }
}
