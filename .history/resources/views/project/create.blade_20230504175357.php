@extends('welcome')

@section('content')
<!--begin::Stepper-->
<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid gap-10" id="kt_create_account_stepper">
    <!--begin::Aside-->
    <div class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px">
        <!--begin::Wrapper-->
        <div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
            <!--begin::Nav-->
            <div class="stepper-nav">
                <!--begin::Step 1-->
                <div class="stepper-item current" data-kt-stepper-element="nav">
                    <!--begin::Wrapper-->
                    <div class="stepper-wrapper">
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">1</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">
                                Domaine
                            </h3>

                            <div class="stepper-desc fw-semibold">
                                Fait le choix de votre domaine d'invetissement
                            </div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Line-->
                    <div class="stepper-line h-40px"></div>
                    <!--end::Line-->
                </div>
                <!--end::Step 1-->

                <!--begin::Step 2-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                    <!--begin::Wrapper-->
                    <div class="stepper-wrapper">
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">2</span>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">
                                Espece
                            </h3>
                            <div class="stepper-desc fw-semibold">
                                Setup Your Account Settings
                            </div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Line-->
                    <div class="stepper-line h-40px"></div>
                    <!--end::Line-->
                </div>
                <!--end::Step 2-->

                <!--begin::Step 3-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                    <!--begin::Wrapper-->
                    <div class="stepper-wrapper">
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">3</span>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">
                                Informations
                            </h3>
                            <div class="stepper-desc fw-semibold">
                                Remplis les informations de détails
                            </div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Line-->
                    <div class="stepper-line h-40px"></div>
                    <!--end::Line-->
                </div>
                <!--end::Step 3-->



                <!--begin::Step 4-->
                <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                    <!--begin::Wrapper-->
                    <div class="stepper-wrapper">
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">4</span>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">
                                FIN
                            </h3>
                            <div class="stepper-desc fw-semibold">
                                Woah, Valider votre projet
                            </div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Step 4-->
            </div>
            <!--end::Nav-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--begin::Aside-->
    <!--begin::Content-->
    <div class="card d-flex flex-row-fluid flex-center">
        <!--begin::Form-->
        <form method="POST" action="{{route('project.save')}}" class="card-body py-20 w-100 mw-xl-700px px-9" novalidate="novalidate" id="kt_create_account_form">

            <!--begin::Step 1-->
            <div class="current" data-kt-stepper-element="content">
                @csrf
                <!--begin::Wrapper-->
                <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-15">
                        <!--begin::Title-->
                        <h2 class="fw-bold d-flex align-items-center text-dark">
                            La liste des domaines
                        </h2>
                        <!--end::Title-->

                        <!--begin::Notice-->

                        <!--end::Notice-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="fv-row">
                    <!--begin::Row-->
                    <div class="row">
                        @foreach ($domaines as $domaine)
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Option-->
                                <input id="kt_create_account_form_{{$domaine->id}}" type="radio" class="btn-check" name="domaine_id" value="{{$domaine->id}}" />
                                <label for="kt_create_account_form_{{$domaine->id}}" class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                    <div class="symbol symbol-60px mb-5">
                                        <img src="{{asset($domaine->image)}}" class="theme-light-show" alt=""/>
                                    </div>
                                    <!--end::Svg Icon-->
                                    <!--begin::Info-->
                                    <span class="d-block fw-semibold text-start">
                                        <span class="text-dark fw-bold d-block fs-4 mb-2">
                                            {{$domaine->libelle}}
                                        </span>
                                        <span class="text-muted fw-semibold fs-6">{{$domaine->description}}</span>
                                    </span>
                                    <!--end::Info-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Col-->
                        @endforeach
                        <!--begin::Col-->
                        <div class="col-lg-6">
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="account_typee" value="personal"  id="kt_create_account_form_account_type_personal"/>
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="../../assets/media/svg/files/pdf.svg" class="theme-light-show" alt=""/>
                                </div>
                                <!--end::Svg Icon-->
                                <!--begin::Info-->
                                <span class="d-block fw-semibold text-start">
                                    <span class="text-dark fw-bold d-block fs-4 mb-2">
                                        Elévage
                                    </span>
                                    <span class="text-muted fw-semibold fs-6">si tu veux devenir riche investir dans l'elevage</span>
                                </span>
                                <!--end::Info-->
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-6">
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="account_typ" value="corporate" id="kt_create_account_form_account_type_corporate2"/>
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate2">
                                <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="../../assets/media/svg/files/css.svg" class="theme-light-show" alt=""/>
                                </div>
                                <!--end::Svg Icon-->
                                <!--begin::Info-->
                                <span class="d-block fw-semibold text-start">
                                    <span class="text-dark fw-bold d-block fs-4 mb-2">Maréchage</span>
                                    <span class="text-muted fw-semibold fs-6">Create corporate account to mane users</span>
                                </span>
                                <!--end::Info-->
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Step 1-->

            <!--begin::Step 2-->
            <div data-kt-stepper-element="content">
                <!--begin::Wrapper-->
                <div class="w-100">


                    <!--begin::Input group-->
                    <div class="mb-0 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center form-label mb-5">
                            Choisir un èspece
                        </label>
                        <!--end::Label-->
                        <!--begin::Options-->
                        <div class="mb-0">
                            @foreach($especes as $espece)
                                <!--begin:Option-->
                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                    <!--begin:Label-->
                                    <span class="d-flex align-items-center me-2">
                                        <!--begin::Icon-->
                                        <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label">
                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                    {{-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor"/>
                                                    <path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor"/>
                                                    </svg> --}}
                                                    <img width="24" height="24" src="{{asset($espece->image)}}" alt="">
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <!--end::Icon-->
                                        <!--begin::Description-->
                                        <span class="d-flex flex-column">
                                            <span class="fw-bold text-gray-800 text-hover-primary fs-5">{{$espece->libelle}}</span>
                                            <span class="fs-6 fw-semibold text-muted">{{$espece->description}}</span>
                                        </span>
                                        <!--end:Description-->
                                    </span>
                                    <!--end:Label-->

                                    <!--begin:Input-->
                                    <span class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" name="espece_id" value="{{$espece->id}}"/>
                                    </span>
                                    <!--end:Input-->
                                </label>
                                <!--end::Option-->
                            @endforeach


                            <!--begin:Option-->
                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                <!--begin:Label-->
                                <span class="d-flex align-items-center me-2">
                                    <!--begin::Icon-->
                                    <span class="symbol symbol-50px me-6">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-gray-600"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="currentColor"/>
                                                <path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <!--end::Icon-->
                                    <!--begin::Description-->
                                    <span class="d-flex flex-column">
                                        <span class="fw-bold text-gray-800 text-hover-primary fs-5">Escagot</span>
                                        <span class="fs-6 fw-semibold text-muted">Les escagot sont disponible en grand nombre</span>
                                    </span>
                                    <!--end:Description-->
                                </span>
                                <!--end:Label-->
                                <!--begin:Input-->
                                <span class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input" type="radio"  name="account_plannn" value="2"/>
                                </span>
                                <!--end:Input-->
                            </label>
                            <!--end::Option-->
                            <!--begin:Option-->
                            <label class="d-flex flex-stack mb-0 cursor-pointer">
                                <!--begin:Label-->
                                <span class="d-flex align-items-center me-2">
                                    <!--begin::Icon-->
                                    <span class="symbol symbol-50px me-6">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-gray-600"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 10.9128V3.01281C13 2.41281 13.5 1.91281 14.1 2.01281C16.1 2.21281 17.9 3.11284 19.3 4.61284C20.7 6.01284 21.6 7.91285 21.9 9.81285C22 10.4129 21.5 10.9128 20.9 10.9128H13Z" fill="currentColor"/>
                                                <path opacity="0.3" d="M13 12.9128V20.8129C13 21.4129 13.5 21.9129 14.1 21.8129C16.1 21.6129 17.9 20.7128 19.3 19.2128C20.7 17.8128 21.6 15.9128 21.9 14.0128C22 13.4128 21.5 12.9128 20.9 12.9128H13Z" fill="currentColor"/>
                                                <path opacity="0.3" d="M11 19.8129C11 20.4129 10.5 20.9129 9.89999 20.8129C5.49999 20.2129 2 16.5128 2 11.9128C2 7.31283 5.39999 3.51281 9.89999 3.01281C10.5 2.91281 11 3.41281 11 4.01281V19.8129Z" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <!--end::Icon-->
                                    <!--begin::Description-->
                                    <span class="d-flex flex-column">
                                        <span class="fw-bold text-gray-800 text-hover-primary fs-5">Mouton</span>
                                        <span class="fs-6 fw-semibold text-muted">Les moutons sont de bon invetissement</span>
                                    </span>
                                    <!--end:Description-->
                                </span>
                                <!--end:Label-->
                                <!--begin:Input-->
                                <span class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input" type="radio" name="account_plann" value="3"/>
                                </span>
                                <!--end:Input-->
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Options-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Step 2-->
            <!--begin::Step 3-->
            <div data-kt-stepper-element="content">
                <!--begin::Wrapper-->
                <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-12">
                        <!--begin::Title-->
                        <h2 class="fw-bold text-dark">Informations</h2>
                        <!--end::Title-->

                        <!--begin::Notice-->
                        <div class="text-muted fw-semibold fs-6">
                            Si vous avez besoin d'aide merci d nous cotacter
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label required">Nombre</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input id="nombre" name="nombre" class="form-control form-control-lg form-control-solid" value="0"/>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label required">Age</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input id="age" name="age" class="form-control form-control-lg form-control-solid" value="0"/>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label required">Race</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input id="race" name="race" class="form-control form-control-lg form-control-solid" value="Noir"/>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label required">Pelage</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input name="pelage" class="form-control form-control-lg form-control-solid" value="Plumé"/>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label required">Reproduction</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input name="reproduction" class="form-control form-control-lg form-control-solid" value="Femelle"/>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--end::Label-->
                        <label class="form-label">Note</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <textarea name="note" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Wrapper-->

            </div>
            <!--end::Step 3-->
            <!--begin::Step 4-->
            <div data-kt-stepper-element="content">
            <!--begin::Wrapper-->
                <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-15">
                        <!--begin::Title-->
                        <h2 class="fw-bold text-dark">Détail de votre invetissement</h2>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Domaine</span>
                        </label>
                        <!--end::Label-->

                        <input id="domaine_show" disabled type="text" class="form-control form-control-solid"  value=""/>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Espèce</span>
                        </label>
                        <!--end::Label-->

                        <input id="espce_show"  disabled type="text" class="form-control form-control-solid" placeholder="" value=""/>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                Nombre
                            </label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input id="nombre_show" disabled type="text" class="form-control form-control-solid"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input wrapper-->
                        </div>
                        <!--end::Col-->

                         <!--begin::Col-->
                         <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                Age
                            </label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input id="age_show" disabled type="text" class="form-control form-control-solid" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input wrapper-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                Race
                            </label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input id="race_show" disabled type="text" class="form-control form-control-solid"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input wrapper-->
                        </div>
                        <!--end::Col-->

                         <!--begin::Col-->
                         <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                Pelage
                            </label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input id="pelage_show" disabled type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input wrapper-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                     <!--begin::Input group-->
                     <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                Reproduction
                            </label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input id="reproduction_show" disabled type="text" class="form-control form-control-solid"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input wrapper-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-10">
                      <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                <span class="required">Note</span>
                            </label>
                            <!--end::Label-->

                            <input id="note_show"  disabled type="text" class="form-control form-control-solid" placeholder="" value=""/>
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Input group-->

                </div>
            </div>
            <!--end::Step 4-->
            <!--begin::Actions-->
            <div class="d-flex flex-stack pt-10">
                <!--begin::Wrapper-->
                <div class="mr-2">
                    <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                        <span class="svg-icon svg-icon-4 me-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor"/>
                            <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        Retour
                    </button>
                </div>
                <!--end::Wrapper-->
                <!--begin::Wrapper-->
                <div>
                    <button type="submit" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
                        <span class="indicator-label">
                            Sauvegarder
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-3 ms-2 me-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"/>
                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"/>
                            </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="indicator-progress">
                            Svp patientez... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>

                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                        Suivant
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                        <span class="svg-icon svg-icon-4 ms-1 me-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"/>
                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>
<!--end::Stepper-->

@endsection
@section('js')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{asset('/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{asset('assets/js/custom/utilities/modals/create-account.js')}}"></script>
    <script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
    <script src="{{asset('assets/js/custom/widgets.js')}}"></script>
    <script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
    <script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
    <!--end::Custom Javascript-->

    <script>
        $("#age").keyup(function(){
            $('#age_show').val( $("#age").val())
        })

        $("#nombre").keyup(function(){
            $('#nombre_show').val( $("#nombre").val())
        })

        $("#domaine").keyup(function(){
            $('#domaine_show').val( $("#age").val())
        })
        $("#espece").keyup(function(){
            $('#espece_show').val( $("#espece").val())
        })
        $("#note").keyup(function(){
            $('#note_show').val( $("#note").val())
        })
        $("#pelage").keyup(function(){
            $('#pelage_show').val( $("#pelage").val())
        })
        $("#reproduction").keyup(function(){
            $('#reproduction_show').val( $("#reproduction").val())
        })
        $("#race").on("keyup change",function(e){

            $('#race_show').val( $("#race").val())
        })
    </script>
@endsection

@section('cs')
@endsection
