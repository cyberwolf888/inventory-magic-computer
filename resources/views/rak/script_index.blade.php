<script>
    "use strict";

    var mainModal = new bootstrap.Modal(document.querySelector('#kt_modal_form'));
    var isUpdate = false;
    var model_id = null;

    // Class definition
    var KTViewTables = function () {
        // Shared variables
        var table;
        var datatable;
        var form;
        var formModal;
        var deleteUrl;
        var datatableurl;

        // Private functions
        var initDatatable = function () {
            // Init datatable --- more info on datatables: https://datatables.net/manual/
            datatable = $(table).DataTable({
                info: false,
                searchDelay: 500,
                processing: true,
                serverSide: true,
                order: [],
                ajax: {
                    url: datatableurl,
                    type: "GET",
                },
                columns: [
                    { data: 'nama' },
                    { data: 'created_at' },
                    { data: 'action' },
                ],
                columnDefs: [
                    {
                        targets: -1,
                        orderable: false,
                        searchable: false,
                    },
                ],
            });

            // Re-init functions on datatable re-draws
            datatable.on('draw', function () {
                handleDeleteRows();
                handleEditRows();
                KTMenu.createInstances();
            });
        }

        var handleEditRows = () => {
            const editButtons = table.querySelectorAll('[data-kt-filter="edit_row"]');
            editButtons.forEach(e => {
                e.addEventListener('click', function (e) {
                    e.preventDefault();
                    const id = e.target.getAttribute('data-id');
                    const model = e.target.getAttribute('data-model');
                    const modelObj = JSON.parse(model);
                    form.querySelector('[name="nama"]').value = modelObj.nama;
                    isUpdate = true;
                    model_id = id;
                    formModal.toggle();
                });
            });
        }

        // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
        var handleSearchDatatable = () => {
            const filterSearch = document.querySelector('[data-kt-ecommerce-product-filter="search"]');
            filterSearch.addEventListener('keyup', function (e) {
                datatable.search(e.target.value).draw();
            });
        }

        // Handle status filter dropdown
        var handleStatusFilter = () => {
            const filterStatus = document.querySelector('[data-kt-ecommerce-product-filter="status"]');
            $(filterStatus).on('change', e => {
                let value = e.target.value;
                if(value === 'all'){
                    value = '';
                }
                datatable.column(6).search(value).draw();
            });
        }

        // Delete cateogry
        var handleDeleteRows = () => {
            // Select all delete buttons
            const deleteButtons = table.querySelectorAll('[data-kt-filter="delete_row"]');

            deleteButtons.forEach(d => {
                // Delete button on click
                d.addEventListener('click', function (e) {
                    e.preventDefault();
                    const id = e.target.getAttribute('data-id');

                    // Select parent row
                    const parent = e.target.closest('tr');

                    // Get category name
                    // const productName = parent.querySelector('[data-kt-ecommerce-product-filter="product_name"]').innerText;

                    // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Are you sure you want to delete?",
                        icon: "warning",
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then(function (result) {
                        if (result.value) {
                            //ajax post delete
                            $.ajax({
                                url: deleteUrl,
                                type: 'POST',
                                data: {
                                    id: id
                                },
                                success: function (data) {
                                    if (data.success) {
                                        Swal.fire({
                                            text: "You have deleted!",
                                            icon: "success",
                                            buttonsStyling: false,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn fw-bold btn-primary",
                                            }
                                        }).then(function () {
                                            // Remove current row
                                            datatable.row($(parent)).remove().draw();
                                        });
                                    } else {
                                        Swal.fire({
                                            text: "You have failed to delete!",
                                            icon: "error",
                                            buttonsStyling: false,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn fw-bold btn-primary",
                                            }
                                        });
                                    }
                                },
                                error: function (data) {
                                    console.log(data)
                                    Swal.fire({
                                        text: "You have failed to delete!",
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn fw-bold btn-primary",
                                        }
                                    });
                                }
                            });
                            console.log('delete data');
                        } else if (result.dismiss === 'cancel') {

                        }
                    });
                })
            });
        }


        // Public methods
        return {
            init: function () {
                table = document.querySelector('#kt_table_datatables');
                form = document.querySelector('#kt_modal_main_form');
                formModal = mainModal;
                deleteUrl = "{{ route('rak.delete') }}";
                datatableurl = "{{ route('rak.data_tables') }}";

                if (!table) {
                    return;
                }

                initDatatable();
                handleSearchDatatable();
                // handleStatusFilter();
                handleDeleteRows();
                handleEditRows();
            }
        };
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function () {
        KTViewTables.init();
    });

</script>
