<script>
    "use strict";

    // Class definition
    var KTModalForm = function () {
        var submitButton;
        var cancelButton;
        var validator;
        var form;
        var storeUrl;
        var updateUrl;
        var modal;
        var modalEl;
        var error_container;
        var error_items;
        var datatable;

        // Init form inputs
        var initForm = function() {

            // Due date. For more info, please visit the official plugin site: https://flatpickr.js.org/
            // var dueDate = $(form.querySelector('[name="due_date"]'));
            // dueDate.flatpickr({
            //     enableTime: true,
            //     dateFormat: "d, M Y, H:i",
            // });

        }

        var setLoading = function (isLoading) {
            if (isLoading) {
                submitButton.setAttribute('data-kt-indicator', 'on');
                // Disable button to avoid multiple click
                submitButton.disabled = true;
            } else {
                submitButton.removeAttribute('data-kt-indicator');
                // Enable button
                submitButton.disabled = false;
            }
        }

        var submitData = function () {
            setLoading(true);
            // Get data from form
            var nama = form.querySelector('[name="nama"]').value;

            var url = storeUrl;
            if(isUpdate) {
                url = updateUrl;
                url = url.replace(':id', model_id);
            }
            // Send data to server
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    id: model_id,
                    nama: nama,
                },
                success: function (data) {
                    console.log(data);
                    // Show message
                    Swal.fire({
                        text: "Data berhasil disimpan!",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then(function (result) {
                        setLoading(false);
                        if (result.isConfirmed) {
                            modal.hide();
                            if(datatable) {
                                datatable.ajax.reload();
                            }
                            isUpdate = false;
                            model_id = null;
                            form.reset();
                        }
                    });
                },
                error: function (data) {
                    // Show message
                    var message  = "Sorry, looks like there are some errors detected, please try again.";
                    if(data.responseJSON.message) {
                        message = data.responseJSON.message;
                    }
                    Swal.fire({
                        text: message,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then(function (result) {
                        setLoading(false);
                    });
                }
            });
        }

        // Handle form validation and submittion
        var handleForm = function() {
            // Stepper custom navigation

            // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
            validator = FormValidation.formValidation(
                form,
                {
                    fields: {
                        nama: {
                            validators: {
                                notEmpty: {
                                    message: 'Nama Lokasi is required'
                                }
                            }
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row',
                            eleInvalidClass: '',
                            eleValidClass: ''
                        })
                    }
                }
            );

            // Action buttons
            submitButton.addEventListener('click', function (e) {
                e.preventDefault();

                // Validate form before submit
                if (validator) {
                    validator.validate().then(function (status) {
                        if (status == 'Valid') {
                            submitData();
                        } else {
                            // Show error message.
                            Swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    });
                }
            });

            cancelButton.addEventListener('click', function (e) {
                e.preventDefault();
                form.reset();
                modal.hide();
            });
        }

        return {
            // Public functions
            init: function () {
                // Elements
                modalEl = document.querySelector('#kt_modal_form');

                if (!modalEl) {
                    return;
                }

                modal = mainModal;

                if ($.fn.dataTable.isDataTable('#kt_table_datatables')) {
                    // If the table is already a DataTable, reload its data
                    // $("#kt_table_datatables").DataTable().ajax.reload();
                    datatable = $("#kt_table_datatables").DataTable();
                }else{
                    datatable = null;
                }

                storeUrl = "{{ route('lokasi.store') }}";
                updateUrl = "{{ route('lokasi.update', ':id') }}";

                form = document.querySelector('#kt_modal_main_form');
                submitButton = document.getElementById('kt_modal_btn_submit');
                cancelButton = document.getElementById('kt_modal_btn_cancel');

                error_container = document.getElementById('#main_error_container');
                error_items = document.getElementById('#main_error_items');

                initForm();
                handleForm();
            }
        };
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function () {
        KTModalForm.init();
    });
</script>
