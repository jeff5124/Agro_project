@extends('welcome')

@section('css')
@endsection

@section('content')
<!--begin::General options-->
<div class="card card-flush py-4">
    <!--begin::Card header-->
    <div class="card-header">
        <div class="card-title">
            <h2>General</h2>
        </div>
    </div>
    <!--end::Card header-->
    <form action="{{Route('espece.save')}}" method="POST" enctype="multipart/form-data">
     @csrf
    <div class="card-body pt-0">
        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <!--begin::Label-->
            <label class="required form-label"> Nom </label>
            <!--end::Label-->

            <!--begin::Input-->
                        <input type="text" name="libelle" class="form-control mb-2" placeholder="Nom de l'espèce" value="" />
            <!--end::Input-->

            <!--begin::Description-->
            <div class="text-muted fs-7">Un nom de produit est requis et recommandé pour être unique.</div>
            <!--end::Description-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div>
            <!--begin::Label-->
            <label class="form-label">Guide</label>
            <!--end::Label-->

            <!--begin::Editor-->
            <div id="kt_ecommerce_add_product_description"  name="guide" class="min-h-200px mb-2"></div>
            <!--end::Editor-->
            <textarea name="guide" id="" cols="30" rows="10"></textarea>

        </div>
        <!--end::Input group-->
        <div>
             <!--begin::Label-->
             <label class="form-label">Image</label>
            <!--end::Label-->
            <input type="file" name="image">
            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">
                                Sauvegerder
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
            <!--end::Input group-->
    </div>
    </form>
    <!--begin::Card body-->

    <!--end::Card header-->
</div>
<!--end::General options-->
@endsection
@section('js')

                    <!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset('assets/js/custom/apps/ecommerce/catalog/save-product.js')}}"></script>

                        <!--end::Custom Javascript-->
@endsection


