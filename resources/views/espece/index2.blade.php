@extends('welcome')

@section("content")

    <div class="card">
        <div class="card-header border-0 pt-6">
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                
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
                        <th class="min-w-100px">Prix</th>

                        
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
                            @if(strlen($espece->guide) > 999999999999)
                            tEXTE TROP LONG ? APUYER D2AIL POUR VOIR
                            @else
                            {!! $espece->guide !!}
                            @endif
{{--                                 {{substr( {!! $espece->guide !!} ,0,50)}}
 --}}                            </td>
                            <!--end::guide--->
                            
                            <!--begin::prix--->
                            <td>
                                {{$espece->price}} XOF
                            </td>
                            <!--end::prix--->



                          
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
