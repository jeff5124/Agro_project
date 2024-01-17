<!DOCTYPE html>
<html lang="en" >
    <!--begin::Head-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('partials/head')
</head>
    <!--end::Head-->
    <!--begin::Body-->
<body  id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"  class="app-default" >
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
        @include('partials/header')
        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">

        <!--begin::Sidebar-->
        @include('partials/sidebar')
        <!--end::Sidebar-->
            <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
		<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Toolbar-->
			<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

				<!--begin::Toolbar container-->
				<div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack ">

				<!--begin::Page title-->
				<div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        @yield('titre')
					</h1>
					<!--end::Title-->
				</div>
			<!--end::Page title-->
				</div>
					<!--end::Toolbar container-->
			</div>
			<!--end::Toolbar-->

			<!--begin::Content-->
			<div id="kt_app_content" class="app-content  flex-column-fluid " >
						<!--begin::Content container-->
						<div id="kt_app_content_container" class="app-container  container-fluid ">
                            @yield('content')

						</div>
						<!--end::Content container-->
			</div>
			<!--end::Content-->
		</div>
	    <!--end::Content wrapper-->
		<!--begin::Footer-->
        @include('partials/footer')
		<!--end::Footer-->
    </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
            </div>
    <!--end::Page-->
</div>
<!--end::App-->
<!--begin::Javascript-->
 <!--begin::Global Javascript Bundle(mandatory for all pages)-->
 <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
 <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>
