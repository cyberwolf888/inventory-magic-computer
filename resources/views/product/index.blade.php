@extends('layouts.main')

@section('title', 'Products')

@section('page-title')
    <span>Products</span>
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
        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">eCommerce</li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Catalog</li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-700">Products</li>
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
                               class="form-control form-control-solid w-250px ps-12" placeholder="Search Product"/>
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    <div class="w-100 mw-150px">
                        <!--begin::Select2-->
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                            <option></option>
                            <option value="all">All</option>
                            <option value="published">Published</option>
                            <option value="scheduled">Scheduled</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        <!--end::Select2-->
                    </div>
                    <!--begin::Add product-->
                    <a href="../../demo37/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-primary">Add
                        Product</a>
                    <!--end::Add product-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                    <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                       data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1"/>
                            </div>
                        </th>
                        <th class="min-w-200px">Product</th>
                        <th class="text-end min-w-100px">SKU</th>
                        <th class="text-end min-w-70px">Qty</th>
                        <th class="text-end min-w-100px">Price</th>
                        <th class="text-end min-w-100px">Rating</th>
                        <th class="text-end min-w-100px">Status</th>
                        <th class="text-end min-w-70px">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/1.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 1</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04793004</span>
                        </td>
                        <td class="text-end pe-0" data-order="10">
                            <span class="fw-bold ms-3">10</span>
                        </td>
                        <td class="text-end pe-0">159</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/2.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 2</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01755007</span>
                        </td>
                        <td class="text-end pe-0" data-order="13">
                            <span class="fw-bold ms-3">13</span>
                        </td>
                        <td class="text-end pe-0">109</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/3.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 3</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01792009</span>
                        </td>
                        <td class="text-end pe-0" data-order="22">
                            <span class="fw-bold ms-3">22</span>
                        </td>
                        <td class="text-end pe-0">108</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/4.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 4</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01362001</span>
                        </td>
                        <td class="text-end pe-0" data-order="38">
                            <span class="fw-bold ms-3">38</span>
                        </td>
                        <td class="text-end pe-0">288</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/5.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 5</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02310005</span>
                        </td>
                        <td class="text-end pe-0" data-order="3">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">3</span>
                        </td>
                        <td class="text-end pe-0">194</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/6.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 6</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02160008</span>
                        </td>
                        <td class="text-end pe-0" data-order="37">
                            <span class="fw-bold ms-3">37</span>
                        </td>
                        <td class="text-end pe-0">275</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/7.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 7</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01196002</span>
                        </td>
                        <td class="text-end pe-0" data-order="31">
                            <span class="fw-bold ms-3">31</span>
                        </td>
                        <td class="text-end pe-0">107</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/8.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 8</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01677007</span>
                        </td>
                        <td class="text-end pe-0" data-order="24">
                            <span class="fw-bold ms-3">24</span>
                        </td>
                        <td class="text-end pe-0">280</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/9.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 9</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01564005</span>
                        </td>
                        <td class="text-end pe-0" data-order="40">
                            <span class="fw-bold ms-3">40</span>
                        </td>
                        <td class="text-end pe-0">236</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/10.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 10</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04506004</span>
                        </td>
                        <td class="text-end pe-0" data-order="36">
                            <span class="fw-bold ms-3">36</span>
                        </td>
                        <td class="text-end pe-0">185</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/11.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 11</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01810004</span>
                        </td>
                        <td class="text-end pe-0" data-order="16">
                            <span class="fw-bold ms-3">16</span>
                        </td>
                        <td class="text-end pe-0">142</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/12.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 12</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02843005</span>
                        </td>
                        <td class="text-end pe-0" data-order="18">
                            <span class="fw-bold ms-3">18</span>
                        </td>
                        <td class="text-end pe-0">77</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/13.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 13</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03776007</span>
                        </td>
                        <td class="text-end pe-0" data-order="2">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">2</span>
                        </td>
                        <td class="text-end pe-0">102</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/14.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 14</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02633009</span>
                        </td>
                        <td class="text-end pe-0" data-order="39">
                            <span class="fw-bold ms-3">39</span>
                        </td>
                        <td class="text-end pe-0">258</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/15.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 15</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01576002</span>
                        </td>
                        <td class="text-end pe-0" data-order="46">
                            <span class="fw-bold ms-3">46</span>
                        </td>
                        <td class="text-end pe-0">274</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/16.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 16</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04611005</span>
                        </td>
                        <td class="text-end pe-0" data-order="50">
                            <span class="fw-bold ms-3">50</span>
                        </td>
                        <td class="text-end pe-0">148</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/17.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 17</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02319001</span>
                        </td>
                        <td class="text-end pe-0" data-order="45">
                            <span class="fw-bold ms-3">45</span>
                        </td>
                        <td class="text-end pe-0">218</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/18.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 18</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04709003</span>
                        </td>
                        <td class="text-end pe-0" data-order="7">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">7</span>
                        </td>
                        <td class="text-end pe-0">258</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/19.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 19</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04682009</span>
                        </td>
                        <td class="text-end pe-0" data-order="24">
                            <span class="fw-bold ms-3">24</span>
                        </td>
                        <td class="text-end pe-0">148</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/20.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 20</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03423006</span>
                        </td>
                        <td class="text-end pe-0" data-order="10">
                            <span class="fw-bold ms-3">10</span>
                        </td>
                        <td class="text-end pe-0">158</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/21.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 21</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02893003</span>
                        </td>
                        <td class="text-end pe-0" data-order="9">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">9</span>
                        </td>
                        <td class="text-end pe-0">49</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/22.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 22</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01876001</span>
                        </td>
                        <td class="text-end pe-0" data-order="37">
                            <span class="fw-bold ms-3">37</span>
                        </td>
                        <td class="text-end pe-0">159</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/23.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 23</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02818003</span>
                        </td>
                        <td class="text-end pe-0" data-order="35">
                            <span class="fw-bold ms-3">35</span>
                        </td>
                        <td class="text-end pe-0">150</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/24.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 24</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01750007</span>
                        </td>
                        <td class="text-end pe-0" data-order="1">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">1</span>
                        </td>
                        <td class="text-end pe-0">195</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/25.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 25</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03210005</span>
                        </td>
                        <td class="text-end pe-0" data-order="26">
                            <span class="fw-bold ms-3">26</span>
                        </td>
                        <td class="text-end pe-0">164</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/26.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 26</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01245008</span>
                        </td>
                        <td class="text-end pe-0" data-order="12">
                            <span class="fw-bold ms-3">12</span>
                        </td>
                        <td class="text-end pe-0">186</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/27.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 27</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04273005</span>
                        </td>
                        <td class="text-end pe-0" data-order="24">
                            <span class="fw-bold ms-3">24</span>
                        </td>
                        <td class="text-end pe-0">287</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/28.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 28</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01426002</span>
                        </td>
                        <td class="text-end pe-0" data-order="8">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">8</span>
                        </td>
                        <td class="text-end pe-0">269</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/29.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 29</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01160002</span>
                        </td>
                        <td class="text-end pe-0" data-order="26">
                            <span class="fw-bold ms-3">26</span>
                        </td>
                        <td class="text-end pe-0">164</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/30.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 30</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01255003</span>
                        </td>
                        <td class="text-end pe-0" data-order="29">
                            <span class="fw-bold ms-3">29</span>
                        </td>
                        <td class="text-end pe-0">14</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/31.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 31</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01984005</span>
                        </td>
                        <td class="text-end pe-0" data-order="25">
                            <span class="fw-bold ms-3">25</span>
                        </td>
                        <td class="text-end pe-0">110</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/32.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 32</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03901005</span>
                        </td>
                        <td class="text-end pe-0" data-order="11">
                            <span class="fw-bold ms-3">11</span>
                        </td>
                        <td class="text-end pe-0">201</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/33.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 33</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03426001</span>
                        </td>
                        <td class="text-end pe-0" data-order="44">
                            <span class="fw-bold ms-3">44</span>
                        </td>
                        <td class="text-end pe-0">261</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/34.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 34</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02219008</span>
                        </td>
                        <td class="text-end pe-0" data-order="4">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">4</span>
                        </td>
                        <td class="text-end pe-0">272</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/35.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 35</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01910007</span>
                        </td>
                        <td class="text-end pe-0" data-order="10">
                            <span class="fw-bold ms-3">10</span>
                        </td>
                        <td class="text-end pe-0">249</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/36.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 36</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03730006</span>
                        </td>
                        <td class="text-end pe-0" data-order="46">
                            <span class="fw-bold ms-3">46</span>
                        </td>
                        <td class="text-end pe-0">216</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/37.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 37</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02590007</span>
                        </td>
                        <td class="text-end pe-0" data-order="9">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">9</span>
                        </td>
                        <td class="text-end pe-0">279</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/38.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 38</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01120003</span>
                        </td>
                        <td class="text-end pe-0" data-order="3">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">3</span>
                        </td>
                        <td class="text-end pe-0">243</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/39.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 39</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04856002</span>
                        </td>
                        <td class="text-end pe-0" data-order="44">
                            <span class="fw-bold ms-3">44</span>
                        </td>
                        <td class="text-end pe-0">148</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/40.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 40</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01809001</span>
                        </td>
                        <td class="text-end pe-0" data-order="40">
                            <span class="fw-bold ms-3">40</span>
                        </td>
                        <td class="text-end pe-0">283</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/41.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 41</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03300004</span>
                        </td>
                        <td class="text-end pe-0" data-order="21">
                            <span class="fw-bold ms-3">21</span>
                        </td>
                        <td class="text-end pe-0">103</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/42.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 42</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03349006</span>
                        </td>
                        <td class="text-end pe-0" data-order="3">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">3</span>
                        </td>
                        <td class="text-end pe-0">66</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/43.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 43</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01964008</span>
                        </td>
                        <td class="text-end pe-0" data-order="38">
                            <span class="fw-bold ms-3">38</span>
                        </td>
                        <td class="text-end pe-0">168</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/44.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 44</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03946002</span>
                        </td>
                        <td class="text-end pe-0" data-order="31">
                            <span class="fw-bold ms-3">31</span>
                        </td>
                        <td class="text-end pe-0">121</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/45.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 45</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02715006</span>
                        </td>
                        <td class="text-end pe-0" data-order="48">
                            <span class="fw-bold ms-3">48</span>
                        </td>
                        <td class="text-end pe-0">49</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/46.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 46</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04196007</span>
                        </td>
                        <td class="text-end pe-0" data-order="30">
                            <span class="fw-bold ms-3">30</span>
                        </td>
                        <td class="text-end pe-0">200</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/47.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 47</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03369009</span>
                        </td>
                        <td class="text-end pe-0" data-order="29">
                            <span class="fw-bold ms-3">29</span>
                        </td>
                        <td class="text-end pe-0">229</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/48.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 48</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03844003</span>
                        </td>
                        <td class="text-end pe-0" data-order="49">
                            <span class="fw-bold ms-3">49</span>
                        </td>
                        <td class="text-end pe-0">104</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/49.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 49</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02659005</span>
                        </td>
                        <td class="text-end pe-0" data-order="36">
                            <span class="fw-bold ms-3">36</span>
                        </td>
                        <td class="text-end pe-0">139</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"/>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="symbol symbol-50px">
                                    <span class="symbol-label"
                                          style="background-image:url(assets/media//stock/ecommerce/50.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">Product 50</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04424009</span>
                        </td>
                        <td class="text-end pe-0" data-order="6">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">6</span>
                        </td>
                        <td class="text-end pe-0">271</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo37/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Products-->
    </div>
    <!--end::Content-->
@endsection

@push('vendor_js')
    <script src="{{ env('APP_URL') }}assets/js/custom/apps/ecommerce/catalog/products.js"></script>
@endpush
