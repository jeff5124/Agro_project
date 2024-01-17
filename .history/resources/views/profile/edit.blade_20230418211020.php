@extends('welcome')

@section('css')
@endsection

@section('content')
<!--begin::Navbar-->

<!--end::Navbar-->

<!--begin::Card-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header">
        <!--begin::Card title-->
        <div class="card-title fs-3 fw-bold">Project Détail </div>
        <!--end::Card title-->
    </div>
    <!--end::Card header-->

    <!--begin::Form-->
    <form id="kt_project_settings_form" class="form" method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" >
        @csrf
        @method('patch')
        <!--begin::Card body-->
        <div class="card-body p-9">
            <!--begin::Row-->
            <div class="row mb-5">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Photo profil</div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Image input-->
                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('../../assets/media/svg/avatars/blank.svg')">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%; background-image: url('../../assets/media/svg/brand-logos/volikcity-9.svg')"></div>
                        <!--end::Preview existing avatar-->

                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                            <i class="bi bi-pencil-fill fs-7"></i>

                            <!--begin::Inputs-->
                            <input type="file" name="image2" accept=".png, .jpg, .jpeg"/>
                            <input type="hidden" name="avatar_remove"/>
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->

                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel-->

                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Image input-->

                    <!--begin::Hint-->
                    <div class="form-text">Allowed file types:  png, jpg, jpeg.</div>
                    <!--end::Hint-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

            <!--begin::Row-->
            <div class="row mb-8">
                 <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Nom </div>
                </div>
                <!--end::Col-->

                 <!--begin::Col-->
                <div class="col-xl-9 fv-row">
                    <input type="text" class="form-control form-control-solid" name="name" value="{{$user->name}}" />
                </div>
            </div>
            <!--end::Row-->

            <!--begin::Row-->
            <div class="row mb-8">
                 <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Email</div>
                </div>
                <!--end::Col-->

                 <!--begin::Col-->
                <div class="col-xl-9 fv-row">
                    <input type="email" class="form-control form-control-solid" name="email" value="{{$user->email}}" />
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer d-flex justify-content-end py-6 px-9">
{{--             <button type="reset" class="btn btn-light btn-active-light-primary me-2">Aller sur la documention</button>
 --}}
            <button type="submit" class="btn btn-primary" id="kt_project_settings_submit" >Sauvegarder</button>
        </div>
        <!--end::Card footer-->
    </form>
    <!--end:Form-->
</div>
<!--end::Card-->
<!--begin::Sign-in Method-->
<div class="card  mb-5 mb-xl-10"   >
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Modifier mot de passe</h3>
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Content-->
    <div id="kt_account_settings_signin_method" class="collapse show">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
            <!--begin::Password-->
            <div class="d-flex flex-wrap align-items-center mb-10">
                <!--begin::Label-->
                <div id="kt_signin_password">
                    <div class="fs-6 fw-bold mb-1">Mot de passe</div>
                    <div class="fw-semibold text-gray-600">************</div>
                </div>
                <!--end::Label-->

                <!--begin::Edit-->
                <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                    <!--begin::Form-->
                    <form id="kt_signin_change_password" method="post" action="{{ route('password.update') }}" class="form" novalidate="novalidate">
                        @csrf
                        @method('put')
                        <div class="row mb-1">
                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Mot de passe actuelle</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid " name="current_password" id="currentpassword" />
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="newpassword" class="form-label fs-6 fw-bold mb-3">Noueau mot de passe</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid " name="password" id="newpassword" />
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fv-row mb-0">
                                    <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirmation mot de passe</label>
                                    <input type="password" class="form-control form-control-lg form-control-solid " name="password_confirmation" id="confirmpassword" />
                                </div>
                            </div>
                        </div>

                        <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>

                        <div class="d-flex">
                            <button id="kt_password_submitt" type="Submit" class="btn btn-primary me-2 px-6">Sauvegarder</button>
                            <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Edit-->

                <!--begin::Action-->
                <div id="kt_signin_password_button" class="ms-auto">
                    <button class="btn btn-light btn-active-light-primary">Changement de mot de passe</button>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Password-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Content-->
</div>
<!--end::Sign-in Method-->

    @if($errors != null && $errors->updatePassword->get('current_password') != null)
        @foreach ($errors->updatePassword->get('current_password') as $item)
            <input hidden type="text" id="current_password"  value="{{$item}}">
        @endforeach
    @endif

    @if($errors != null && $errors->updatePassword->get('password') != null)
        @foreach ($errors->updatePassword->get('password') as $item)
            <input hidden type="text" id="password"  value="{{$item}}">
        @endforeach
    @endif

@endsection
@section('js')

<script src="{{asset('assets/js/custom/account/settings/signin-methods.js')}} "></script>

<script>
    console.log("consoooo" + $('#current_password').val());
    if($('#current_password').val() != null){
        Swal.fire({
            text: $('#current_password').val(),
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
    }else if($('#password').val() != null){
        Swal.fire({
            text: $('#password').val(),
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
    }

</script>
@endsection


