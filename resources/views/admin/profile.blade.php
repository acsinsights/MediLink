@extends('admin.includes.app')
@section('title', 'Profile')
@section('content')


    <div class="row g-0">
        <div class="col-lg-8 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Profile Settings</h5>
                </div>
                <div class="card-body bg-light">
                    <form method="post" enctype="multipart/form-data" action="{{ route('profile.update') }}" class="row g-3">
                        @csrf
                        @method('patch')
                        <div class="mb-20 media">
                            <a href="javascript:void(0);" class="mr-25">
                                <img src="{{ Auth::user()->profile_img ? url('profiles/' . Auth::user()->profile_img) : url('profiles/user.jpg') }}"
                                    id="account-upload-img" class="rounded mr-50"
                                    alt="{{ Auth::user()->name }} profile image" height="80"
                                    width="80">
                            </a>
                            <div class="media-body mt-75 ml-1">

                                <button type="button"
                                    class="btn btn-sm btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0"
                                    data-toggle="modal" data-target="#addImagePopup">
                                    Change Profile Picture
                                </button>
                                @if (Auth::user()->profile_img)
                                    <a href="{{ route('profile.image.destroy') }}"
                                        onclick="confirm('are your sure you want to delete your profile picture')"
                                        class="btn btn-sm btn-danger mr-0 mr-sm-1 mb-1 mb-sm-0">
                                        Delete Profile Picture
                                    </a>
                                @endif

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="form-control"
                                value="{{ Auth::user()->name }}" autofocus autocomplete="name" />
                            <x-input-error class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 "
                                :messages="$errors->get('name')" />
                        </div>
                        {{-- <div class="col-lg-6"> <label class="form-label" for="last-name">Last Name</label><input
                                class="form-control" id="last-name" type="text" value="Hopkins"></div> --}}
                        <div class="col-lg-6">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="email" class="form-control"
                                value="{{ Auth::user()->email }}" autofocus autocomplete="email" />
                            <x-input-error class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 "
                                :messages="$errors->get('email')" />
                        </div>
                        <div class="col-lg-6">
                            <x-input-label for="phone_no" :value="__('Phone no')" />
                            <x-text-input id="phone_no" name="phone_no" type="text" class="form-control"
                                value="{{ Auth::user()->phone_no }}" autofocus autocomplete="phone_no" />
                            <x-input-error :messages="$errors->get('phone_no')"
                                class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 " />
                        </div>

                        {{-- <div class="col-lg-12"> <label class="form-label" for="intro">Intro</label>
                            <textarea class="form-control" id="intro" name="intro" cols="30" rows="13">Dedicated, passionate, and accomplished Full Stack Developer with 9+ years of progressive experience working as an Independent Contractor for Google and developing and growing my educational social network that helps others learn programming, web design, game development, networking. I’ve acquired a wide depth of knowledge and expertise in using my technical skills in programming, computer science, software development, and mobile app development to developing solutions to help organizations increase productivity, and accelerate business performance. It’s great that we live in an age where we can share so much with technology but I’m but I’m ready for the next phase of my career, with a healthy balance between the virtual world and a workplace where I help others face-to-face. There’s always something new to learn, especially in IT-related fields. People like working with me because I can explain technology to everyone, from staff to executives who need me to tie together the details and the big picture. I can also implement the technologies that successful projects need.</textarea>
                        </div> --}}
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Update</button>
                            @if (session('status') === 'profile-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600 dark:text-gray-400">
                                    {{ __('Profile Saved Successfully.') }}
                                </p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 ps-lg-2">
            <div class="sticky-sidebar">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Change Password</h5>
                    </div>
                    <div class="card-body bg-light">
                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')
                            <div class="mb-3"><label class="form-label" for="old-password">Current Password</label>
                                <div class="input-group form-password-toggle input-group-merge">
                                    <x-text-input id="current_password" name="current_password" type="password"
                                        class="form-control" autocomplete="current-password" />
                                    {{-- <div class="input-group-append">
                                        <div class="input-group-text cursor-pointer">
                                            <i data-feather="eye"></i>
                                        </div>
                                    </div> --}}
                                </div>
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="err-msg" />
                            </div>
                            <div class="mb-3"><label class="form-label" for="new-password">New Password</label>
                                <div class="input-group form-password-toggle input-group-merge">
                                    <x-text-input id="password" name="password" type="password" class="form-control"
                                        autocomplete="new-password" />

                                </div>
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="err-msg" />

                            </div>
                            <div class="mb-3"><label class="form-label" for="confirm-password">Confirm
                                    Password</label>
                                <div class="input-group form-password-toggle input-group-merge">
                                    <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                        class="form-control" autocomplete="new-password" />

                                </div>
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"class="err-msg" />

                            </div><button class="btn btn-primary d-block w-100" type="submit">Update Password </button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Danger Zone</h5>
                    </div>
                    <div class="card-body bg-light">
                        <h5 class="fs-0">Delete this account</h5>
                        <p class="fs--1">Once you delete a account, there is no going back. Please be certain.</p><a
                            class="btn btn-falcon-danger d-block" href="#!">Delete Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- Modal -->
    <div class="modal fade" id="addImagePopup" tabindex="-1" role="dialog" aria-labelledby="addImagePopupLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addImagePopupLabel">
                        Add Image
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form" action="{{ route('profile.image.update') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class=" col-12">
                                <div class="form-group">
                                    <label for="profile_image">
                                        Project Image
                                        <span class="text-danger">
                                            (300 x 200 px)
                                        </span>
                                    </label>
                                    <div class="custom-file">
                                        <input type="file" name="profile_image" class="custom-file-input"
                                            id="profile_image">
                                        <label class="custom-file-label" for="profile_image">
                                            Choose file
                                        </label>
                                    </div>
                                    @error('profile_image')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('js')
    @if ($errors->any())
        <script>
            $('#addImagePopup').modal('show')
        </script>
    @endif
@endsection
