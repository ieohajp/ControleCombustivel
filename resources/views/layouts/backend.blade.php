<?php
@session_start();

use App\Models\usuario;

$id_instituicao = $_SESSION['inst_id'];
$nome_instituicao = $_SESSION['inst_nome'];
$id_usuario = $_SESSION['id_usuario'];
$nome_usuario = $_SESSION['nome_usuario'];
$nivel_usuario = $_SESSION['nivel_usuario'];
$nivel_usuario_desc = $_SESSION['nivel_usuario_desc'];

$filename =  asset('media/avatars/') . "/" . $id_usuario . ".jpg";
if (!(file_exists($filename))) {
    $foto = $filename;
} else {
    $foto = asset('media/avatars/') . "/" . 'padrao.jpg';
}
?>

<!doctype html>

<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>E-ticons-Tributos</title>

    <meta name="description" content="Sistema de Tributos">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- Fonts and Styles -->
    @yield('css_before')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{ mix('/css/oneui.css') }}">

    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
    <link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/flat.css') }}">

    
    <script src="{{ URL::asset('js/plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ URL::asset('js/core/jquery.min.js') }}"></script>



    <link rel="stylesheet" href="{{ URL::asset('js/plugins/datatables/dataTables.bootstrap4.css')}}">
    <script src="{{ URL::asset('/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>



    @yield('css_after')

    <!-- Scripts -->
    <!-- <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script> -->
</head>

<body>
    <!-- Page Container -->
    <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Light themed Header
            'page-header-dark'                          Dark themed Header

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
    <div id="page-container" role="dialog" class="sidebar-o enable-page-overlay sidebar-light side-scroll page-header-fixed">
        <!-- Side Overlay-->
        <aside id="side-overlay" class="font-size-sm">
            <!-- Side Header -->
            <div class="content-header border-bottom">
                <!-- User Avatar -->

                <a class="img-link mr-1" href="javascript:void(0)">
                    <img class="img-avatar img-avatar32" src="{{$foto}}" alt="">
                </a>
                <!-- END User Avatar -->

                <!-- User Info -->
                <div class="ml-2">
                    <a class="link-fx text-dark font-w600" href="javascript:void(0)"></a>
                </div>
                <!-- END User Info -->

                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="ml-auto btn btn-sm btn-dual" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-fw fa-times text-danger"></i>
                </a>
                <!-- END Close Side Overlay -->
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="content-side">
                <p>
                    Content..
                </p>
            </div>
            <!-- END Side Content -->
        </aside>
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header-logo bg-white-5">
                <img width="200" height="50" src="{{ asset('img/logo.png') }}" alt="">
            </div>
            <!-- END Side Header -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-heading">Principal</li>
                    <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                            <i class="nav-main-link-icon si si-bulb"></i>
                            <span class="nav-main-link-name">Cadastros</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('usuario.index_usuario') ? ' active' : '' }}" href="{{route('usuario.index_usuario_lista',[$id_instituicao])}}">
                                    <span class="nav-main-link-name">Usuários</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('pages/teste') ? ' active' : '' }}" href="/pages/teste">

                                    <span class="nav-main-link-name">Instituição</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}" href="/pages/blank">
                                    <span class="nav-main-link-name">Nota Fiscal</span>1z
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading">Outros</li>
                    <li class="nav-main-item open">
                        <a class="nav-main-link" href="/">
                            <i class="nav-main-link-icon si si-globe"></i>
                            <span class="nav-main-link-name">Diversos</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div>
                    <h3 class="content"> {{$nome_instituicao}} </h3>
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded" src="{{$foto}}" alt="Header Avatar" style="width: 18px;">
                            <span class="d-none d-sm-inline-block ml-1">{{$nome_usuario}} ({{$nivel_usuario_desc}}) </span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-primary">
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{$foto}}" alt="">
                            </div>
                            <div class="p-2">
                                <h5 class="dropdown-header text-uppercase">Sessão do Usuário</h5>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>Trocar Senha</span>
                                    <i class="si si-lock ml-1"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>Sair</span>
                                    <i class="si si-logout ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->

                    <!-- Notifications Dropdown -->
                    <div class="dropdown d-inline-block ml-2">

                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-2 bg-primary text-center">
                                <h5 class="dropdown-header text-uppercase text-white">Notifications</h5>
                            </div>
                            <ul class="nav-items mb-0">
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mr-2 ml-3">
                                            <i class="fa fa-fw fa-check-circle text-success"></i>
                                        </div>
                                        <div class="media-body pr-2">
                                            <div class="font-w600">You have a new follower</div>
                                            <small class="text-muted">15 min ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mr-2 ml-3">
                                            <i class="fa fa-fw fa-plus-circle text-info"></i>
                                        </div>
                                        <div class="media-body pr-2">
                                            <div class="font-w600">1 new sale, keep it up</div>
                                            <small class="text-muted">22 min ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mr-2 ml-3">
                                            <i class="fa fa-fw fa-times-circle text-danger"></i>
                                        </div>
                                        <div class="media-body pr-2">
                                            <div class="font-w600">Update failed, restart server</div>
                                            <small class="text-muted">26 min ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mr-2 ml-3">
                                            <i class="fa fa-fw fa-plus-circle text-info"></i>
                                        </div>
                                        <div class="media-body pr-2">
                                            <div class="font-w600">2 new sales, keep it up</div>
                                            <small class="text-muted">33 min ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mr-2 ml-3">
                                            <i class="fa fa-fw fa-user-plus text-success"></i>
                                        </div>
                                        <div class="media-body pr-2">
                                            <div class="font-w600">You have a new subscriber</div>
                                            <small class="text-muted">41 min ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mr-2 ml-3">
                                            <i class="fa fa-fw fa-check-circle text-success"></i>
                                        </div>
                                        <div class="media-body pr-2">
                                            <div class="font-w600">You have a new follower</div>
                                            <small class="text-muted">42 min ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-arrow-down mr-1"></i> Load More..
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-white">
                <div class="content-header">
                    <form class="w-100" action="/dashboard" method="POST">
                        @csrf
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                    <i class="fa fa-fw fa-times-circle"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-white">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            @yield('content')
        </main>
        <!-- END Main Container -->

        

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row font-size-sm">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                        <a class="font-w300" target="_blank">Todos os direitos reservados</a> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->

        <!-- Apps Modal -->
        <!-- Opens from the modal toggle button in the header -->
        
        <!-- END Apps Modal -->
    </div>
    <!-- END Page Container -->

    <!-- OneUI Core JS -->
    <script src="{{ mix('js/oneui.app.js') }}"></script>
    <script src="{{ URL::asset('js/mascaras.js') }}"></script>

        

    <!-- Laravel Scaffolding JS -->
    <!-- <script src="{{ mix('/js/laravel.app.js') }}"></script> -->

    @yield('js_after')
</body>

</html>