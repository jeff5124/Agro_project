@extends('welcome')

@section('css')
@endsection

@section('content')
<!--begin::Card-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Card body-->
    <div class="card-body pt-15">
        <!--begin::Summary-->
        <div class="d-flex flex-center flex-column mb-5">
            <!--begin::Avatar-->
            <div class="symbol symbol-100px symbol-circle mb-7">
                <img src="../../assets/media/avatars/300-1.jpg" alt="image" />
            </div>
            <!--end::Avatar-->

            <!--begin::Name-->
            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">
                Max Smith            </a>
            <!--end::Name-->

            <!--begin::Position-->
            <div class="fs-5 fw-semibold text-muted mb-6">
                Software Enginer            </div>
            <!--end::Position-->

            <!--begin::Info-->
            <div class="d-flex flex-wrap flex-center">
                <!--begin::Stats-->
                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                    <div class="fs-4 fw-bold text-gray-700">
                        <span class="w-75px">6,900</span>
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
<span class="svg-icon svg-icon-3 svg-icon-success"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"/>
<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"/>
</svg>
</span>
<!--end::Svg Icon-->                    </div>
                    <div class="fw-semibold text-muted">Earnings</div>
                </div>
                <!--end::Stats-->

                <!--begin::Stats-->
                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                    <div class="fs-4 fw-bold text-gray-700">
                        <span class="w-50px">130</span>
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
<span class="svg-icon svg-icon-3 svg-icon-danger"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"/>
<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"/>
</svg>
</span>
<!--end::Svg Icon-->                    </div>
                    <div class="fw-semibold text-muted">Tasks</div>
                </div>
                <!--end::Stats-->

                <!--begin::Stats-->
                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                    <div class="fs-4 fw-bold text-gray-700">
                        <span class="w-50px">500</span>
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
<span class="svg-icon svg-icon-3 svg-icon-success"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"/>
<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"/>
</svg>
</span>
<!--end::Svg Icon-->                    </div>
                    <div class="fw-semibold text-muted">Hours</div>
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Info-->
        </div>
        <!--end::Summary-->

        <!--begin::Details toggle-->
        <div class="d-flex flex-stack fs-4 py-3">
            <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">
                Details
                <span class="ms-2 rotate-180">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
<span class="svg-icon svg-icon-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
</svg>
</span>
<!--end::Svg Icon-->                </span>
            </div>

            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
                <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">
                    Edit
                </a>
            </span>
        </div>
        <!--end::Details toggle-->

        <div class="separator separator-dashed my-3"></div>

        <!--begin::Details content-->
        <div id="kt_customer_view_details" class="collapse show">
            <div class="py-5 fs-6">
                <!--begin::Badge-->
                <div class="badge badge-light-info d-inline">Premium user</div>
                <!--begin::Badge-->

                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5">Account ID</div>
                    <div class="text-gray-600">ID-45453423</div>
                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5">Billing Email</div>
                    <div class="text-gray-600"><a href="#" class="text-gray-600 text-hover-primary">info@keenthemes.com</a></div>
                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5">Billing Address</div>
                    <div class="text-gray-600">101 Collin Street, <br/>Melbourne 3000 VIC<br/>Australia</div>
                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5">Language</div>
                    <div class="text-gray-600">English</div>
                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5">Upcoming Invoice</div>
                    <div class="text-gray-600">54238-8693</div>
                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                    <div class="fw-bold mt-5">Tax ID</div>
                    <div class="text-gray-600">TX-8674</div>
                    <!--begin::Details item-->
                            </div>
        </div>
        <!--end::Details content-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
@endsection
@section('js')
@endsection


