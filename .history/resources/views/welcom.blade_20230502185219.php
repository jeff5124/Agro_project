@extends('welcome')

@section('css')
@endsection
  <!--begin::Col-->
  <div class="col-xxl-4">

    <!--begin::Slider Widget 3-->
    <div id="kt_sliders_widget_3_slider" class="card card-flush carousel slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
        <!--begin::Header-->
        <div class="card-header pt-5 mb-5">
            <!--begin::Title-->
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-dark">Academic Performance</span>
                <span class="text-gray-400 mt-1 fw-semibold fs-7">Avg. 72% completed lessons</span>
            </h3>
            <!--end::Title-->

            <!--begin::Toolbar-->
            <div class="card-toolbar">
                <div class="d-flex justify-content-end">
                    <a href="#kt_sliders_widget_3_slider" class="carousel-control-prev position-relative me-5 active" role="button" data-bs-slide="prev">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen058.svg-->
    <span class="svg-icon svg-icon-2x svg-icon-gray-400"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
    <path d="M12.0657 12.5657L14.463 14.963C14.7733 15.2733 14.8151 15.7619 14.5621 16.1204C14.2384 16.5789 13.5789 16.6334 13.1844 16.2342L9.69464 12.7029C9.30968 12.3134 9.30968 11.6866 9.69464 11.2971L13.1844 7.76582C13.5789 7.3666 14.2384 7.42107 14.5621 7.87962C14.8151 8.23809 14.7733 8.72669 14.463 9.03696L12.0657 11.4343C11.7533 11.7467 11.7533 12.2533 12.0657 12.5657Z" fill="currentColor"/>
    </svg>
    </span>
    <!--end::Svg Icon-->                </a>
                    <a href="#kt_sliders_widget_3_slider" class="carousel-control-next position-relative me-1" role="button" data-bs-slide="next">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
    <span class="svg-icon svg-icon-2x svg-icon-gray-400"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"/>
    </svg>
    </span>
    <!--end::Svg Icon-->                </a>
                </div>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body p-0">
            <!--begin::Carousel-->
            <div class="carousel-inner">

                    <!--begin::Item-->
                    <div class="carousel-item active show">
                        <!--begin::Title-->
                        <span class="text-gray-800 fw-bold fs-4 mb-3 px-8">
                            Chemistry                    </span>
                        <!--end::Title-->

                        <!--begin::Statistics-->
                        <div class="d-flex align-items-center w-100 px-8">
                            <!--begin::Number-->
                            <span class="fs-2qx text-gray-800 fw-bold">
                                6                        </span>
                            <!--end::Number-->

                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 mx-3 bg-light-primary">
                                <div class="progress-bar bg-primary" role="progressbar"
                                    style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <!--end::Progress-->

                            <!--begin::Value-->
                            <span class="text-gray-400 fw-bold fs-4">
                                62%
                            </span>
                            <!--end::Value-->
                        </div>
                        <!--end::Statistics-->

                        <!--begin::Chart-->
                        <div id="kt_sliders_widget_3_chart_1" class="min-h-auto ps-4 pe-6" style="height: 330px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="carousel-item ">
                        <!--begin::Title-->
                        <span class="text-gray-800 fw-bold fs-4 mb-3 px-8">
                            Mathematics                    </span>
                        <!--end::Title-->

                        <!--begin::Statistics-->
                        <div class="d-flex align-items-center w-100 px-8">
                            <!--begin::Number-->
                            <span class="fs-2qx text-gray-800 fw-bold">
                                4                        </span>
                            <!--end::Number-->

                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 mx-3 bg-light-danger">
                                <div class="progress-bar bg-danger" role="progressbar"
                                    style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <!--end::Progress-->

                            <!--begin::Value-->
                            <span class="text-gray-400 fw-bold fs-4">
                                73%
                            </span>
                            <!--end::Value-->
                        </div>
                        <!--end::Statistics-->

                        <!--begin::Chart-->
                        <div id="kt_sliders_widget_3_chart_2" class="min-h-auto ps-4 pe-6" style="height: 330px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Item-->

            </div>
            <!--end::Carousel-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Slider Widget 3-->
        </div>
        <!--end::Col-->  
@section('content')

@endsection
@section('js')
@endsection


