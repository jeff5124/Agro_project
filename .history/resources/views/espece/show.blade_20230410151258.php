@extends('welcome')

@section('css')
@endsection

@section('content')
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-20 pb-lg-0">
            <div class="mb-17">
                <div class="overlay mt-8">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px"
                        style="background-image:url('../../assets/media/stock/1600x800/img-1.jpg')">
                    </div>
                </div>
            </div>
            <div class="mb-17">
                <div id="quill" class="fs-5 fw-semibold text-gray-600">
                    {{$espece->guide}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{asset('assets/js/custom/apps/ecommerce/catalog/save-product.js')}}"></script>
    <!--end::Custom Javascript-->
    <script>
        quill.clipboard.dangerouslyPasteHTML(0, 'Hello world!<br>This is a test paragraph');

    </script>
@endsection


