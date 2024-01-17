<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.1.7
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en" >
    <!--begin::Head-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Mar 2023 17:36:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
        <meta charset="utf-8"/>
        <meta name="description" content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo,
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions.
            Grab your copy now and get life-time updates for free.
        "/>
        <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js,
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates,
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button,
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        "/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="
            Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails,
            Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template
        " />
        <meta property="og:url" content="https://keenthemes.com/metronic"/>
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8"/>
        <link rel="shortcut icon" href="../../../assets/media/logos/favicon.ico"/>

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->



                    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                            <link href="../../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                            <link href="../../../assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Global Stylesheets Bundle-->

                    <!--Begin::Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
<!--End::Google Tag Manager -->
            </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="app-blank bgi-size-cover bgi-position-center" >
        <!--begin::Theme mode setup on page load-->
<script>
	var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}
		}

		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}

		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}
</script>
<!--end::Theme mode setup on page load-->
                    <!--Begin::Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--End::Google Tag Manager (noscript) -->

        <!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
<style>
    body {
        background-image: url('../../../assets/media/auth/bg10.jpg');
    }

    [data-bs-theme="dark"] body {
        background-image: url('../../../assets/media/auth/bg10-dark.jpg');
    }
</style>
<!--end::Page bg image-->

<!--begin::Authentication - Sign-up -->
<div class="d-flex flex-column flex-lg-row flex-column-fluid">
    <!--begin::Aside-->
    <div class="d-flex flex-lg-row-fluid">
        <!--begin::Content-->
        <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
            <!--begin::Image-->
            <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="../../../assets/media/auth/agency.png" alt=""/>
            <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="../../../assets/media/auth/agency-dark.png" alt=""/>
            <!--end::Image-->

            <!--begin::Title-->
            <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">
                Fast, Efficient and Productive
            </h1>
            <!--end::Title-->

            <!--begin::Text-->
            <div class="text-gray-600 fs-base text-center fw-semibold">
                In this kind of post, <a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>

                introduces a person they’ve interviewed <br/> and provides some background information about

                <a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>
                and their <br/> work following this is a transcript of the interview.
            </div>
            <!--end::Text-->
        </div>
        <!--end::Content-->
    </div>
    <!--begin::Aside-->

    <!--begin::Body-->
    <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
        <!--begin::Wrapper-->
        <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                <!--begin::Wrapper-->
                <div class="d-flex flex-center flex-column-fluid pb-15 pb-lg-20">

<!--begin::Form-->
<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="/metronic8/demo1/../demo1/authentication/layouts/overlay/sign-in.html" action="#">
    <!--begin::Heading-->
    <div class="text-center mb-11">
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-3">
            S'inscrire
        </h1>
        <!--end::Title-->
    </div>
    <!--begin::Heading-->

    <!--begin::Login options-->

    <!--end::Login options-->


    <!--begin::Input group--->
    <div class="fv-row mb-8">
        <!--begin::Email-->
        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent"/>
        <!--end::Email-->
    </div>

    <!--begin::Input group-->
    <div class="fv-row mb-8" data-kt-password-meter="true">
        <!--begin::Wrapper-->
        <div class="mb-1">
            <!--begin::Input wrapper-->
            <div class="position-relative mb-3">
                <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" autocomplete="off"/>

                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                    <i class="bi bi-eye-slash fs-2"></i>
                    <i class="bi bi-eye fs-2 d-none"></i>
                </span>
            </div>
            <!--end::Input wrapper-->

            <!--begin::Meter-->
            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
            </div>
            <!--end::Meter-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Hint-->
        <div class="text-muted">
            Use 8 or more characters with a mix of letters, numbers & symbols.
        </div>
        <!--end::Hint-->
    </div>
    <!--end::Input group--->

    <!--end::Input group--->
    <div class="fv-row mb-8">
        <!--begin::Repeat Password-->
        <input type="text" placeholder="Repeat Password" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent"/>
        <!--end::Repeat Password-->
    </div>
    <!--end::Input group--->

    <!--begin::Accept-->
    <div class="fv-row mb-8">
        <label class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toc" value="1"/>
            <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
                I Accept the <a href="#" class="ms-1 link-primary">Terms</a>
            </span>
        </label>
    </div>
    <!--end::Accept-->

    <!--begin::Submit button-->
    <div class="d-grid mb-10">
        <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">

<!--begin::Indicator label-->
<span class="indicator-label">
    S'inscrire'</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->        </button>
    </div>
    <!--end::Submit button-->

    <!--begin::Sign up-->
    <div class="text-gray-500 text-center fw-semibold fs-6">
        Vous avz déjà un compte?

        <a href="sign-in.html" class="link-primary fw-semibold">
            Se connecter
        </a>
    </div>
    <!--end::Sign up-->
</form>
<!--end::Form-->

                </div>
                <!--end::Wrapper-->

                <!--begin::Footer-->
                <div class="w-lg-500px d-flex flex-stack">
                 
                    <!--begin::Links-->
                    <div class="d-flex fw-semibold text-primary fs-base gap-5">
                        <a href="../../../pages/team.html" target="_blank">Terms</a>

                        <a href="../../../pages/pricing/column.html" target="_blank">Plans</a>

                        <a href="../../../pages/contact.html" target="_blank">Contact Us</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Body-->
</div>
<!--end::Authentication - Sign-up--></div>
<!--end::Root-->

        <!--begin::Javascript-->
        <script>
            var hostUrl = "../../../assets/index.html";        </script>

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="../../../assets/plugins/global/plugins.bundle.js"></script>
                            <script src="../../../assets/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->


                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="../../../assets/js/custom/authentication/sign-up/general.js"></script>
                        <!--end::Custom Javascript-->
                <!--end::Javascript-->

            </body>
    <!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Mar 2023 17:36:31 GMT -->
</html>
