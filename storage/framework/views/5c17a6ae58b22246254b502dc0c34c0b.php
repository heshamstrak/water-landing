<!DOCTYPE html>
<!--
   Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
   Author: KeenThemes
   Website: http://www.keenthemes.com/
   Contact: support@keenthemes.com
   Follow: www.twitter.com/keenthemes
   Dribbble: www.dribbble.com/keenthemes
   Like: www.facebook.com/keenthemes
   Purchase: https://1.envato.market/EA4JP
   Renew Support: https://1.envato.market/EA4JP
   License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
   -->
<html lang="en" >
   <!--begin::Head-->
   <head>
      <base href="">
      <meta charset="utf-8"/>
      <title><?php echo $__env->yieldContent('title', 'Home | Dashboard'); ?></title>
      <meta name="description" content="Updates and statistics"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <!--begin::Fonts-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
      <!--end::Fonts-->
      <!--begin::Page Vendors Styles(used by this page)-->
      <link href="<?php echo e(asset('admin_assets')); ?>/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
      <!--end::Page Vendors Styles-->
      <!--begin::Global Theme Styles(used by all pages)-->
      <link href="<?php echo e(asset('admin_assets')); ?>/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
      <link href="<?php echo e(asset('admin_assets')); ?>/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
      <link href="<?php echo e(asset('admin_assets')); ?>/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
      <!--end::Global Theme Styles-->
      <!--begin::Layout Themes(used by all pages)-->
      <link href="<?php echo e(asset('admin_assets')); ?>/css/themes/layout/header/base/light.css?v=7.0.6" rel="stylesheet" type="text/css"/>
      <link href="<?php echo e(asset('admin_assets')); ?>/css/themes/layout/header/menu/light.css?v=7.0.6" rel="stylesheet" type="text/css"/>
      <link href="<?php echo e(asset('admin_assets')); ?>/css/themes/layout/brand/dark.css?v=7.0.6" rel="stylesheet" type="text/css"/>
      <link href="<?php echo e(asset('admin_assets')); ?>/css/themes/layout/aside/dark.css?v=7.0.6" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="<?php echo e(asset('admin_assets/plugins/noty/noty.css')); ?>">
      <script src="<?php echo e(asset('admin_assets/plugins/noty/noty.min.js')); ?>"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!--end::Layout Themes-->
      <link href="<?php echo e(asset('admin_assets')); ?>/css/pages/wizard/wizard-2.css" rel="stylesheet" type="text/css"/>
      <link rel="shortcut icon" href="<?php echo e(asset('admin_assets')); ?>/media/logos/favicon.ico"/>
      <?php echo $__env->yieldPushContent('css'); ?>
   </head>
   <!--end::Head-->
   <!--begin::Body-->
   <body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >
      <!--begin::Main-->
      <!--begin::Header Mobile-->
        <?php echo $__env->make('layouts.admin._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!--end::Header Mobile-->
      <div class="d-flex flex-column flex-root">
         <!--begin::Page-->
         <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto"  id="kt_aside">
               <!--begin::Brand-->
               <div class="brand flex-column-auto " id="kt_brand">
                  <!--begin::Logo-->
                  <a href="<?php echo e(route('admin.home')); ?>" class="brand-logo">
                  <img alt="Logo" src="<?php echo e(Storage::url('public/uploads/settings/'.setting('logo_image'))); ?>" style="width:188px"/>
                  </a>
                  <!--end::Logo-->
                  <!--begin::Toggle-->
                  <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                     <span class="svg-icon svg-icon svg-icon-xl">
                        <!--begin::Svg Icon | path:<?php echo e(asset('admin_assets')); ?>/media/svg/icons/Navigation/Angle-double-left.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <polygon points="0 0 24 0 24 24 0 24"/>
                              <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                              <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                           </g>
                        </svg>
                        <!--end::Svg Icon-->
                     </span>
                  </button>
                  <!--end::Toolbar-->
               </div>
               <!--end::Brand-->
               <!--begin::Aside Menu-->
               <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                  <!--begin::Menu Container-->
                  <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                     <!--begin::Menu Nav-->
                     <ul class="menu-nav ">
                        <?php echo $__env->make('layouts.admin._aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     </ul>
                     <!--end::Menu Nav-->
                  </div>
                  <!--end::Menu Container-->
               </div>
               <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
               <!--begin::Header-->
               <div id="kt_header" class="header  header-fixed " >
                  <!--begin::Container-->
                  <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
                     <!--begin::Header Menu Wrapper-->
                     <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <!--begin::Header Menu-->
                        <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default " >
                           <!--begin::Header Nav-->
                           <ul class="menu-nav ">
                              <li class="menu-item  menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active"  data-menu-toggle="click" aria-haspopup="true">

                              </li>
                           </ul>
                           <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                     </div>
                     <!--end::Header Menu Wrapper-->
                     <!--begin::Topbar-->
                     <div class="topbar">

                        <!--begin::User-->
                        <div class="topbar-item">
                           <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                              <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                              <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?php echo e(auth()->user()->name); ?></span>
                              <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                              <span class="symbol-label font-size-h5 font-weight-bold"><?php echo e(substr(auth()->user()->name, 0, 1)); ?></span>
                              </span>
                           </div>
                        </div>
                        <!--end::User-->
                     </div>
                     <!--end::Topbar-->
                  </div>
                  <!--end::Container-->
               </div>
               <!--end::Header-->
               <!--begin::Content-->
               <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                  <!--begin::Subheader-->
                  <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
                     <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center flex-wrap mr-2">
                           <!--begin::Page Title-->
                           <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                              Dashboard                            
                           </h5>
                           <!--end::Page Title-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center">
                           <!--begin::Daterange-->
                           <a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
                           <span class="text-muted font-size-base font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today</span>
                           <span class="text-primary font-size-base font-weight-bolder" id="kt_dashboard_daterangepicker_date">Aug 16</span>
                           </a>
                           <!--end::Daterange-->

                        </div>
                        <!--end::Toolbar-->
                     </div>
                  </div>
                  <!--end::Subheader-->
                  <!-- begin::Entry-->
                  <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container-xxl">
                        <?php echo $__env->make('admin.partials._session', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                    <!--end::Container-->
                 </div>
                  <!--end::Entry -->
               </div>
               <!--end::Content-->
            </div>
            <!--end::Wrapper-->
         </div>
         <!--end::Page-->
      </div>
      <!--end::Main-->

      <!-- begin::User Panel-->
      <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
         <!--begin::Header-->
         <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">
               User Profile
            </h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
               <i class="ki ki-close icon-xs text-muted"></i>
            </a>
         </div>
         <!--end::Header-->

         <!--begin::Content-->
         <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Header-->
            <div class="d-flex align-items-center mt-5">
               <div class="symbol symbol-100 mr-5">
                     <div class="symbol-label" style="background-image: url('<?php echo e(asset('admin_assets')); ?>/media/users/300_21.jpg');"></div>
                     <i class="symbol-badge bg-success"></i>
               </div>
               <div class="d-flex flex-column">
                     <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary"><?php echo e(auth()->user()->name); ?></a>
                     <div class="text-muted mt-1">
                        <?php echo e(auth()->user()->type); ?>

                     </div>
                     <div class="navi mt-2">
                        <a href="#" class="navi-item">
                           <span class="navi-link p-0 pb-2">
                                 <span class="navi-icon mr-1">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                       <!--begin::Svg Icon | path:<?php echo e(asset('admin_assets')); ?>/media/svg/icons/Communication/Mail-notification.svg-->
                                       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                   d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                   fill="#000000"
                                                />
                                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                             </g>
                                       </svg>
                                       <!--end::Svg Icon-->
                                    </span>
                                 </span>
                                 <span class="navi-text text-muted text-hover-primary"><?php echo e(auth()->user()->email); ?></span>
                           </span>
                        </a>

                        <a class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(__('Sign Out')); ?></a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>

                     </div>
               </div>
            </div>
            <!--end::Header-->

            <!--begin::Separator-->
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <!--end::Separator-->

            <!--begin::Nav-->
            <div class="navi navi-spacer-x-0 p-0">

            </div>
            <!--end::Nav-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-7"></div>
            <!--end::Separator-->
         </div>
         <!--end::Content-->
      </div>
      <!-- end::User Panel-->

      <?php echo $__env->make('layouts.admin._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
      <!--begin::Global Theme Bundle(used by all pages)-->
      <script src="<?php echo e(asset('admin_assets')); ?>/plugins/global/plugins.bundle.js?v=7.0.6"></script>
      <script src="<?php echo e(asset('admin_assets')); ?>/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
      <script src="<?php echo e(asset('admin_assets')); ?>/js/scripts.bundle.js?v=7.0.6"></script>
      <!--end::Global Theme Bundle-->
      <!--begin::Page Vendors(used by this page)-->
      <script src="<?php echo e(asset('admin_assets')); ?>/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6"></script>
      <!--end::Page Vendors-->
      <!--begin::Page Scripts(used by this page)-->
      <script src="<?php echo e(asset('admin_assets')); ?>/js/pages/widgets.js?v=7.0.6"></script>
      <script src="<?php echo e(asset('admin_assets')); ?>/js/custom/index.js"></script>
      <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="<?php echo e(asset('admin_assets/uploadMultiImages/image-uploader.min.css')); ?>">
      <script src="<?php echo e(asset('admin_assets/uploadMultiImages/image-uploader.min.js')); ?>"></script>
      <script src="<?php echo e(asset('admin_assets/ckeditor/ckeditor.js')); ?>"></script>
      <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/icofont.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script>
         $(function () {

            $(document).on('change', '.all-roles', function () {

               $(this).parents('tr').find('input[type="checkbox"]').prop('checked', this.checked);

            });

            $(document).on('change', '.role', function () {

               if (!this.checked) {
                  $(this).parents('tr').find('.all-roles').prop('checked', this.checked);
               }

            });

         });//end of document ready
         $(document).ready(function () {
         
            //delete
            $(document).on('click', '.delete, #bulk-delete', function (e) {
            
               var that = $(this)
            
               e.preventDefault();
            
               var n = new Noty({
                     text: "Confirm Delete",
                     type: "alert",
                     killer: true,
                     buttons: [
                        Noty.button("Yes", 'btn btn-success mr-2', function () {
                           let url = that.closest('form').attr('action');
                           let data = new FormData(that.closest('form').get(0));
            
                           let loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i>';
                           let originalText = that.html();
                           that.html(loadingText);
            
                           n.close();
            
                           $.ajax({
                                 url: url,
                                 data: data,
                                 method: 'post',
                                 processData: false,
                                 contentType: false,
                                 cache: false,
                                 success: function (response) {
            
                                    $("#record__select-all").prop("checked", false);
            
                                    $('.datatable').DataTable().ajax.reload();
            
                                    new Noty({
                                       layout: 'topRight',
                                       type: 'alert',
                                       text: response,
                                       killer: true,
                                       timeout: 2000,
                                    }).show();
            
                                    that.html(originalText);
                                 },
            
                           });//end of ajax call
            
                        }),
            
                        Noty.button("No", 'btn btn-danger mr-2', function () {
                           n.close();
                        })
                     ]
               });
            
               n.show();
            
            });//end of delete
         
         });//end of document ready
         
         $(document).ready(function(){
            $('.dropify').dropify();
         });
      </script>
      <!--end::Page Scripts-->
      <?php echo $__env->yieldPushContent('js'); ?>
   </body>
   <!--end::Body-->
</html><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/layouts/admin/app.blade.php ENDPATH**/ ?>