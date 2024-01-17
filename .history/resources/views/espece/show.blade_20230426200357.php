@extends('welcome')

@section('css')
@endsection

@section('content')
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-20 pb-lg-0">


                <!--begin::Block-->
    <div class="d-flex align-items-center border-1 border-dashed card-rounded p-5 p-lg-10 mb-14">
        <!--begin::Section-->
        <div class="text-center flex-shrink-0 me-7 me-lg-13">
            <!--begin::Avatar-->
            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                <img src="{{asset($espece->image)}}" class="" alt=""/>
            </div>
            <!--end::Avatar-->

            <!--begin::Info-->

            <!--end::Info-->
        </div>
        <!--end::Section-->

        <!--begin::Text-->
        <div class="mb-0 fs-6">
            <h4>{{$espece->libelle}}</h4>
            <div class="text-muted fw-semibold lh-lg mb-2">
                <h5>Description</h5>
                <p id="guidee">{!! $espece->guide !!} </p>
            </div>


        </div>
        <!--end::Text-->
    </div>
    <!--end::Block-->
                <div class="card-text" id="quill_hide ">

                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{asset('assets/js/custom/apps/ecommerce/catalog/save-product.js')}} "></script>
    <!--end::Custom Javascript-->
    <script>
        quill.clipboard.dangerouslyPasteHTML(0, 'Hello world!<br>This is a test paragraph');

    </script>
@endsection


