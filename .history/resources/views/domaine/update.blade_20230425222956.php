@extends('welcome')

@section('css')
@endsection

@section('content')
            <!--begin::General options-->
            <div class="card card-flush py-4">

                                                <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Modifier Domaine</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
            <div class="card-body pt-0">                        

                    
                    
                             

                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                    <!--begin::Form-->
                                    <form id="kt_modal_add_domaine_form" method="POST" action="{{route('domaine.edit')}}" class="form" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <input hidden  type="text" name="id" value="{{$domaine->id}}">
                                        <!--begin::Scroll-->
                                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_domaine_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_domaine_header" data-kt-scroll-wrappers="#kt_modal_add_domaine_scroll" data-kt-scroll-offset="300px">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="d-block fw-semibold fs-6 mb-5">Image</label>
                                                <!--end::Label-->
                                                <!--begin::Image placeholder-->
                                                <style>
                                                    .image-input-placeholder {
                                                        background-image: url('../../../assets/media/svg/files/blank-image.svg');
                                                    }
                                                    [data-bs-theme="dark"] .image-input-placeholder {
                                                        background-image: url('../../../assets/media/svg/files/blank-image-dark.svg');
                                                    }
                                                </style>
                                                <!--end::Image placeholder-->
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline image-input-placeholder"   data-kt-image-input="true">
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(../../../assets/media/avatars/300-6.jpg);" ></div>
                                                    <!--end::Preview existing avatar-->

                                                    <!--begin::Label-->
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar"  >
                                                        <i class="bi bi-pencil-fill fs-7"></i>

                                                        <!--begin::Inputs-->
                                                        <input type="file" name="image" accept=".png, .jpg, .jpeg"  value="{{$domaine->image}}"  />
                                                        
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Cancel-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar"  >
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Cancel-->
                                                    <!--begin::Remove-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Remove-->
                                                </div>
                                                <!--end::Image input-->
                                                <!--begin::Hint-->
                                                <div class="form-text">Types de fichiers autorisés: png, jpg, jpeg.</div>
                                                <!--end::Hint-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fw-semibold fs-6 mb-2">Libellé</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="text" name="libelle" class="form-control form-control-solid mb-3 mb-lg-0"  value=" {{$domaine->libelle}}" > 
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->



                                        </div>
                                        <!--end::Scroll-->

                                        <!--begin::Actions-->
                                        <div class="text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
                                                Annuler
                                            </button>

                                            <input type="submit" class="btn btn-success" data-kt-users-modal-action="submit" value="Update">
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Modal body-->
            
                
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                </div>
                    <!--end::Modal - Add task-->

            </div>
            <!--end::Card-->




@endsection
