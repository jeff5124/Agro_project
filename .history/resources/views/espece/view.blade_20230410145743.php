@extends('welcome')

@section('css')
@endsection

@section('content')
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-20 pb-lg-0">
            <div class="mb-17">
                <div class="fs-5 fw-semibold text-gray-600">
                    {{$espece->guide}}
                </div>
            </div>
            <div class="mb-17">
                <div class="fs-5 fw-semibold text-gray-600">
                    {{$espece->guide}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection


