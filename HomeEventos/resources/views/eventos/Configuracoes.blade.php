<!DOCTYPE html>
<html lang="en">


<head>
    <title>Configurações - {{ Auth::user()->name }}</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Bootstrap based News, Magazine and Blog Theme">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/dropzone/dist/dropzone.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/flatpickr/dist/flatpickr.css" />

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- =======================
Header START -->
    <header class="navbar-light fixed-top header-static bg-mode">

        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto icon-md btn btn-light p-0" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <!-- Nav Search START -->
                    {{-- <div class="nav mt-3 mt-lg-0 flex-nowrap align-items-center px-4 px-lg-0">
                    <div class="nav-item w-100">
                        <form class="rounded position-relative">
                            <input class="form-control ps-5 bg-light" type="search" placeholder="Search..."
                                aria-label="Search">
                            <button
                                class="btn bg-transparent px-2 py-0 position-absolute top-50 start-0 translate-middle-y"
                                type="submit"><i class="bi bi-search fs-5"> </i></button>
                        </form>
                    </div>
                </div> --}}
                    <!-- Nav Search END -->

                    <ul class="navbar-nav navbar-nav-scroll ms-auto">
                        <!-- Nav item 1 Demos -->
                        {{--   <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="homeMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Demo</a>
                        <ul class="dropdown-menu" aria-labelledby="homeMenu">
                            <li> <a class="dropdown-item" href="index-2.html">Home default</a></li>
                            <li> <a class="dropdown-item" href="index-classic.html">Home classic</a></li>
                            <li> <a class="dropdown-item" href="index-post.html">Home post</a></li>
                            <li> <a class="dropdown-item" href="index-video.html">Home video</a></li>
                            <li> <a class="dropdown-item" href="index-event.html">Home event</a></li>
                            <li> <a class="dropdown-item" href="landing.html">Landing page</a></li>
                            <li> <a class="dropdown-item" href="app-download.html">App download</a></li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/"
                                    target="_blank">
                                    <i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy Social!
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Nav item 2 Pages -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                            <li> <a class="dropdown-item" href="albums.html">Albums</a></li>
                            <li> <a class="dropdown-item" href="celebration.html">Celebration</a></li>
                            <li> <a class="dropdown-item" href="messaging.html">Messaging</a></li>
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#!">Profile</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="my-profile.html">Feed</a> </li>
                                    <li> <a class="dropdown-item" href="my-profile-about.html">About</a> </li>
                                    <li> <a class="dropdown-item"
                                            href="my-profile-connections.html">Connections</a> </li>
                                    <li> <a class="dropdown-item" href="my-profile-media.html">Media</a> </li>
                                    <li> <a class="dropdown-item" href="my-profile-videos.html">Videos</a> </li>
                                    <li> <a class="dropdown-item" href="my-profile-events.html">Events</a> </li>
                                    <li> <a class="dropdown-item" href="my-profile-activity.html">Activity</a>
                                    </li>
                                </ul>
                            </li>
                            <li> <a class="dropdown-item" href="events.html">Events</a></li>
                            <li> <a class="dropdown-item" href="events-2.html">Events 2</a></li>
                            <li> <a class="dropdown-item" href="event-details.html">Event details</a></li>
                            <li> <a class="dropdown-item" href="event-details-2.html">Event details 2</a></li>
                            <li> <a class="dropdown-item" href="groups.html">Groups</a></li>
                            <li> <a class="dropdown-item" href="group-details.html">Group details</a></li>
                            <li> <a class="dropdown-item" href="post-videos.html">Post videos</a></li>
                            <li> <a class="dropdown-item" href="post-video-details.html">Post video details</a>
                            </li>
                            <li> <a class="dropdown-item" href="post-details.html">Post details</a></li>
                            <li> <a class="dropdown-item" href="video-details.html">Video details</a></li>
                            <li> <a class="dropdown-item" href="blog.html">Blog</a></li>
                            <li> <a class="dropdown-item" href="blog-details.html">Blog details</a></li>

                            <!-- Dropdown submenu levels -->
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
                                <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                    <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                    <!-- dropdown submenu open left -->
                                    <li class="dropdown-submenu dropstart">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown
                                            (start)</a>
                                        <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Nav item 3 Post -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="postMenu"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account </a>
                        <ul class="dropdown-menu" aria-labelledby="postMenu">
                            <li> <a class="dropdown-item" href="create-page.html">Create a page</a></li>
                            <li> <a class="dropdown-item" href="Configuracoes">Settings</a> </li>
                            <li> <a class="dropdown-item" href="notifications.html">Notifications</a> </li>
                            <li> <a class="dropdown-item" href="help.html">Help center</a> </li>
                            <li> <a class="dropdown-item" href="help-details.html">Help details</a> </li>
                            <!-- dropdown submenu open left -->
                            <li class="dropdown-submenu dropstart">
                                <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                                <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="sign-in.html">Sign in</a> </li>
                                    <li> <a class="dropdown-item" href="sign-up.html">Sing up</a> </li>
                                    <li> <a class="dropdown-item" href="forgot-password.html">Forgot password</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li> <a class="dropdown-item" href="sign-in-advance.html">Sign in advance</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="sign-up-advance.html">Sing up advance</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="forgot-password-advance.html">Forgot
                                            password advance</a> </li>
                                </ul>
                            </li>
                            <li> <a class="dropdown-item" href="error-404.html">Error 404</a> </li>
                            <li> <a class="dropdown-item" href="offline.html">Offline</a> </li>
                            <li> <a class="dropdown-item" href="privacy-and-terms.html">Privacy & terms</a> </li>
                        </ul>
                    </li> --}}

                        <!-- Nav item 4 Mega menu -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('perfil') }}">{{ Auth::user()->name }}</a>
                        </li>
                    </ul>
                </div>
                <!-- Main navbar END -->

                <!-- Nav right START -->
                <ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
                    <li class="nav-item ms-2">
                        <a class="nav-link icon-md btn btn-light p-0" href="messaging.html">
                            <i class="bi bi-chat-left-text-fill fs-6"> </i>
                        </a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link icon-md btn btn-light p-0" href="Configuracoes">
                            <i class="bi bi-gear-fill fs-6"> </i>
                        </a>
                    </li>
                    <li class="nav-item dropdown ms-2">
                        <a class="nav-link icon-md btn btn-light p-0" href="#" id="notifDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <span class="badge-notif animation-blink"></span>
                            <i class="bi bi-bell-fill fs-6"> </i>
                        </a>
                        <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0"
                            aria-labelledby="notifDropdown">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="m-0">Notifications <span
                                            class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
                                    <a class="small" href="#">Clear all</a>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush list-unstyled p-2">
                                        <!-- Notif item -->
                                        <li>
                                            <div
                                                class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3">
                                                <div class="avatar text-center d-none d-sm-inline-block">
                                                    <img class="avatar-img rounded-circle"
                                                        src="assets/images/avatar/01.jpg" alt="">
                                                </div>
                                                <div class="ms-sm-3">
                                                    <div class=" d-flex">
                                                        <p class="small mb-2"><b>Judy Nguyen</b> sent you a friend
                                                            request.</p>
                                                        <p class="small ms-3 text-nowrap">Just now</p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <button class="btn btn-sm py-1 btn-primary me-2">Accept
                                                        </button>
                                                        <button class="btn btn-sm py-1 btn-danger-soft">Delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Notif item -->
                                        <li>
                                            <div
                                                class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3 position-relative">
                                                <div class="avatar text-center d-none d-sm-inline-block">
                                                    <img class="avatar-img rounded-circle"
                                                        src="assets/images/avatar/02.jpg" alt="">
                                                </div>
                                                <div class="ms-sm-3 d-flex">
                                                    <div>
                                                        <p class="small mb-2">Wish <b>Amanda Reed</b> a happy birthday
                                                            (Nov 12)</p>
                                                        <button class="btn btn-sm btn-outline-light py-1 me-2">Say
                                                            happy birthday 🎂</button>
                                                    </div>
                                                    <p class="small ms-3">2min</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Notif item -->
                                        <li>
                                            <a href="#"
                                                class="list-group-item list-group-item-action rounded d-flex border-0 mb-1 p-3">
                                                <div class="avatar text-center d-none d-sm-inline-block">
                                                    <div class="avatar-img rounded-circle bg-success"><span
                                                            class="text-white position-absolute top-50 start-50 translate-middle fw-bold">WB</span>
                                                    </div>
                                                </div>
                                                <div class="ms-sm-3">
                                                    <div class="d-flex">
                                                        <p class="small mb-2">Webestica has 15 like and 1 new activity
                                                        </p>
                                                        <p class="small ms-3">1hr</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- Notif item -->
                                        <li>
                                            <a href="#"
                                                class="list-group-item list-group-item-action rounded d-flex border-0 p-3 mb-1">
                                                <div class="avatar text-center d-none d-sm-inline-block">
                                                    <img class="avatar-img rounded-circle"
                                                        src="assets/images/logo/12.svg" alt="">
                                                </div>
                                                <div class="ms-sm-3 d-flex">
                                                    <p class="small mb-2"><b>Bootstrap in the news:</b> The search
                                                        giant’s parent company, Alphabet, just joined an exclusive club
                                                        of tech stocks.</p>
                                                    <p class="small ms-3">4hr</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="#" class="btn btn-sm btn-primary-soft">See all incoming
                                        activity</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Notification dropdown END -->

                    <li class="nav-item ms-2 dropdown">
                        @auth
                            <a class="nav-link btn icon-md p-0" href="#" id="profileDropdown" role="button"
                                data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="avatar-img rounded-2" src="assets/images/avatar/main.png" alt="">
                            </a>
                        @endauth
                        <ul class="dropdown-menu dropdown-animation dropdown-menu-end pt-3 small me-md-n3"
                            aria-labelledby="profileDropdown">
                            <!-- Profile info -->
                            <li class="px-3">
                                <div class="d-flex align-items-center position-relative">
                                    <!-- Avatar -->
                                    <div class="avatar me-3">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg"
                                            alt="avatar">
                                    </div>
                                    <div>
                                        <a class="h6 stretch-link" href="#">Lori Ferguson</a>
                                        <p class="small m-0">Desenvolvedor Web</p>
                                    </div>
                                </div>
                                <a class="dropdown-item btn btn-primary-soft btn-sm my-2 text-center"
                                    href="{{ route('perfil') }}">Visualizar perfil</a>
                            </li>
                            <!-- Links -->
                            <li><a class="dropdown-item" href="Configuracoes"><i
                                        class="bi bi-gear fa-fw me-2"></i>Configurações e privacidade</a></li>
                            <li>
                                <a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
                                    <i class="fa-fw bi bi-life-preserver me-2"></i>Suporte
                                </a>
                            </li>

                            <li class="dropdown-divider"></li>

                            <li><a class="dropdown-item bg-danger-soft-hover" href="{{ route('sair') }}"><i
                                        class="bi bi-power fa-fw me-2"></i>Sair</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <!-- Dark mode switch START -->
                            <li>
                                <div class="modeswitch-wrap" id="darkModeSwitch">
                                    <div class="modeswitch-item">
                                        <div class="modeswitch-icon"></div>
                                    </div>
                                    <span>Modo escuro</span>
                                </div>
                            </li>
                            <!-- Dark mode switch END -->
                        </ul>
                    </li>
                    <!-- Profile START -->

                </ul>
                <!-- Nav right END -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- =======================
Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- Container START -->
        <div class="container">
            <div class="row">

                <!-- Sidenav START -->
                <div class="col-lg-3">

                    <!-- Advanced filter responsive toggler START -->
                    <!-- Divider -->
                    <div class="d-flex align-items-center mb-4 d-lg-none">
                        <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <i class="btn btn-primary fw-bold fa-solid fa-sliders"></i>
                            <span class="h6 mb-0 fw-bold d-lg-none ms-2">Settings</span>
                        </button>
                    </div>
                    <!-- Advanced filter responsive toggler END -->

                    <nav class="navbar navbar-light navbar-expand-lg mx-0">
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
                            <!-- Offcanvas header -->
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close text-reset ms-auto"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>

                            <!-- Offcanvas body -->
                            <div class="offcanvas-body p-0">
                                <!-- Card START -->
                                <div class="card w-100">
                                    <!-- Card body START -->
                                    <div class="card-body">

                                        <!-- Side Nav START -->
                                        <ul
                                            class="nav nav-tabs nav-pills nav-pills-soft flex-column fw-bold gap-2 border-0">
                                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                                <a class="nav-link d-flex mb-0 active" href="#nav-setting-tab-1"
                                                    data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/person-outline-filled.svg"
                                                        alt=""><span>Account </span></a>
                                            </li>
                                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                                <a class="nav-link d-flex mb-0" href="#nav-setting-tab-2"
                                                    data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/notification-outlined-filled.svg"
                                                        alt=""><span>Notification </span></a>
                                            </li>
                                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                                <a class="nav-link d-flex mb-0" href="#nav-setting-tab-3"
                                                    data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/shield-outline-filled.svg"
                                                        alt=""><span>Privacy and safety </span></a>
                                            </li>
                                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                                <a class="nav-link d-flex mb-0" href="#nav-setting-tab-4"
                                                    data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/handshake-outline-filled.svg"
                                                        alt=""><span>Communications </span></a>
                                            </li>
                                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                                <a class="nav-link d-flex mb-0" href="#nav-setting-tab-5"
                                                    data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/chat-alt-outline-filled.svg"
                                                        alt=""><span>Messaging </span></a>
                                            </li>
                                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                                <a class="nav-link d-flex mb-0" href="#nav-setting-tab-6"
                                                    data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/trash-var-outline-filled.svg"
                                                        alt=""><span>Close account </span></a>
                                            </li>
                                        </ul>
                                        <!-- Side Nav END -->

                                    </div>
                                    <!-- Card body END -->
                                    <!-- Card footer -->
                                    <div class="card-footer text-center py-2">
                                        <a class="btn btn-link text-secondary btn-sm" href="Perfil">View Profile </a>
                                    </div>
                                </div>
                                <!-- Card END -->
                            </div>
                            <!-- Offcanvas body -->

                            <!-- Helper link START -->
                            <ul class="nav small mt-4 justify-content-center lh-1">
                                <li class="nav-item">
                                    <a class="nav-link" href="my-profile-about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="settings.html">Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" target="_blank"
                                        href="https://support.webestica.com/login">Support </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" target="_blank" href="docs/index.html">Docs </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="help.html">Help</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="privacy-and-terms.html">Privacy & terms</a>
                                </li>
                            </ul>
                            <!-- Helper link END -->
                            <!-- Copyright -->
                            <p class="small text-center mt-1">©2022 <a class="text-body" target="_blank"
                                    href="https://github.com/arnaldo-tomo"> {{ config('app.name') }} </a></p>

                        </div>
                    </nav>
                </div>
                <!-- Sidenav END -->

                <!-- Main content START -->
                <div class="col-lg-6 vstack gap-4">
                    <!-- Setting Tab content START -->
                    <div class="tab-content py-0 mb-0">

                        <!-- Account setting tab START -->
                        <div class="tab-pane show active fade" id="nav-setting-tab-1">
                            <!-- Account settings START -->
                            <div class="card mb-4">

                                <!-- Title START -->
                                <div class="card-header border-0 pb-0">
                                    <h1 class="h5 card-title">Account Settings</h1>
                                    <p class="mb-0">He moonlights difficult engrossed it, sportsmen. Interested has
                                        all Devonshire difficulty gay assistance joy. Unaffected at ye of compliment
                                        alteration to.</p>
                                </div>
                                <!-- Card header START -->
                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- Form settings START -->
                                    <form class="row g-3">
                                        <!-- First name -->
                                        <div class="col-sm-6 col-lg-4">
                                            <label class="form-label">First name</label>
                                            <input type="text" class="form-control" placeholder=""
                                                value="Sam">
                                        </div>
                                        <!-- Last name -->
                                        <div class="col-sm-6 col-lg-4">
                                            <label class="form-label">Last name</label>
                                            <input type="text" class="form-control" placeholder=""
                                                value="Lanson">
                                        </div>
                                        <!-- Additional name -->
                                        <div class="col-sm-6 col-lg-4">
                                            <label class="form-label">Additional name</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                        <!-- User name -->
                                        <div class="col-sm-6">
                                            <label class="form-label">User name</label>
                                            <input type="text" class="form-control" placeholder=""
                                                value="@samlanson">
                                        </div>
                                        <!-- Birthday -->
                                        <div class="col-lg-6">
                                            <label class="form-label">Birthday </label>
                                            <input type="text" class="form-control flatpickr" value="12/12/1990">
                                        </div>
                                        <!-- Allow checkbox -->
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="allowChecked" checked>
                                                <label class="form-check-label" for="allowChecked">
                                                    Allow anyone to add you to their team
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Phone number -->
                                        <div class="col-sm-6">
                                            <label class="form-label">Phone number</label>
                                            <input type="text" class="form-control" placeholder=""
                                                value="(678) 324-1251">
                                            <!-- Add new number -->
                                            <a class="btn btn-sm btn-dashed rounded mt-2" href="#!"> <i
                                                    class="bi bi-plus-circle-dotted me-1"></i>Add new phone number</a>
                                        </div>
                                        <!-- Phone number -->
                                        <div class="col-sm-6">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" placeholder=""
                                                value="sam@webestica.com">
                                            <!-- Add new email -->
                                            <a class="btn btn-sm btn-dashed rounded mt-2" href="#!"> <i
                                                    class="bi bi-plus-circle-dotted me-1"></i>Add new email address</a>
                                        </div>
                                        <!-- Page information -->
                                        <div class="col-12">
                                            <label class="form-label">Overview</label>
                                            <textarea class="form-control" rows="4" placeholder="Description (Required)">Interested has all Devonshire difficulty gay assistance joy. Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed. Moderate do subjects to distance.</textarea>
                                            <small>Character limit: 300</small>
                                        </div>
                                        <!-- Button  -->
                                        <div class="col-12 text-end">
                                            <button type="submit" class="btn btn-sm btn-primary mb-0">Save
                                                changes</button>
                                        </div>
                                    </form>
                                    <!-- Settings END -->
                                </div>
                                <!-- Card body END -->
                            </div>
                            <!-- Account settings END -->

                            <!-- Change your password START -->
                            <div class="card">
                                <!-- Title START -->
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Change your password</h5>
                                    <p class="mb-0">See resolved goodness felicity shy civility domestic had but.</p>
                                </div>
                                <!-- Title START -->
                                <div class="card-body">
                                    <!-- Settings START -->
                                    <form class="row g-3">
                                        <!-- Current password -->
                                        <div class="col-12">
                                            <label class="form-label">Current password</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                        <!-- New password -->
                                        <div class="col-12">
                                            <label class="form-label">New password</label>
                                            <!-- Input group -->
                                            <div class="input-group">
                                                <input class="form-control fakepassword" type="password"
                                                    id="psw-input" placeholder="Enter new password">
                                                <span class="input-group-text p-0">
                                                    <i
                                                        class="fakepasswordicon fa-solid fa-eye-slash cursor-pointer p-2 w-40px"></i>
                                                </span>
                                            </div>
                                            <!-- Pswmeter -->
                                            <div id="pswmeter" class="mt-2"></div>
                                            <div id="pswmeter-message" class="rounded mt-1"></div>
                                        </div>
                                        <!-- Confirm password -->
                                        <div class="col-12">
                                            <label class="form-label">Confirm password</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                        <!-- Button  -->
                                        <div class="col-12 text-end">
                                            <button type="submit" class="btn btn-primary mb-0">Update
                                                password</button>
                                        </div>
                                    </form>
                                    <!-- Settings END -->
                                </div>
                            </div>
                            <!-- Card END -->
                        </div>
                        <!-- Account setting tab END -->

                        <!-- Notification tab START -->
                        <div class="tab-pane fade" id="nav-setting-tab-2">
                            <!-- Notification START -->
                            <div class="card">
                                <!-- Card header START -->
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Notification</h5>
                                    <p class="mb-0">Tried law yet style child. The bore of true of no be deal.
                                        Frequently sufficient to be unaffected. The furnished she concluded depending
                                        procuring concealed. </p>
                                </div>
                                <!-- Card header START -->
                                <!-- Card body START -->
                                <div class="card-body pb-0">
                                    <!-- Notification START -->
                                    <ul class="list-group list-group-flush">
                                        <!-- Notification list item -->
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                                            <div class="me-2">
                                                <h6 class="mb-0">Likes and Comments</h6>
                                                <p class="small mb-0">Joy say painful removed reached end.</p>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="NotiSwitchCheckChecked" checked>
                                            </div>
                                        </li>
                                        <!-- Notification list item -->
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                                            <div class="me-2">
                                                <h6 class="mb-0">Reply to My comments</h6>
                                                <p class="small mb-0">Ask a quick six seven offer see among.</p>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="NotiSwitchCheckChecked2" checked>
                                            </div>
                                        </li>
                                        <!-- Notification list item -->
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                                            <div class="me-2">
                                                <h6 class="mb-0">Subscriptions</h6>
                                                <p class="small mb-0">Preference any astonished unreserved Mrs.</p>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="NotiSwitchCheckChecked3">
                                            </div>
                                        </li>
                                        <!-- Notification list item -->
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                                            <div class="me-2">
                                                <h6 class="mb-0">Birthdays</h6>
                                                <p class="small mb-0">Contented he gentleman agreeable do be</p>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="NotiSwitchCheckChecked4">
                                            </div>
                                        </li>
                                        <!-- Notification list item -->
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                                            <div class="me-2">
                                                <h6 class="mb-0">Events</h6>
                                                <p class="small mb-0">Fulfilled direction use continually.</p>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="NotiSwitchCheckChecked5" checked>
                                            </div>
                                        </li>
                                        <!-- Notification list item -->
                                        <li class="list-group-item px-0 py-3">
                                            <!-- Accordion START -->
                                            <div class="accordion accordion-flush border-0" id="emailNotifications">
                                                <!-- Accordion item -->
                                                <div class="accordion-item bg-transparent">
                                                    <h2 class="accordion-header" id="flush-headingOne">
                                                        <a href="#!"
                                                            class="accordion-button mb-0 p-0 collapsed bg-transparent shadow-none"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                            aria-controls="flush-collapseOne">
                                                            <span>
                                                                <span class="mb-0 h6 d-block">Email
                                                                    notifications</span>
                                                                <small class="small mb-0 text-secondary">As hastened oh
                                                                    produced prospect. </small>
                                                            </span>
                                                        </a>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingOne"
                                                        data-bs-parent="#emailNotifications">
                                                        <div class="accordion-body p-0 pt-3">
                                                            <!-- Notification list item -->
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="NotiSwitchCheckChecked6"
                                                                    checked>
                                                                <label class="form-check-label"
                                                                    for="NotiSwitchCheckChecked6">
                                                                    Product emails
                                                                </label>
                                                            </div>
                                                            <!-- Notification list item -->
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="NotiSwitchCheckChecke7">
                                                                <label class="form-check-label"
                                                                    for="NotiSwitchCheckChecke7">
                                                                    Feedback emails
                                                                </label>
                                                            </div>
                                                            <hr>
                                                            <div class="mt-3">
                                                                <h6>Email frequency</h6>
                                                                <!-- Notification list item -->
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="NotiRadio" id="NotiRadio1">
                                                                    <label class="form-check-label" for="NotiRadio1">
                                                                        Daily
                                                                    </label>
                                                                </div>
                                                                <!-- Notification list item -->
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="NotiRadio" id="NotiRadio2" checked>
                                                                    <label class="form-check-label" for="NotiRadio2">
                                                                        Weekly
                                                                    </label>
                                                                </div>
                                                                <!-- Notification list item -->
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="NotiRadio" id="NotiRadio3">
                                                                    <label class="form-check-label" for="NotiRadio3">
                                                                        Periodically
                                                                    </label>
                                                                </div>
                                                                <!-- Notification list item -->
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="NotiRadio" id="NotiRadio4" checked>
                                                                    <label class="form-check-label" for="NotiRadio4">
                                                                        Off
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion END -->
                                        </li>
                                        <!-- Notification list item -->
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                                            <div class="me-2">
                                                <h6 class="mb-0">Push notifications</h6>
                                                <p class="small mb-0">Rendered six say his striking confined. </p>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="NotiSwitchCheckChecked8" checked>
                                            </div>
                                        </li>
                                        <!-- Notification list item -->
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                                            <div class="me-2">
                                                <h6 class="mb-0">Weekly account summary <span
                                                        class="badge bg-primary smaller"> Pro only</span> </h6>
                                                <p class="small mb-0">Rendered six say his striking confined. </p>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="NotiSwitchCheckChecked9" disabled>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- Notification END -->

                                </div>
                                <!-- Card body END -->
                                <!-- Button save -->
                                <div class="card-footer pt-0 text-end border-0">
                                    <button type="submit" class="btn btn-sm btn-primary mb-0">Save changes</button>
                                </div>
                            </div>
                            <!-- Notification END -->
                        </div>
                        <!-- Notification tab END -->

                        <!-- Privacy and safety tab START -->
                        <div class="tab-pane fade" id="nav-setting-tab-3">
                            <!-- Privacy and safety START -->
                            <div class="card">
                                <!-- Card header START -->
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Privacy and safety</h5>
                                    <p class="mb-0">See information about your account, download an archive of your
                                        data, or learn about your account deactivation options</p>
                                </div>
                                <!-- Card header START -->
                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- Privacy START -->
                                    <ul class="list-group">

                                        <!-- Privacy item -->
                                        <li
                                            class="list-group-item d-md-flex justify-content-between align-items-start">
                                            <div class="me-md-3">
                                                <h6 class="mb-0"> Use two-factor authentication</h6>
                                                <p class="small mb-0">Unaffected occasional thoroughly. Adieus it no
                                                    wonders spirit houses. </p>
                                            </div>
                                            <button class="btn btn-primary-soft btn-sm mt-1 mt-md-0"> <i
                                                    class="bi bi-pencil-square"></i> Change</button>
                                        </li>

                                        <!-- Privacy item -->
                                        <li
                                            class="list-group-item d-md-flex justify-content-between align-items-start">
                                            <div class="me-md-3">
                                                <h6 class="mb-0">Login activity</h6>
                                                <p class="small mb-0">Select the language you use on social</p>
                                            </div>
                                            <button class="btn btn-primary-soft btn-sm mt-1 mt-md-0"
                                                data-bs-toggle="modal" data-bs-target="#modalLoginActivity"> <i
                                                    class="bi bi-eye"></i> View</button>
                                        </li>

                                        <!-- Privacy item -->
                                        <li
                                            class="list-group-item d-md-flex justify-content-between align-items-start">
                                            <div class="me-md-3">
                                                <h6 class="mb-0">Manage your data and activity</h6>
                                                <p class="small mb-0">Select a language for translation</p>
                                            </div>
                                            <button class="btn btn-primary-soft btn-sm mt-1 mt-md-0"> <i
                                                    class="bi bi-pencil-square"></i> Change</button>
                                        </li>

                                        <!-- Privacy item -->
                                        <li
                                            class="list-group-item d-md-flex justify-content-between align-items-start">
                                            <div class="me-md-3">
                                                <h6 class="mb-0">Search history</h6>
                                                <p class="small mb-0">Choose to autoplay videos on social</p>
                                            </div>
                                            <button class="btn btn-primary-soft btn-sm mt-1 mt-md-0"> <i
                                                    class="bi bi-pencil-square"></i> Change</button>
                                        </li>

                                        <!-- Privacy item -->
                                        <li
                                            class="list-group-item d-md-flex justify-content-between align-items-start">
                                            <div class="me-md-3">
                                                <h6 class="mb-0">Permitted services</h6>
                                                <p class="small mb-0">Choose if this feature appears on your profile
                                                </p>
                                            </div>
                                            <button class="btn btn-primary-soft btn-sm mt-1 mt-md-0"> <i
                                                    class="bi bi-pencil-square"></i> Change</button>
                                        </li>
                                    </ul>
                                    <!-- Privacy END -->
                                </div>
                                <!-- Card body END -->
                                <!-- Button save -->
                                <div class="card-footer pt-0 text-end border-0">
                                    <button type="submit" class="btn btn-sm btn-primary mb-0">Save changes</button>
                                </div>
                            </div>
                            <!-- Privacy and safety END -->
                        </div>
                        <!-- Privacy and safety tab END -->

                        <!-- Communications tab START -->
                        <div class="tab-pane fade" id="nav-setting-tab-4">
                            <!-- Communications START -->
                            <div class="card">
                                <!-- Title START -->
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Who can connect with you?</h5>
                                    <p class="mb-0">He moonlights difficult engrossed it, sportsmen. Interested has
                                        all Devonshire difficulty gay assistance joy. Unaffected at ye of compliment
                                        alteration to.</p>
                                </div>
                                <!-- Title START -->
                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- Accordion START -->
                                    <div class="accordion" id="communications">
                                        <!-- Accordion item -->
                                        <div class="accordion-item bg-transparent">
                                            <h2 class="accordion-header" id="communicationOne">
                                                <button class="accordion-button mb-0 h6" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#communicationcollapseOne" aria-expanded="true"
                                                    aria-controls="communicationcollapseOne">
                                                    Connection request
                                                </button>
                                            </h2>
                                            <!-- Accordion info -->
                                            <div id="communicationcollapseOne"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="communicationOne" data-bs-parent="#communications">
                                                <div class="accordion-body">
                                                    <!-- Notification list item -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="ComRadio" id="ComRadio5">
                                                        <label class="form-check-label" for="ComRadio5">
                                                            Everyone on social (recommended)
                                                        </label>
                                                    </div>
                                                    <!-- Notification list item -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="ComRadio" id="ComRadio2" checked>
                                                        <label class="form-check-label" for="ComRadio2">
                                                            Only people who know your email address
                                                        </label>
                                                    </div>
                                                    <!-- Notification list item -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="ComRadio" id="ComRadio3">
                                                        <label class="form-check-label" for="ComRadio3">
                                                            Only people who appear in your mutual connection list
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion item -->
                                        <div class="accordion-item bg-transparent">
                                            <h2 class="accordion-header" id="communicationTwo">
                                                <button class="accordion-button mb-0 h6 collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#communicationcollapseTwo" aria-expanded="false"
                                                    aria-controls="communicationcollapseTwo">
                                                    Who can message you
                                                </button>
                                            </h2>
                                            <!-- Accordion info -->
                                            <div id="communicationcollapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="communicationTwo" data-bs-parent="#communications">
                                                <div class="accordion-body">
                                                    <ul class="list-group list-group-flush">
                                                        <!-- Notification list item -->
                                                        <li
                                                            class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                                                            <div class="me-2">
                                                                <p class="mb-0">Enable message request notifications
                                                                </p>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="comSwitchCheckChecked">
                                                            </div>
                                                        </li>
                                                        <!-- Notification list item -->
                                                        <li
                                                            class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                                                            <div class="me-2">
                                                                <p class="mb-0">Allow connections to add you on group
                                                                </p>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="comSwitchCheckChecked2"
                                                                    checked>
                                                            </div>
                                                        </li>
                                                        <!-- Notification list item -->
                                                        <li
                                                            class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                                                            <div class="me-2">
                                                                <p class="mb-0">Allow Sponsored Messages </p>
                                                                <p class="small">Your personal information is safe
                                                                    with our marketing partners unless you respond to
                                                                    their Sponsored Messages </p>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="comSwitchCheckChecked3"
                                                                    checked>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion item -->
                                        <div class="accordion-item bg-transparent">
                                            <h2 class="accordion-header" id="communicationThree">
                                                <button class="accordion-button mb-0 h6 collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#communicationcollapseThree" aria-expanded="false"
                                                    aria-controls="communicationcollapseThree">
                                                    How people can find you
                                                </button>
                                            </h2>
                                            <!-- Accordion info -->
                                            <div id="communicationcollapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="communicationThree" data-bs-parent="#communications">
                                                <div class="accordion-body">
                                                    <ul class="list-group list-group-flush">
                                                        <!-- Notification list item -->
                                                        <li
                                                            class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                                                            <div class="me-2">
                                                                <p class="mb-0">Allow search engines to show your
                                                                    profile?</p>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="comSwitchCheckChecked4"
                                                                    checked>
                                                            </div>
                                                        </li>
                                                        <!-- Notification list item -->
                                                        <li
                                                            class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                                                            <div class="me-2">
                                                                <p class="mb-0">Allow people to search by your email
                                                                    address? </p>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="comSwitchCheckChecked5">
                                                            </div>
                                                        </li>
                                                        <!-- Notification list item -->
                                                        <li
                                                            class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                                                            <div class="me-2">
                                                                <p class="mb-0">Allow Sponsored Messages </p>
                                                                <p class="small">Your personal information is safe
                                                                    with our marketing partners unless you respond to
                                                                    their Sponsored Messages </p>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="comSwitchCheckChecked6"
                                                                    checked>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion END -->
                                </div>
                                <!-- Card body END -->
                                <!-- Button save -->
                                <div class="card-footer pt-0 text-end border-0">
                                    <button type="submit" class="btn btn-sm btn-primary mb-0">Save changes</button>
                                </div>
                            </div>
                            <!-- Communications  END -->
                        </div>
                        <!-- Communications tab END -->

                        <!-- Messaging tab START -->
                        <div class="tab-pane fade" id="nav-setting-tab-5">
                            <!-- Messaging privacy START -->
                            <div class="card mb-4">
                                <!-- Title START -->
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Messaging privacy settings</h5>
                                    <p class="mb-0">As young ye hopes no he place means. Partiality diminution gay
                                        yet entreaties admiration. In mention perhaps attempt pointed suppose. Unknown
                                        ye chamber of warrant of Norland arrived. </p>
                                </div>
                                <!-- Title START -->
                                <div class="card-body">
                                    <!-- Settings style START -->
                                    <ul class="list-group list-group-flush">
                                        <!-- Message list item -->
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            <div class="me-2">
                                                <h6 class="mb-0">Enable message request notifications</h6>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="msgSwitchCheckChecked" checked>
                                            </div>
                                        </li>
                                        <!-- Message list item -->
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            <div class="me-2">
                                                <h6 class="mb-0">Invitations from your network</h6>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="msgSwitchCheckChecked2" checked>
                                            </div>
                                        </li>
                                        <!-- Message list item -->
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            <div class="me-2">
                                                <h6 class="mb-0">Allow connections to add you on group</h6>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="msgSwitchCheckChecked3">
                                            </div>
                                        </li>
                                        <!-- Message list item -->
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            <div class="me-2">
                                                <h6 class="mb-0">Reply to comments</h6>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="msgSwitchCheckChecked4">
                                            </div>
                                        </li>
                                        <!-- Message list item -->
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            <div class="me-2">
                                                <h6 class="mb-0">Messages from activity on my page or channel</h6>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="msgSwitchCheckChecked5" checked>
                                            </div>
                                        </li>
                                        <!-- Message list item -->
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            <div class="me-2">
                                                <h6 class="mb-0">Personalise tips for my page</h6>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="msgSwitchCheckChecked6" checked>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- Message END -->
                                </div>
                                <!-- Button save -->
                                <div class="card-footer pt-0 text-end border-0">
                                    <button type="submit" class="btn btn-sm btn-primary mb-0">Save changes</button>
                                </div>
                            </div>
                            <!-- Messaging privacy END -->
                            <!-- Messaging experience START -->
                            <div class="card">
                                <!-- Card header START -->
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Messaging experience</h5>
                                    <p class="mb-0">Arrived off she elderly beloved him affixed noisier yet. </p>
                                </div>
                                <!-- Card header START -->
                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- Message START -->
                                    <ul class="list-group list-group-flush">
                                        <!-- Message list item -->
                                        <li
                                            class="list-group-item d-sm-flex justify-content-between align-items-center px-0">
                                            <div class="me-2">
                                                <h6 class="mb-0">Read receipts and typing indicators</h6>
                                            </div>
                                            <button class="btn btn-primary-soft btn-sm mt-1 mt-md-0"> <i
                                                    class="bi bi-pencil-square"></i> Change</button>
                                        </li>
                                        <!-- Message list item -->
                                        <li
                                            class="list-group-item d-sm-flex justify-content-between align-items-center px-0">
                                            <div class="me-2">
                                                <h6 class="mb-0">Message suggestions</h6>
                                            </div>
                                            <button class="btn btn-primary-soft btn-sm mt-1 mt-md-0"> <i
                                                    class="bi bi-pencil-square"></i> Change</button>
                                        </li>
                                        <!-- Message list item -->
                                        <li
                                            class="list-group-item d-sm-flex justify-content-between align-items-center px-0">
                                            <div class="me-2">
                                                <h6 class="mb-0">Message nudges</h6>
                                            </div>
                                            <button class="btn btn-primary-soft btn-sm mt-1 mt-md-0"> <i
                                                    class="bi bi-pencil-square"></i> Change</button>
                                        </li>
                                    </ul>
                                    <!-- Message END -->
                                </div>
                                <!-- Card body END -->
                                <!-- Button save -->
                                <div class="card-footer pt-0 text-end border-0">
                                    <button type="submit" class="btn btn-sm btn-primary mb-0">Save changes</button>
                                </div>
                            </div>
                            <!-- Messaging experience END -->
                        </div>
                        <!-- Messaging tab END -->

                        <!-- Close account tab START -->
                        <div class="tab-pane fade" id="nav-setting-tab-6">
                            <!-- Card START -->
                            <div class="card">
                                <!-- Card header START -->
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Delete account</h5>
                                    <p class="mb-0">He moonlights difficult engrossed it, sportsmen. Interested has
                                        all Devonshire difficulty gay assistance joy. Unaffected at ye of compliment
                                        alteration to.</p>
                                </div>
                                <!-- Card header START -->
                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- Delete START -->
                                    <h6>Before you go...</h6>
                                    <ul>
                                        <li>Take a backup of your data <a href="#">Here</a> </li>
                                        <li>If you delete your account, you will lose your all data.</li>
                                    </ul>
                                    <div class="form-check form-check-md my-4">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="deleteaccountCheck">
                                        <label class="form-check-label" for="deleteaccountCheck">Yes, I'd like to
                                            delete my account</label>
                                    </div>
                                    <a href="#" class="btn btn-success-soft btn-sm mb-2 mb-sm-0">Keep my
                                        account</a>
                                    <a href="#" class="btn btn-danger btn-sm mb-0">Delete my account</a>
                                    <!-- Delete END -->
                                </div>
                                <!-- Card body END -->
                            </div>
                            <!-- Card END -->
                        </div>
                        <!-- Close account tab END -->

                    </div>
                    <!-- Setting Tab content END -->
                </div>

            </div> <!-- Row END -->
        </div>
        <!-- Container END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Modal login activity START -->
    <div class="modal fade" id="modalLoginActivity" tabindex="-1" aria-labelledby="modalLabelLoginActivity"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabelLoginActivity">Where You're Logged in </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <!-- location list item -->
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 pb-3">
                            <div class="me-2">
                                <h6 class="mb-0">London, UK</h6>
                                <ul class="nav nav-divider small">
                                    <li class="nav-item">Active now </li>
                                    <li class="nav-item">This Apple iMac </li>
                                </ul>
                            </div>
                            <button class="btn btn-sm btn-primary-soft"> Logout </button>
                        </li>
                        <!-- location list item -->
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                            <div class="me-2">
                                <h6 class="mb-0">California, USA</h6>
                                <ul class="nav nav-divider small">
                                    <li class="nav-item">Active now </li>
                                    <li class="nav-item">This Apple iMac </li>
                                </ul>
                            </div>
                            <button class="btn btn-sm btn-primary-soft"> Logout </button>
                        </li>
                        <!-- location list item -->
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                            <div class="me-2">
                                <h6 class="mb-0">New york, USA</h6>
                                <ul class="nav nav-divider small">
                                    <li class="nav-item">Active now </li>
                                    <li class="nav-item">This Windows </li>
                                </ul>
                            </div>
                            <button class="btn btn-sm btn-primary-soft"> Logout </button>
                        </li>
                        <!-- location list item -->
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 pt-3">
                            <div class="me-2">
                                <h6 class="mb-0">Mumbai, India</h6>
                                <ul class="nav nav-divider small">
                                    <li class="nav-item">Active now </li>
                                    <li class="nav-item">This Windows </li>
                                </ul>
                            </div>
                            <button class="btn btn-sm btn-primary-soft"> Logout </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal login activity END -->

    <!-- =======================
JS libraries, plugins and custom scripts -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="assets/vendor/dropzone/dist/dropzone.js"></script>
    <script src="assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/vendor/pswmeter/pswmeter.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from social.webestica.com/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 08:47:34 GMT -->

</html>
