@extends('welcome')

@section('css')
@endsection

@section('content')
<!--begin::Toolbar-->
<div class="d-flex flex-wrap flex-stack my-5">
    <!--begin::Heading-->
    <h2 class="fs-2 fw-semibold my-2">
        Projects
    </h2>
    <!--end::Heading-->

  
</div>
<!--end::Toolbar-->

<!--begin::Row-->
<div class="row g-6 g-xl-9">
    @foreach($projects as $project)
        <!--begin::Col-->
        <div class="col-md-6 col-xl-4">
            <!--begin::Card-->
            <div class="card border-hover-primary ">
                <a href="{{route('project.show',$project->id)}}" >
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-9">
                        <!--begin::Card Title-->
                        <div class="card-title m-0">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px w-50px bg-light">
                                <img src="{{asset($project->domaine->image)}}" alt="image" class="p-3"/>
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::Car Title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">En entente de paiement</span>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end:: Card header-->

                    <!--begin:: Card body-->
                    <div class="card-body p-9">
                        <!--begin::Name-->
                        <div class="fs-3 fw-bold text-dark">
                            {{$project->domaine->libelle}}
                        </div>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                            {{$project->note}}
                        </p>
                        <!--end::Description-->
                        <!--begin::Info-->
                        <div class="d-flex flex-wrap mb-5">
                            <!--begin::Due-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bold">{{$project->created_at}}</div>
                                <div class="fw-semibold text-gray-400">Date de debut</div>
                            </div>
                            <!--end::Due-->

                            <!--begin::Budget-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bold">{{$project->price}} 550000 FCFA</div>
                                <div class="fw-semibold text-gray-400">Cout du projet</div>
                            </div>
                            <!--end::Budget-->
                        </div>
                        <!--end::Info-->

                    </div>
                    <!--end:: Card body-->
                </a>

            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
    @endforeach
    <!--begin::Col-->
    <div class="col-md-6 col-xl-4">
        <!--begin::Card-->
        <a href="project.html" class="card border-hover-primary ">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-9">
                <!--begin::Card Title-->
                <div class="card-title m-0">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px w-50px bg-light">
                        <img src="../../assets/media/svg/brand-logos/disqus.svg" alt="image" class="p-3"/>
                    </div>
                    <!--end::Avatar-->
                </div>
                <!--end::Car Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <span class="badge badge-light fw-bold me-auto px-4 py-3">Pending</span>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end:: Card header-->

            <!--begin:: Card body-->
            <div class="card-body p-9">
                <!--begin::Name-->
                <div class="fs-3 fw-bold text-dark">
                    Leaf CRM        </div>
                <!--end::Name-->

                <!--begin::Description-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                    CRM App application to HR efficiency        </p>
                <!--end::Description-->

                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-5">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">May 10, 2021 </div>
                        <div class="fw-semibold text-gray-400">Due Date</div>
                    </div>
                    <!--end::Due-->

                    <!--begin::Budget-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">$36,400.00</div>
                        <div class="fw-semibold text-gray-400">Budget</div>
                    </div>
                    <!--end::Budget-->
                </div>
                <!--end::Info-->

                <!--begin::Progress-->
                <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 30% completed">
                    <div class="bg-info rounded h-4px" role="progressbar" style="width: 30%" aria-valuenow=" 30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!--end::Progress-->

                            <!--begin::Users-->
                    <div class="symbol-group symbol-hover">
                                            <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                    </div>
                            <!--begin::User-->
                                            <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
                                                            <img alt="Pic" src="../../assets/media/avatars/300-5.jpg" />
                                                    </div>
                            <!--begin::User-->
                                    </div>
                    <!--end::Users-->
                    </div>
            <!--end:: Card body-->
        </a>
        <!--end::Card-->
    </div>
    <!--end::Col-->

</div>
<!--end::Row-->
@endsection
@section('js')
@endsection


