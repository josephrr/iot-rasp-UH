<!DOCTYPE html>
<html lang="es" >
   <!--begin::Head-->
   <head>
      <base href="">
      <meta charset="utf-8"/>
      <title>Metronic | Dashboard</title>
      <meta name="description" content="Updates and statistics"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
      <link href="<?=base_url()?>/public/Template/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
      <link href="<?=base_url()?>/public/Template/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
      <link href="<?=base_url()?>/public/Template/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
       <link rel="shortcut icon" href="<?=base_url()?>/public/img/favicon.png"/>
       <?= $this->renderSection('style');  ?>

   </head>
   <!--end::Head-->
   <!--begin::Body-->
   <body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed page-loading"  >
      <!--begin::Main-->
      <!--begin::Header Mobile-->
      <div id="kt_header_mobile" class="header-mobile align-items-center  header-mobile-fixed " >
         <!--begin::Logo-->
         <a href="<?= base_url("proyectos/index") ?>">
         <img alt="Logo" class="w-100px" src="<?=base_url()?>/public/img/logo.png"/>
         </a>
         <!--end::Logo-->
         <!--begin::Toolbar-->
         <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
            <span></span>
            </button>
            <!--end::Aside Mobile Toggle-->
            <!--begin::Header Menu Mobile Toggle-->
            <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
            <span></span>
            </button>
            <!--end::Header Menu Mobile Toggle-->
            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
               <span class="svg-icon svg-icon-xl">
                  <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                     </g>
                  </svg>
                  <!--end::Svg Icon-->
               </span>
            </button>
            <!--end::Topbar Mobile Toggle-->
         </div>
         <!--end::Toolbar-->
      </div>
      <!--end::Header Mobile-->
      <div class="d-flex flex-column flex-root">
         <!--begin::Page-->
         <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto"  id="kt_aside">
               <!--begin::Brand-->
               <div class="brand flex-column-auto " id="kt_brand">
                  <!--begin::Logo-->
                  <a href="<?= base_url("proyectos/index") ?>" class="brand-logo">
                  <img alt="Logo" class="w-150px" src="<?=base_url()?>/public/img/logo.png"/>
                  </a>
                  <!--end::Logo-->
               </div>
               <!--end::Brand-->
               <!--begin::Aside Menu-->
               <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                  <!--begin::Menu Container-->
                  <div
                     id="kt_aside_menu"
                     class="aside-menu my-4 "
                     data-menu-vertical="1"
                     data-menu-scroll="1" data-menu-dropdown-timeout="500">
                     <!--begin::Menu Nav-->
                     <ul class="menu-nav ">
