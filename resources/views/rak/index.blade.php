@extends('layouts.main')

@section('title', 'Rak')

@section('page-title')
    <span>Rak</span>
@endsection

@section('breadcrumb')
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3 fs-7">
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
            <a href="{{ env('APP_URL') }}" class="text-white">
                <i class="ki-outline ki-home text-gray-700 fs-6"></i>
            </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Rak</li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-700">Manage</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection

@section('content')
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Products-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                        <input type="text" data-kt-ecommerce-product-filter="search"
                               class="form-control form-control-solid w-250px ps-12" placeholder="Search Rak"/>
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

                    <!--begin::Add product-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_form">Add Rak</button>
                    <!--end::Add product-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_datatables">
                    <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-100">Nama Rak</th>
                        <th>Created At</th>
                        <th class="max-w-100">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Products-->
    </div>
    <!--end::Content-->

    @include('rak.modal_form')
@endsection

@push('vendor_js')
    @include('rak.script_index')
    @include('rak.script_modal_form')
@endpush
