<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Admin de'Botani</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link href="/css/admin.css" rel="stylesheet">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src={{ url("/img/avatars/8.jpg") }} alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            {{-- <button type="button" tabindex="0" class="dropdown-item">User Account</button> --}}
                                            {{-- <button type="button" tabindex="0" class="dropdown-item">Settings</button> --}}
                                            {{-- <h6 tabindex="-1" class="dropdown-header">Header</h6> --}}
                                            {{-- <button type="button" tabindex="0" class="dropdown-item">Actions</button> --}}
                                            {{-- <div tabindex="-1" class="dropdown-divider"></div> --}}
                                            <a class="nav-link" href="{{ route('logout') }}">Keluar</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{Auth::user()->name}}
                                    </div>
                                    <div class="widget-subheading">
                                        Admin
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Admin<a href="/admin">Beranda</a></li>
                            {{-- <li>
                                <a href="admin(tabungan).php" class="mm-active">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Tabungan
                                </a>
                                <a href="admin(Deposito).php">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Deposito
                                </a>
                            </li> --}}

                            <li class="app-sidebar__heading">Produk</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Tabungan
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{url('/admin/rahmah')}}">
                                                <i class="metismenu-icon"></i>
                                                Tabungan Rahmah
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/admin/amanah')}}">
                                                <i class="metismenu-icon">
                                                </i>Tabungan Amanah
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/admin/bimapan')}}">
                                                <i class="metismenu-icon">
                                                </i>Tabungan Bimapan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/admin/simapan')}}">
                                                <i class="metismenu-icon">
                                                </i>SIMAPAN
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Deposito
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>

                                        <li>
                                            <a href="{{url('/admin/individu')}}">
                                                <i class="metismenu-icon">
                                                </i>Deposito Rahmah
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/admin/prima')}}">
                                                <i class="metismenu-icon">
                                                </i>Deposito Prima
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('/admin/verifikasi')}}">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Verifikasi
                                    </a>
                                </li>

                        </ul>
                    </div>
                </div>
            </div>

            @yield('container')
        </div>
    </div>
    {{-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> --}}
    <script type="text/javascript" src="/js/admin.js"></script>
</body>
</html>
