<!--begin::Modal - New Target-->
<div class="modal fade" id="kt_modal_form" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i></div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="kt_modal_main_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Form Rak</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <div class="d-flex flex-column mb-8 fv-row d-none" id="main_error_container">
                        <div class="alert alert-danger mb-5" role="alert" id="main_error_content">
                            <div class="mb-0 fw-bold" id="main_error_title">There are some errors with your submission</div>
                            <div class="mt-5" id="main_error_items"></div>
                        </div>
                    </div>
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2" for="nama">
                            <span class="required">Nama Rak</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Nama Rak required">
	                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Nama Rak" name="nama" id="nama"/>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_btn_cancel" class="btn btn-light me-3">
                            Cancel
                        </button>
                        <button type="submit" id="kt_modal_btn_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Save
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->
