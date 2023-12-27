@extends('admin.includes.app')
@section('title', 'Add Testimonials')
@section('content')


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Add Testimonial</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Add Testimonial</a>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row flex-between-end">
                        </div>
                    </div>
                    <div class="card-body bg-light mb-4">
                        <div class="tab-content">
                            <form action="{{ route('admin.testimonial.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label class="form-label" for="basic-form-name"> Customer Name</label>
                                            <input type="text" class="form-control" placeholder="Customer Name Goes Here"
                                                name="name" value="{{ old('name') }}">
                                            @error('name')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-name"> Customer Designation</label>
                                        <input type="text" class="form-control"
                                            placeholder="Customer Designation Goes Here" name="custdesignation"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-name"> Customer Company Name</label>
                                        <input type="text" class="form-control"
                                            placeholder="Customer Company name Goes Here" name="custcompany"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3"><label class="form-label" for="basic-form-dob">Date </label>
                                        <input type="date" class="form-control" placeholder="Customer Designation"
                                            name="date" value="{{ old('date') }}">
                                        @error('date')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <label for="customFile" name="cover" class="form-label">Upload Image</label>
                                            <input class="form-control" type="file" name="cover">
                                            @error('cover')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3"><label class="form-label" for="basic-form-textarea">Description</label>
                                    <textarea class="form-control" name="review" maxlength="120" id="" cols="30" rows="3">{{ old('review') }}</textarea>
                                    @error('review')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    {{-- <div class="text-right" id="count">
                                        <span id="current_count">0</span>
                                        <span id="maximum_count">/ 120</span>
                                    </div> --}}
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
@endsection
