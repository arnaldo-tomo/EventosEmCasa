<!DOCTYPE html>
<html lang="en">

<head>
    <title>Perfil - {{ Auth::user()->name }}</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Bootstrap 5 based Social Media Network and Community Theme">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
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



                    <ul class="navbar-nav navbar-nav-scroll ms-auto">

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
            <div class="row g-4">

                <!-- Sidenav START -->
                <div class="col-lg-3">

                    <!-- Advanced filter responsive toggler START -->
                    <div class="d-flex align-items-center d-lg-none">
                        <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasSideNavbar" aria-controls="offcanvasSideNavbar">
                            <i class="btn btn-primary fw-bold fa-solid fa-sliders-h"></i>
                            <span class="h6 mb-0 fw-bold d-lg-none ms-2">My profile</span>
                        </button>
                    </div>
                    <!-- Advanced filter responsive toggler END -->

                    <!-- Navbar START-->
                    <nav class="navbar navbar-expand-lg mx-0">
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
                            <!-- Offcanvas header -->
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close text-reset ms-auto"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>

                            <!-- Offcanvas body -->
                            <div class="offcanvas-body d-block px-2 px-lg-0">
                                <!-- Card START -->
                                <div class="card overflow-hidden">
                                    <!-- Cover image -->
                                    <div class="h-50px"
                                        style="background-image:url(assets/images/bg/01.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                    </div>
                                    <!-- Card body START -->
                                    <div class="card-body pt-0">
                                        <div class="text-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg mt-n5 mb-3">
                                                <a href="#!"><img
                                                        class="avatar-img rounded border border-white border-3"
                                                        src="assets/images/avatar/07.jpg" alt=""></a>
                                            </div>
                                            <!-- Info -->
                                            <h5 class="mb-0"> <a href="#!">{{ Auth::user()->name }} </a> </h5>
                                            <small>Web Developer at Webestica</small>
                                            <p class="mt-3">I'd love to change the world, but they won’t give me the
                                                source code.</p>

                                            <!-- User stat START -->
                                            <div class="hstack gap-2 gap-xl-3 justify-content-center">
                                                <!-- User stat item -->
                                                <div>
                                                    <h6 class="mb-0">256</h6>
                                                    <small>Post</small>
                                                </div>
                                                <!-- Divider -->
                                                <div class="vr"></div>
                                                <!-- User stat item -->
                                                <div>
                                                    <h6 class="mb-0">2.5K</h6>
                                                    <small>Followers</small>
                                                </div>
                                                <!-- Divider -->
                                                <div class="vr"></div>
                                                <!-- User stat item -->
                                                <div>
                                                    <h6 class="mb-0">365</h6>
                                                    <small>Following</small>
                                                </div>
                                            </div>
                                            <!-- User stat END -->
                                        </div>

                                        <!-- Divider -->
                                        <hr>

                                        <!-- Side Nav START -->
                                        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                                            <li class="nav-item">
                                                <a class="nav-link" href="my-profile.html"> <img
                                                        class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/home-outline-filled.svg"
                                                        alt=""><span>Feed </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="my-profile-connections.html"> <img
                                                        class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/person-outline-filled.svg"
                                                        alt=""><span>Connections </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="blog.html"> <img class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/earth-outline-filled.svg"
                                                        alt=""><span>Latest News </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="events.html"> <img
                                                        class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/calendar-outline-filled.svg"
                                                        alt=""><span>Events </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="groups.html"> <img
                                                        class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/chat-outline-filled.svg"
                                                        alt=""><span>Groups </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="notifications.html"> <img
                                                        class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/notification-outlined-filled.svg"
                                                        alt=""><span>Notifications </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="settings.html"> <img
                                                        class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/cog-outline-filled.svg"
                                                        alt=""><span>Settings </span></a>
                                            </li>
                                        </ul>
                                        <!-- Side Nav END -->
                                    </div>
                                    <!-- Card body END -->
                                    <!-- Card footer -->
                                    <div class="card-footer text-center py-2">
                                        <a class="btn btn-link btn-sm" href="my-profile.html">View Profile </a>
                                    </div>
                                </div>
                                <!-- Card END -->

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
                                        href="https://www.webestica.com/"> Webestica </a></p>
                            </div>
                        </div>
                    </nav>
                    <!-- Navbar END-->
                </div>
                <!-- Sidenav END -->

                <!-- Main content START -->
                <div class="col-md-8 col-lg-6 vstack gap-4">

                    <!-- Event alert START -->
                    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                        <strong>Upcoming event:</strong> The learning conference on Sep 19 2022
                        <a href="event-details.html" class="btn btn-xs btn-success mt-2 mt-lg-0 ms-lg-4">View
                            event</a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                    <!-- Event alert END -->

                    <!-- Card START -->
                    <div class="card h-100">
                        <!-- Card header START -->
                        <div
                            class="card-header d-sm-flex align-items-center text-center justify-content-sm-between border-0 pb-0">
                            <h1 class="h4 card-title">Descubra eventos</h1>
                            <!-- Button modal -->
                            <a class="btn btn-primary-soft" href="#" data-bs-toggle="modal"
                                data-bs-target="#modalCreateEvents"> <i class="fa-solid fa-plus pe-1"></i> Criar
                                Evento</a>
                        </div>
                        <!-- Card header START -->
                        <!-- Card body START -->
                        <div class="card-body">

                            <!-- Tab nav line -->
                            <ul class="nav nav-tabs nav-bottom-line justify-content-center justify-content-md-start">
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                        href="#tab-1"> Top </a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-2"> Local
                                    </a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-3"> This
                                        week </a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                                        Online </a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-5">
                                        Friends </a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-6">
                                        Following </a> </li>
                            </ul>
                            <!-- Tab content START -->
                            <div class="tab-content mb-0 pb-0">

                                <!-- Event top tab START -->
                                <div class="tab-pane fade show active" id="tab-1">
                                    <div class="row g-4">
                                        @if (session('novo'))
                                            <div class="alert alert-success alert-dismissible fade show"
                                                role="alert">
                                                <strong>Otimo,</strong> Evento publicado com sucessos
                                                <a href="{{ route('todos') }}"
                                                    class="btn btn-xs btn-success ms-md-4">Ver
                                                    todos
                                                    eventos</a>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif
                                        @if ($eventos->count() == 0)
                                            <!-- Upcoming event START -->
                                            <div class="alert alert-success alert-dismissible fade show"
                                                role="alert">
                                                <strong>Ola,{{ Auth::user()->name }}</strong> parece que nao tens nenhum
                                                evento
                                                publicado
                                                {{-- <a href="events.html" class="btn btn-xs btn-success ms-md-4">Criar um
                                                evento</a> --}}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            <!-- Upcoming event END -->
                                        @else
                                            @foreach ($eventos as $evento)
                                                <div class="col-sm-6 col-xl-4">
                                                    <!-- Event item START -->
                                                    <div class="card h-100">
                                                        <div class="position-relative">
                                                            <img class="img-fluid rounded-top"
                                                                src="/{{ $evento->imagen }}" alt="">
                                                            <div
                                                                class="badge bg-danger text-white mt-2 me-2 position-absolute top-0 end-0">
                                                                {{ $evento->localizacao }}
                                                            </div>
                                                        </div>
                                                        <!-- Card body START -->
                                                        <div class="card-body position-relative pt-0">
                                                            <!-- Tag -->
                                                            <a class="btn btn-xs btn-primary mt-n3"
                                                                href="event-details.html">{{ $evento->tipo_categoria }}</a>
                                                            <h6 class="mt-3"> <a href="event-details.html">
                                                                    {{ $evento->titulo }} </a>
                                                            </h6>
                                                            <!-- Date time -->
                                                            <p class="mb-0 small"> <i
                                                                    class="bi bi-calendar-check pe-1"></i>
                                                                {{ \Carbon\Carbon::parse($evento->dataInicio)->isoFormat('D MMM Y') }}
                                                                -
                                                                {{ $evento->hora }} Horas </p>
                                                            <p class="small"> <i class="bi bi-geo-alt pe-1"></i>
                                                                {{ $evento->cidade }} </p>
                                                            <!-- Avatar group START -->
                                                            <ul
                                                                class="avatar-group list-unstyled align-items-center mb-0">
                                                                <li class="avatar avatar-xs">
                                                                    <img class="avatar-img rounded-circle"
                                                                        src="assets/images/avatar/05.jpg"
                                                                        alt="avatar">
                                                                </li>
                                                                <li class="avatar avatar-xs">
                                                                    <img class="avatar-img rounded-circle"
                                                                        src="assets/images/avatar/06.jpg"
                                                                        alt="avatar">
                                                                </li>
                                                                <li class="avatar avatar-xs">
                                                                    <div class="avatar-img rounded-circle bg-primary">
                                                                        <span
                                                                            class="smaller text-white position-absolute top-50 start-50 translate-middle">+36</span>
                                                                    </div>
                                                                </li>
                                                                <li class="ms-3">
                                                                    <small> are attending</small>
                                                                </li>
                                                            </ul>
                                                            <!-- Avatar group END -->
                                                            <!-- Button -->
                                                            <div class="d-flex mt-3 justify-content-between">
                                                                <!-- Interested button -->
                                                                <div class="w-100">
                                                                    <input type="checkbox" class="btn-check d-block"
                                                                        id="Interested5">
                                                                    <label
                                                                        class="btn btn-sm btn-outline-success d-block"
                                                                        for="Interested5"><i
                                                                            class="fa-solid fa-thumbs-up me-1"></i>
                                                                        Interresante</label>
                                                                </div>
                                                                <div class="dropdown ms-3">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-primary-soft"
                                                                        id="eventActionShare5"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="bi bi-share-fill"></i>
                                                                    </a>
                                                                    <!-- Dropdown menu -->
                                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                                        aria-labelledby="eventActionShare5">
                                                                        <li><a class="dropdown-item" href="#">
                                                                                <i
                                                                                    class="bi bi-envelope fa-fw pe-1"></i>
                                                                                Send
                                                                                via Direct Message</a></li>
                                                                        <li><a class="dropdown-item" href="#">
                                                                                <i
                                                                                    class="bi bi-bookmark-check fa-fw pe-1"></i>
                                                                                Share to News Feed </a></li>
                                                                        <li><a class="dropdown-item" href="#">
                                                                                <i class="bi bi-people fa-fw pe-1"></i>
                                                                                Share
                                                                                to a group</a></li>
                                                                        <li><a class="dropdown-item" href="#">
                                                                                <i class="bi bi-share fa-fw pe-1"></i>
                                                                                Share
                                                                                post via …</a></li>
                                                                        <li>
                                                                            <hr class="dropdown-divider">
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">
                                                                                <i class="bi bi-person fa-fw pe-1"></i>
                                                                                Share
                                                                                on a friend's profile</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Card body END -->
                                                    </div>
                                                    <!-- Event item END -->
                                                </div>
                                            @endforeach
                                        @endif
                                        {{ $eventos->Links() }}


                                    </div>
                                </div>
                                <!-- Event top tab END -->

                                <!-- Event local tab START -->
                                <div class="tab-pane fade" id="tab-2">
                                    <div class="row g-4">
                                        <div class="col-sm-6 col-xl-4">
                                            <!-- Event item START -->
                                            <div class="card h-100">
                                                <div class="position-relative">
                                                    <img class="img-fluid rounded-top"
                                                        src="assets/images/events/04.jpg" alt="">
                                                </div>
                                                <!-- Card body START -->
                                                <div class="card-body position-relative pt-0">
                                                    <!-- Tag -->
                                                    <a class="btn btn-xs btn-primary mt-n3"
                                                        href="event-details.html">Live show</a>
                                                    <h6 class="mt-3"> <a href="event-details.html"> America 50th
                                                            anniversary </a> </h6>
                                                    <!-- Date time -->
                                                    <p class="mb-0 small"> <i class="bi bi-calendar-check pe-1"></i>
                                                        Fri, Oct 05, 2022 at 1:00 AM </p>
                                                    <p class="small"> <i class="bi bi-geo-alt pe-1"></i> Miami </p>
                                                    <!-- Avatar group START -->
                                                    <ul class="avatar-group list-unstyled align-items-center mb-0">
                                                        <li class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/06.jpg" alt="avatar">
                                                        </li>
                                                        <li class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/02.jpg" alt="avatar">
                                                        </li>
                                                        <li class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/04.jpg" alt="avatar">
                                                        </li>
                                                        <li class="avatar avatar-xs">
                                                            <div class="avatar-img rounded-circle bg-primary"><span
                                                                    class="smaller text-white position-absolute top-50 start-50 translate-middle">+20</span>
                                                            </div>
                                                        </li>
                                                        <li class="ms-3">
                                                            <small> are attending</small>
                                                        </li>
                                                    </ul>
                                                    <!-- Avatar group END -->
                                                    <!-- Button -->
                                                    <div class="d-flex mt-3 justify-content-between">
                                                        <!-- Interested button -->
                                                        <div class="w-100">
                                                            <input type="checkbox" class="btn-check d-block"
                                                                id="Interested6" checked>
                                                            <label class="btn btn-sm btn-outline-success d-block"
                                                                for="Interested6"><i
                                                                    class="fa-solid fa-thumbs-up me-1"></i>
                                                                Interested</label>
                                                        </div>
                                                        <div class="dropdown ms-3">
                                                            <a href="#" class="btn btn-sm btn-primary-soft"
                                                                id="eventActionShare6" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="bi bi-share-fill"></i>
                                                            </a>
                                                            <!-- Dropdown menu -->
                                                            <ul class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="eventActionShare6">
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-envelope fa-fw pe-1"></i> Send
                                                                        via Direct Message</a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-bookmark-check fa-fw pe-1"></i>
                                                                        Share to News Feed </a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-people fa-fw pe-1"></i> Share
                                                                        to a group</a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-share fa-fw pe-1"></i> Share
                                                                        post via …</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-person fa-fw pe-1"></i> Share
                                                                        on a friend's profile</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Card body END -->
                                            </div>
                                            <!-- Event item END -->
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <!-- Event item START -->
                                            <div class="card h-100">
                                                <div class="position-relative">
                                                    <img class="img-fluid rounded-top"
                                                        src="assets/images/events/05.jpg" alt="">
                                                    <div
                                                        class="badge bg-danger text-white mt-2 me-2 position-absolute top-0 end-0">
                                                        Beach
                                                    </div>
                                                </div>
                                                <!-- Card body START -->
                                                <div class="card-body position-relative pt-0">
                                                    <!-- Tag -->
                                                    <a class="btn btn-xs btn-primary mt-n3"
                                                        href="event-details.html">Meeting</a>
                                                    <h6 class="mt-3"> <a href="event-details.html"> Back to abnormal
                                                        </a> </h6>
                                                    <!-- Date time -->
                                                    <p class="mb-0 small"> <i class="bi bi-calendar-check pe-1"></i>
                                                        Wen, Dec 16, 2022 at 5:00 AM </p>
                                                    <p class="small"> <i class="bi bi-geo-alt pe-1"></i> London </p>
                                                    <!-- Avatar group START -->
                                                    <ul class="avatar-group list-unstyled align-items-center mb-0">
                                                        <li class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/05.jpg" alt="avatar">
                                                        </li>
                                                        <li class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/06.jpg" alt="avatar">
                                                        </li>
                                                        <li class="avatar avatar-xs">
                                                            <div class="avatar-img rounded-circle bg-primary"><span
                                                                    class="smaller text-white position-absolute top-50 start-50 translate-middle">+45</span>
                                                            </div>
                                                        </li>
                                                        <li class="ms-3">
                                                            <small> are attending</small>
                                                        </li>
                                                    </ul>
                                                    <!-- Avatar group END -->
                                                    <!-- Button -->
                                                    <div class="d-flex mt-3 justify-content-between">
                                                        <!-- Interested button -->
                                                        <div class="w-100">
                                                            <input type="checkbox" class="btn-check d-block"
                                                                id="Interested7">
                                                            <label class="btn btn-sm btn-outline-success d-block"
                                                                for="Interested7"><i
                                                                    class="fa-solid fa-thumbs-up me-1"></i>
                                                                Interested</label>
                                                        </div>
                                                        <div class="dropdown ms-3">
                                                            <a href="#" class="btn btn-sm btn-primary-soft"
                                                                id="eventActionShare7" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="bi bi-share-fill"></i>
                                                            </a>
                                                            <!-- Dropdown menu -->
                                                            <ul class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="eventActionShare7">
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-envelope fa-fw pe-1"></i> Send
                                                                        via Direct Message</a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-bookmark-check fa-fw pe-1"></i>
                                                                        Share to News Feed </a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-people fa-fw pe-1"></i> Share
                                                                        to a group</a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-share fa-fw pe-1"></i> Share
                                                                        post via …</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-person fa-fw pe-1"></i> Share
                                                                        on a friend's profile</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Card body END -->
                                            </div>
                                            <!-- Event item END -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Event local tab END -->

                                <!-- Event This week tab START -->
                                <div class="tab-pane fade" id="tab-3">
                                    <div class="row g-4">
                                        <div class="col-sm-6 col-xl-4">
                                            <!-- Event item START -->
                                            <div class="card h-100">
                                                <div class="position-relative">
                                                    <img class="img-fluid rounded-top"
                                                        src="assets/images/events/03.jpg" alt="">
                                                    <div
                                                        class="badge bg-danger text-white mt-2 me-2 position-absolute top-0 end-0">
                                                        Beach
                                                    </div>
                                                </div>
                                                <!-- Card body START -->
                                                <div class="card-body position-relative pt-0">
                                                    <!-- Tag -->
                                                    <a class="btn btn-xs btn-primary mt-n3"
                                                        href="event-details.html">Meeting</a>
                                                    <h6 class="mt-3"> <a href="event-details.html"> Old dominion
                                                        </a> </h6>
                                                    <!-- Date time -->
                                                    <p class="mb-0 small"> <i class="bi bi-calendar-check pe-1"></i>
                                                        Wen, Dec 16, 2022 at 5:00 AM </p>
                                                    <p class="small"> <i class="bi bi-geo-alt pe-1"></i> London </p>
                                                    <!-- Avatar group START -->
                                                    <ul class="avatar-group list-unstyled align-items-center mb-0">
                                                        <li class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/05.jpg" alt="avatar">
                                                        </li>
                                                        <li class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/06.jpg" alt="avatar">
                                                        </li>
                                                        <li class="avatar avatar-xs">
                                                            <div class="avatar-img rounded-circle bg-primary"><span
                                                                    class="smaller text-white position-absolute top-50 start-50 translate-middle">+85</span>
                                                            </div>
                                                        </li>
                                                        <li class="ms-3">
                                                            <small> are attending</small>
                                                        </li>
                                                    </ul>
                                                    <!-- Avatar group END -->
                                                    <!-- Button -->
                                                    <div class="d-flex mt-3 justify-content-between">
                                                        <!-- Interested button -->
                                                        <div class="w-100">
                                                            <input type="checkbox" class="btn-check d-block"
                                                                id="Interested8">
                                                            <label class="btn btn-sm btn-outline-success d-block"
                                                                for="Interested8"><i
                                                                    class="fa-solid fa-thumbs-up me-1"></i>
                                                                Interested</label>
                                                        </div>
                                                        <div class="dropdown ms-3">
                                                            <a href="#" class="btn btn-sm btn-primary-soft"
                                                                id="eventActionShare8" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="bi bi-share-fill"></i>
                                                            </a>
                                                            <!-- Dropdown menu -->
                                                            <ul class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="eventActionShare8">
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-envelope fa-fw pe-1"></i> Send
                                                                        via Direct Message</a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-bookmark-check fa-fw pe-1"></i>
                                                                        Share to News Feed </a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-people fa-fw pe-1"></i> Share
                                                                        to a group</a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-share fa-fw pe-1"></i> Share
                                                                        post via …</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-person fa-fw pe-1"></i> Share
                                                                        on a friend's profile</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Card body END -->
                                            </div>
                                            <!-- Event item END -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Event This week tab END -->

                                <!-- Event Online tab START -->
                                <div class="tab-pane fade" id="tab-4">
                                    <div class="row g-4">
                                        <div class="col-sm-6 col-xl-4">
                                            <!-- Event item START -->
                                            <div class="card h-100">
                                                <div class="position-relative">
                                                    <img class="img-fluid rounded-top"
                                                        src="assets/images/events/01.jpg" alt="">
                                                    <div
                                                        class="badge bg-danger text-white mt-2 me-2 position-absolute top-0 end-0">
                                                        Online
                                                    </div>
                                                </div>
                                                <!-- Card body START -->
                                                <div class="card-body position-relative pt-0">
                                                    <!-- Tag -->
                                                    <a class="btn btn-xs btn-primary mt-n3"
                                                        href="event-details.html">Spa training </a>
                                                    <h6 class="mt-3"> <a href="event-details.html"> Beach event
                                                        </a> </h6>
                                                    <!-- Date time -->
                                                    <p class="mb-0 small"> <i class="bi bi-calendar-check pe-1"></i>
                                                        Mon, Sep 25, 2020 at 9:30 AM </p>
                                                    <p class="small"> <i class="bi bi-geo-alt pe-1"></i> San
                                                        francisco </p>
                                                    <!-- Avatar group START -->
                                                    <ul class="avatar-group list-unstyled align-items-center mb-0">
                                                        <li class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/01.jpg" alt="avatar">
                                                        </li>
                                                        <li class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/03.jpg" alt="avatar">
                                                        </li>
                                                        <li class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/04.jpg" alt="avatar">
                                                        </li>
                                                        <li class="avatar avatar-xs">
                                                            <div class="avatar-img rounded-circle bg-primary"><span
                                                                    class="smaller text-white position-absolute top-50 start-50 translate-middle">+46</span>
                                                            </div>
                                                        </li>
                                                        <li class="ms-3">
                                                            <small> are attending</small>
                                                        </li>
                                                    </ul>
                                                    <!-- Avatar group END -->
                                                    <!-- Button -->
                                                    <div class="d-flex mt-3 justify-content-between">
                                                        <!-- Interested button -->
                                                        <div class="w-100">
                                                            <input type="checkbox" class="btn-check d-block"
                                                                id="Interested9" checked>
                                                            <label class="btn btn-sm btn-outline-success d-block"
                                                                for="Interested9"><i
                                                                    class="fa-solid fa-thumbs-up me-1"></i>
                                                                Interested</label>
                                                        </div>
                                                        <div class="dropdown ms-3">
                                                            <a href="#" class="btn btn-sm btn-primary-soft"
                                                                id="eventActionShare9" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="bi bi-share-fill"></i>
                                                            </a>
                                                            <!-- Dropdown menu -->
                                                            <ul class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="eventActionShare9">
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-envelope fa-fw pe-1"></i>
                                                                        Send via Direct Message</a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-bookmark-check fa-fw pe-1"></i>
                                                                        Share to News Feed </a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-people fa-fw pe-1"></i> Share
                                                                        to a group</a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-share fa-fw pe-1"></i> Share
                                                                        post via …</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-person fa-fw pe-1"></i> Share
                                                                        on a friend's profile</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Card body END -->
                                            </div>
                                            <!-- Event item END -->
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <!-- Event item START -->
                                            <div class="card h-100">
                                                <div class="position-relative">
                                                    <img class="img-fluid rounded-top"
                                                        src="assets/images/events/04.jpg" alt="">
                                                </div>
                                                <!-- Card body START -->
                                                <div class="card-body position-relative pt-0">
                                                    <!-- Tag -->
                                                    <a class="btn btn-xs btn-primary mt-n3"
                                                        href="event-details.html">Live show</a>
                                                    <h6 class="mt-3"> <a href="event-details.html"> Lewis black
                                                            tickets </a> </h6>
                                                    <!-- Date time -->
                                                    <p class="mb-0 small"> <i class="bi bi-calendar-check pe-1"></i>
                                                        Fri, Oct 05, 2022 at 1:00 AM </p>
                                                    <p class="small"> <i class="bi bi-geo-alt pe-1"></i> Miami </p>
                                                    <!-- Avatar group START -->
                                                    <ul class="avatar-group list-unstyled align-items-center mb-0">
                                                        <li class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/06.jpg" alt="avatar">
                                                        </li>
                                                        <li class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/02.jpg" alt="avatar">
                                                        </li>
                                                        <li class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/04.jpg" alt="avatar">
                                                        </li>
                                                        <li class="avatar avatar-xs">
                                                            <div class="avatar-img rounded-circle bg-primary"><span
                                                                    class="smaller text-white position-absolute top-50 start-50 translate-middle">+75</span>
                                                            </div>
                                                        </li>
                                                        <li class="ms-3">
                                                            <small> are attending</small>
                                                        </li>
                                                    </ul>
                                                    <!-- Avatar group END -->
                                                    <!-- Button -->
                                                    <div class="d-flex mt-3 justify-content-between">
                                                        <!-- Interested button -->
                                                        <div class="w-100">
                                                            <input type="checkbox" class="btn-check d-block"
                                                                id="Interested10">
                                                            <label class="btn btn-sm btn-outline-success d-block"
                                                                for="Interested10"><i
                                                                    class="fa-solid fa-thumbs-up me-1"></i>
                                                                Interested</label>
                                                        </div>
                                                        <div class="dropdown ms-3">
                                                            <a href="#" class="btn btn-sm btn-primary-soft"
                                                                id="eventActionShare10" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="bi bi-share-fill"></i>
                                                            </a>
                                                            <!-- Dropdown menu -->
                                                            <ul class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="eventActionShare10">
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-envelope fa-fw pe-1"></i>
                                                                        Send via Direct Message</a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-bookmark-check fa-fw pe-1"></i>
                                                                        Share to News Feed </a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-people fa-fw pe-1"></i> Share
                                                                        to a group</a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-share fa-fw pe-1"></i> Share
                                                                        post via …</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-person fa-fw pe-1"></i> Share
                                                                        on a friend's profile</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Card body END -->
                                            </div>
                                            <!-- Event item END -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Event Online tab END -->

                                <!-- Event Friends tab START -->
                                <div class="tab-pane fade text-center" id="tab-5">
                                    <!-- Add events -->
                                    <div class="my-sm-5 py-sm-5">
                                        <i class="display-1 text-muted bi bi-calendar2-event"> </i>
                                        <h4 class="mt-2 mb-3 text-body">No events found</h4>
                                        <button class="btn btn-primary-soft btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modalCreateEvents"> Click here to add </button>
                                    </div>
                                </div>
                                <!-- Event Friends tab END -->

                                <!-- Event Following tab START -->
                                <div class="tab-pane fade text-center" id="tab-6">
                                    <!-- Add events -->
                                    <div class="my-sm-5 py-sm-5">
                                        <i class="display-1 text-muted bi bi-calendar2-event"> </i>
                                        <h4 class="mt-2 mb-3 text-body">No events found</h4>
                                        <button class="btn btn-primary-soft btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modalCreateEvents"> Click here to add </button>
                                    </div>
                                </div>
                                <!-- Event Following tab END -->
                            </div>
                            <!-- Tab content END -->
                        </div>
                        <!-- Card body END -->
                    </div>
                    <!-- Card END -->
                </div>

            </div> <!-- Row END -->
        </div>
        <!-- Container END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Modal create events START -->
    <div class="modal fade" id="modalCreateEvents" tabindex="-1" aria-labelledby="modalLabelCreateEvents"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal feed header START -->
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabelCreateEvents">Criar evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal feed header END -->
                <!-- Modal feed body START -->
                <div class="modal-body">
                    <!-- Form START -->
                    <form method="POST" action="{{ route('salvar') }}" enctype="multipart/form-data"
                        class="row g-4">
                        @csrf
                        <!-- Title -->
                        <div class="col-12">
                            <label class="form-label">Titulo</label>
                            <input type="text" class="form-control" name="nome" placeholder="Nome do evento">
                        </div>
                        <!-- Description -->
                        <div class="col-12">
                            <label class="form-label">Descrição</label>
                            <textarea class="form-control" rows="2" name="descricao" placeholder="Ex: topicos, Cronograma, etc."></textarea>
                        </div>
                        <!-- Duração -->
                        <div class="col-sm-6">
                            <label class="form-label">Data Inicial</label>
                            <input type="date" class="form-control flatpickr" name="dataInicio"
                                placeholder="Select date">
                        </div>
                        <!-- Duração -->
                        <!-- Duração -->
                        <div class="col-sm-6">
                            <label class="form-label">Data do final </label>
                            <input type="date" class="form-control flatpickr" name="dataFim"
                                placeholder="Select date">
                        </div>

                        <!-- Duração -->
                        <!-- Date -->
                        <div class="col-sm-3">
                            <label class="form-label">Duração</label>
                            <input type="duracao" class="form-control" name="duracao" placeholder="1hr 23m">
                        </div>
                        <!-- Date final -->
                        <div class="col-sm-6">
                            <label class="form-label">Publico Ou Privado</label>
                            <select class="form-select form-select" name="privado"
                                aria-label=".form-select-lg example">
                                <option disabled selected>-------------Escolha------------</option>
                                <option value="0">publico</option>
                                <option value="1">privado</option>

                            </select>
                        </div>
                        <!-- Time -->
                        <div class="col-sm-3">
                            <label class="form-label">Hora</label>
                            <input type="time" class="form-control flatpickr" name="hora"
                                data-enableTime="true" data-noCalendar="true" placeholder="Select time">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Localização</label>
                            <input type="text" class="form-control" id="pac-inpute" name="localizacao"
                                placeholder="Ex:Beira-Moçambique, Munhava Rua Gross Gomes 47">
                        </div>
                        <!-- Location -->
                        <div class="col-12">
                            <label class="form-label">Cidade</label>
                            <select class="form-select form-select" name="cidade"
                                aria-label=".form-select-lg example">
                                <option disabled selected>Escolha a cidade</option>
                                <option value="Beira">Beira</option>
                                <option value="Maputo">Maputo</option>
                                <option value="#">Nampula</option>
                                <option value="#">CaboDelegado</option>
                                <option value="#">Chimoio</option>
                                <option value="#">Chimoio</option>
                            </select>
                        </div>
                        <!-- Location -->
                        <!-- Tipo de evento -->
                        <div class="col-12">
                            <label class="form-label">Tipo & categoria de evento</label>
                            <select class="form-select form-select" name="categoria"
                                aria-label=".form-select-lg example">
                                <option disabled selected>Escolha o tipo de evento</option>
                                <option value="Festa">Festa</option>
                                <option value="Culto">Culto</option>
                                <option value="#">Nampula</option>
                                <option value="#">CaboDelegado</option>
                                <option value="#">Chimoio</option>
                                <option value="#">Chimoio</option>
                            </select>
                        </div>
                        <!-- Tipo de evento -->
                        <!-- Add guests -->
                        <div class="col-12">
                            <label class="form-label">Addicionar Participantes</label>
                            <input type="email" class="form-control" name="participante"
                                placeholder="Exemplo:joaocarlos@gmail.com">
                        </div>
                        <!-- Avatar group START -->
                        <div class="col-12 mt-3">
                            <ul class="avatar-group list-unstyled align-items-center mb-0">
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg"
                                        alt="avatar">
                                </li>
                                <li class="ms-3">
                                    <small> +50 </small>
                                </li>
                            </ul>
                        </div>
                        {{-- FIle manger --}}
                        <div class="col-12">
                            <label class="form-label">Carregar Fotografia</label>
                            <input type="file" class="form-control" name="imagen">
                        </div>
                        {{-- FIle manger --}}
                        <!-- Dropzone photo START -->
                        <div class="mb-3">
                            <label class="form-label">Carregar Anexo</label>
                            <div name="anexo" class="dropzone  dropzone-default card shadow-none"
                                data-dropzone='{"maxFiles":2}'>
                                <div class="dz-message">
                                    <i class="bi bi-file-earmark-text display-3"></i>
                                    <p>Solte a Apresentação e o documento aqui ou clique para
                                        carregar.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Dropzone photo END -->
                        <!-- Form END -->
                </div>
                <!-- Modal feed body END -->
                <!-- Modal footer -->
                <!-- Button -->
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-danger-soft me-2" data-bs-dismiss="modal">
                        Cancelar</button>
                    <button type="submit" class="btn btn-success-soft">Criar Agora</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal create events END -->

    <!-- =======================
JS libraries, plugins and custom scripts -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/dropzone/dist/dropzone.js"></script>
    <script src="assets/vendor/flatpickr/dist/flatpickr.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from social.webestica.com/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 08:44:07 GMT -->

</html>