<!--                        <li class="menu-item  menu-item-active" aria-haspopup="true" >-->
<!--                            <a  href="--><?//= base_url('proyectos/index') ?><!--" class="menu-link ">-->
<!--                                <i class="menu-icon flaticon2-architecture-and-city"></i><span class="menu-text">Inicio</span>-->
<!--                            </a>-->
<!--                        </li>-->
                        <li class="menu-item  menu-item-active" aria-haspopup="true" >
                            <a  href="<?= base_url('proyectos/index') ?>" class="menu-link ">
                                <i class="menu-icon flaticon2-browser-2"></i><span class="menu-text">Proyectos</span>
                            </a>
                        </li>
                       
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
                              <li class="menu-item  menu-item-active "  aria-haspopup="true"><a  href="https://jrtec.cl/iot-rasp/DOCUMENTACION_IOT.pdf" target="_blank" class="menu-link "><span class="menu-text">Manual</span></a></li>
                           </ul>
                           <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                     </div>
                     <!--end::Header Menu Wrapper-->
                     <!--begin::Topbar-->
                     <div class="topbar">

                       
                        <!--begin::Languages-->
                        <div class="dropdown">
                           <!--begin::Toggle-->
                           <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                              <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                 <img class="h-20px w-20px rounded-sm" src="<?=base_url()?>/public/Template/assets/media/svg/flags/016-spain.svg" alt=""/>
                              </div>
                           </div>
                           <!--end::Toggle-->
                           <!--begin::Dropdown-->
                           <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                              <!--begin::Nav-->
                              <ul class="navi navi-hover py-4">
                                 <!--begin::Item-->
                                 <li class="navi-item">
                                    <a href="#" class="navi-link">
                                    <span class="symbol symbol-20 mr-3">
                                    <img src="<?=base_url()?>/public/Template/assets/media/svg/flags/016-spain.svg" alt=""/>
                                    </span>
                                    <span class="navi-text">Español</span>
                                    </a>
                                 </li>
                                 <!--end::Item-->
                              </ul>
                              <!--end::Nav-->
                           </div>
                           <!--end::Dropdown-->
                        </div>
                        <!--end::Languages-->
                        <!--begin::User-->
                        <?php  $this->session = \Config\Services::session(); ?>
                        <div class="topbar-item">
                           <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                              <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hola, </span>
                              <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?= $this->session->get('nombre') ?></span>
                              <span class="symbol symbol-35 symbol-light-success">
                              <span class="symbol-label font-size-h5 font-weight-bold"><?= substr(ucfirst($this->session->get('nombre')), 0,1) ?></span>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                  <!--begin::Subheader-->
                  <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
                     <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center flex-wrap mr-2">
                           <!--begin::Page Title-->
                           <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                              Pagina                            
                           </h5>
                           <!--end::Page Title-->
                           <!--begin::Actions-->
                           <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                           <span class="text-muted font-weight-bold mr-4">Titulo</span>
                           <!--end::Actions-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center">

                           <!--end::Actions-->
                           <!--begin::Daterange-->
  
                           <span class="text-muted font-size-base font-weight-bold mr-2" id="">Fecha</span>
                           <span class="text-primary font-size-base font-weight-bolder" id="kt_dashboard_daterangepicker_date"><?=date("d/M/Y")  ?></span>
                          
                           <!--end::Daterange-->

                        </div>
                        <!--end::Toolbar-->
                     </div>
                  </div>
                  <!--end::Subheader-->
                  <!--begin::Entry-->
                 <div class="d-flex flex-column-fluid">
                      <div class="container">
                          <?= $this->renderSection('content');  ?>
                      </div>
                 </div>
                  <!--end::Entry-->
               </div>
               <!--end::Content-->
               <!--begin::Footer-->
               <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
                  <!--begin::Container-->
                  <div class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                     <!--begin::Copyright-->
                     <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2"><?=date("Y")  ?>&copy;</span>
                        <a href="https://jrtec.cl" target="_blank" class="text-dark-75 text-hover-primary">JRTEC</a>
                     </div>
                     <!--end::Copyright-->
                     <!--begin::Nav-->
                     <div class="nav nav-dark">

                     </div>
                     <!--end::Nav-->
                  </div>
                  <!--end::Container-->
               </div>
               <!--end::Footer-->
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
            <h3 class="font-weight-bold m-0">Perfil
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
                  <div class="symbol-label" style="background-image:url('<?= base_url() ?>/public/img/user.png')"></div>
                  <i class="symbol-badge bg-success"></i>
               </div>
               <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary"><?= $this->session->get('nombre') ?></a>
                  <div class="text-muted mt-1"> Usuario</div>
                  <div class="navi mt-2">
                     <a href="<?= base_url() ?>/login/salir" class="btn btn-sm btn-light-danger font-weight-bolder py-2 px-5">Cerrar Sesion</a>
                  </div>
               </div>
            </div>
            <!--end::Header-->
            <!--begin::Separator-->
            <div class="separator separator-dashed mt-8 mb-5"></div>

         </div>
         <!--end::Content-->
      </div>
      <!-- end::User Panel-->

      <!--begin::Scrolltop-->
      <div id="kt_scrolltop" class="scrolltop">
         <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24"/>
                  <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
                  <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"/>
               </g>
            </svg>
            <!--end::Svg Icon-->
         </span>
      </div>
      <!--end::Scrolltop-->

      <script>var HOST_URL = "";</script>
      <!--begin::Global Config(global config for global JS scripts)-->
      <script>
         var KTAppSettings = {
         "breakpoints": {
         "sm": 576,
         "md": 768,
         "lg": 992,
         "xl": 1200,
         "xxl": 1400
         },
         "colors": {
         "theme": {
         "base": {
             "white": "#ffffff",
             "primary": "#3699FF",
             "secondary": "#E5EAEE",
             "success": "#1BC5BD",
             "info": "#8950FC",
             "warning": "#FFA800",
             "danger": "#F64E60",
             "light": "#E4E6EF",
             "dark": "#181C32"
         },
         "light": {
             "white": "#ffffff",
             "primary": "#E1F0FF",
             "secondary": "#EBEDF3",
             "success": "#C9F7F5",
             "info": "#EEE5FF",
             "warning": "#FFF4DE",
             "danger": "#FFE2E5",
             "light": "#F3F6F9",
             "dark": "#D6D6E0"
         },
         "inverse": {
             "white": "#ffffff",
             "primary": "#ffffff",
             "secondary": "#3F4254",
             "success": "#ffffff",
             "info": "#ffffff",
             "warning": "#ffffff",
             "danger": "#ffffff",
             "light": "#464E5F",
             "dark": "#ffffff"
         }
         },
         "gray": {
         "gray-100": "#F3F6F9",
         "gray-200": "#EBEDF3",
         "gray-300": "#E4E6EF",
         "gray-400": "#D1D3E0",
         "gray-500": "#B5B5C3",
         "gray-600": "#7E8299",
         "gray-700": "#5E6278",
         "gray-800": "#3F4254",
         "gray-900": "#181C32"
         }
         },
         "font-family": "Poppins"
         };
      </script>
      <script src="<?=base_url()?>/public/Template/assets/plugins/global/plugins.bundle.js"></script>
      <script src="<?=base_url()?>/public/Template/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
      <script src="<?=base_url()?>/public/Template/assets/js/scripts.bundle.js"></script>
      <?= $this->renderSection('script');  ?>
      <!--end::Page Scripts-->
   </body>
   <!--end::Body-->
</html>