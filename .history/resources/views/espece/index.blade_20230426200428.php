@extends('welcome')

@section("content")

    <div class="card">
        <div class="card-header border-0 pt-6">
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <!--begin::Add user-->
                    <a href="{{Route('espece.create')}}">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"/>
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            Add User
                        </button>
                    </a>
                <!--end::Add user-->
                </div>
            </div>
        </div>
        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                <!--begin::Table head-->
                <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">

                        <th class="min-w-125px">Image</th>
                        <th class="min-w-125px">Nom</th>
                        <th class="min-w-125px">Guide</th>

                        <th class="text-end min-w-100px">Actions</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="text-gray-600 fw-semibold">
                                <!--begin::Table row-->
                    @foreach ($especes as $espece)
                        <tr>
                            <!--begin::User--->
                            <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <div class="symbol-label">
                                        <img src="{{asset($espece->image)}}" alt="Emma Smith" class="w-100" />
                                    </div>
                                </div>
                                <!--end::Avatar-->
                            </td>
                            <!--end::User--->
                            <!--begin::Role--->
                            <td>
                                {{$espece->libelle}}
                            </td>
                            <!--end::Role--->

                            <!--begin::guide--->
                            <td>
                                {!! $espece->guide !!}
                            </td>
                            <!--end::guide--->




                            <!--begin::Action--->
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                     <!--end::Svg Icon-->
                                </a>
                                        <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{route('espece.show', $espece->id)}}" class="menu-link px-3">
                                            Détail
                                        </a>
                                        <a href="{{route('espece.update', $espece->id)}}" class="menu-link px-3">
                                            Modifier
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action--->
                        </tr>
                    @endforeach
                        <!--end::Table row-->
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->




@endsection
@section('js')

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{asset('assets/js/custom/apps/ecommerce/catalog/save-product.js')}}"></script>
    <!--end::Custom Javascript-->

@endsection
