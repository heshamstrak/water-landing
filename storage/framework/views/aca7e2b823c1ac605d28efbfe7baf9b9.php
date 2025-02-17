<!DOCTYPE html>
<html lang="en">
    <!--begin::Head-->
    <head>
        <base href="../../../../" />
        <meta charset="utf-8" />
        <title>NWater | Sign In</title>
        <meta name="description" content="Singin page example" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->

        <!--begin::Page Custom Styles(used by this page)-->
        <link href="<?php echo e(asset('admin_assets')); ?>/css/pages/login/login-3.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <!--end::Page Custom Styles-->

        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="<?php echo e(asset('admin_assets')); ?>/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin_assets')); ?>/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin_assets')); ?>/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->

        <link href="<?php echo e(asset('admin_assets')); ?>/css/themes/layout/header/base/light.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin_assets')); ?>/css/themes/layout/header/menu/light.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin_assets')); ?>/css/themes/layout/brand/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin_assets')); ?>/css/themes/layout/aside/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <!--end::Layout Themes-->

        <link rel="shortcut icon" href="<?php echo e(asset('admin_assets')); ?>/media/logos/favicon.ico" />
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Login-->
            <div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid">
                <!--begin::Aside-->
                <div class="login-aside d-flex flex-column flex-row-auto">
                    <!--begin::Aside Top-->
                    <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                        <!--begin::Aside header-->
                        <a href="#" class="login-logo text-center pt-lg-25 pb-10">
                            <img src="<?php echo e(Storage::url('public/uploads/settings/'.setting('logo_image'))); ?>" class="max-h-100px" alt=""  style="width: 400px"/>
                        </a>
                        <!--end::Aside header-->

                    </div>
                    <!--end::Aside Top-->

                    <!--begin::Aside Bottom-->
                    <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center" style="background-position-y: calc(100% + 5rem); background-image: url(<?php echo e(asset('admin_assets')); ?>/media/svg/illustrations/login-visual-5.svg);"></div>
                    <!--end::Aside Bottom-->
                </div>
                <!--begin::Aside-->

                <!--begin::Content-->
                <div class="login-content flex-row-fluid d-flex flex-column p-10">

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-row-fluid flex-center">
                        <!--begin::Signin-->
                        <div class="login-form">
                            <!--begin::Form-->
                            <form class="form" action="<?php echo e(route('login')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <!--begin::Title-->
                                <div class="pb-5 pb-lg-15">
                                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h3>
                                </div>
                                <!--begin::Title-->

                                <!--begin::Form group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Your Email</label>
                                    <input class="form-control h-auto py-7 px-6 rounded-lg border-0" type="text" <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="email" required autocomplete="off" value="<?php echo e(old('email')); ?>"/>
                                </div>
                                <!--end::Form group-->

                                <!--begin::Form group-->
                                <div class="form-group">
                                    <div class="d-flex justify-content-between mt-n5">
                                        <label class="font-size-h6 font-weight-bolder text-dark pt-5">Your Paassword</label>
                                    </div>
                                    <input class="form-control h-auto py-7 px-6 rounded-lg border-0" type="password" <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="password" required autocomplete="off" />
                                </div>
                                <!--end::Form group-->

                                <!--begin::Action-->
                                <div class="pb-lg-0 pb-5">
                                    <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
                                </div>
                                <!--end::Action-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Signin-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Login-->
        </div>
        <!--end::Main-->

        <script>
            var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
        </script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
                breakpoints: {
                    sm: 576,
                    md: 768,
                    lg: 992,
                    xl: 1200,
                    xxl: 1400,
                },
                colors: {
                    theme: {
                        base: {
                            white: "#ffffff",
                            primary: "#3699FF",
                            secondary: "#E5EAEE",
                            success: "#1BC5BD",
                            info: "#8950FC",
                            warning: "#FFA800",
                            danger: "#F64E60",
                            light: "#E4E6EF",
                            dark: "#181C32",
                        },
                        light: {
                            white: "#ffffff",
                            primary: "#E1F0FF",
                            secondary: "#EBEDF3",
                            success: "#C9F7F5",
                            info: "#EEE5FF",
                            warning: "#FFF4DE",
                            danger: "#FFE2E5",
                            light: "#F3F6F9",
                            dark: "#D6D6E0",
                        },
                        inverse: {
                            white: "#ffffff",
                            primary: "#ffffff",
                            secondary: "#3F4254",
                            success: "#ffffff",
                            info: "#ffffff",
                            warning: "#ffffff",
                            danger: "#ffffff",
                            light: "#464E5F",
                            dark: "#ffffff",
                        },
                    },
                    gray: {
                        "gray-100": "#F3F6F9",
                        "gray-200": "#EBEDF3",
                        "gray-300": "#E4E6EF",
                        "gray-400": "#D1D3E0",
                        "gray-500": "#B5B5C3",
                        "gray-600": "#7E8299",
                        "gray-700": "#5E6278",
                        "gray-800": "#3F4254",
                        "gray-900": "#181C32",
                    },
                },
                "font-family": "Poppins",
            };
        </script>
        <!--end::Global Config-->

        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src="<?php echo e(asset('admin_assets')); ?>/plugins/global/plugins.bundle.js?v=7.0.6"></script>
        <script src="<?php echo e(asset('admin_assets')); ?>/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
        <script src="<?php echo e(asset('admin_assets')); ?>/js/scripts.bundle.js?v=7.0.6"></script>
        <!--end::Global Theme Bundle-->

        <!--begin::Page Scripts(used by this page)-->
        <script src="<?php echo e(asset('admin_assets')); ?>/js/pages/custom/login/login-3.js?v=7.0.6"></script>
        <!--end::Page Scripts-->
    </body>
    <!--end::Body-->
</html>
<?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/auth/login.blade.php ENDPATH**/ ?>