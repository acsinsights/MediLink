@extends('admin.includes.app')
@section('title', 'Dashboard')
@section('content')




    <div class="row mb-3">
        <div class="col">
            <div class="card bg-100 shadow-none border">
                <div class="row gx-0 flex-between-center">
                    <div class="col-sm-auto d-flex align-items-center"><img class="ms-n2"
                            src="assets/img/illustrations/crm-bar-chart.png" alt="" width="90">
                        <div>
                            <h6 class="text-primary fs--1 mb-0">Welcome </h6>
                            <h4 class="text-primary fw-bold mb-0">{{ Auth::user()->name }} <span
                                    class="text-info fw-medium"></span></h4>
                        </div><img class="ms-n4 d-md-none d-lg-block" src="assets/img/illustrations/crm-line-chart.png"
                            alt="" width="150">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3 g-3">`
        <div class="col-lg-12 col-xxl-9">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 border-lg-end border-bottom border-lg-0 pb-3 pb-lg-0">
                            <div class="d-flex flex-between-center mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary">
                                        <span class="fs--2 fas fa-phone text-primary"></span>
                                    </div>
                                    <h6 class="mb-0">Total Contact Form Entries</h6>
                                </div>
                                <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                        class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                                        type="button" id="dropdown-new-contact" data-bs-toggle="dropdown"
                                        data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                            class="fas fa-ellipsis-h fs--2"></span></button>
                                    {{-- <div class="dropdown-menu dropdown-menu-end border py-2"
                                        aria-labelledby="dropdown-new-contact">
                                        <a class="dropdown-item" href="#!">View</a><a class="dropdown-item"
                                            href="#!">Export</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                            href="#!">Remove</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="d-flex">
                                    <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">{{ $messages->count() }}</p>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 border-lg-end border-bottom border-lg-0 py-3 py-lg-0">
                            <div class="d-flex flex-between-center mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-info"><span
                                            class="fs--2 fas fa-user text-info"></span></div>
                                    <h6 class="mb-0">Total Testimonials</h6>
                                </div>
                                <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                        class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                                        type="button" id="dropdown-new-users" data-bs-toggle="dropdown"
                                        data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                            class="fas fa-ellipsis-h fs--2"></span></button>
                                    {{-- <div class="dropdown-menu dropdown-menu-end border py-2"
                                        aria-labelledby="dropdown-new-users"><a class="dropdown-item"
                                            href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                            href="#!">Remove</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="d-flex">
                                    <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">{{ $testimonials->count() }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
