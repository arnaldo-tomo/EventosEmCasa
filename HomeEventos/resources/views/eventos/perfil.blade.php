<!DOCTYPE html>
<html lang="en">

<head>
    <title>Perfil - {{ $info->name }}</title>
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
    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/OverlayScrollbars-master/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/dist/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices.js/public/assets/styles/choices.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/glightbox-master/dist/css/glightbox.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/dropzone/dist/dropzone.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/flatpickr/dist/flatpickr.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/plyr/plyr.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/glightbox-master/dist/css/glightbox.min.css">

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

                            <li><a class="dropdown-item bg-danger-soft-hover" href="/Terminar"><i
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
                                            <h5 class="mb-0"> <a href="#!">{{ $info->name }} </a> </h5>
                                            <small>{{ $info->email }}</small>
                                            <p class="mt-3">I'd love to change the world, but they won’t give me the
                                                source code.</p>

                                            <!-- User stat START -->
                                            <div class="hstack gap-2 gap-xl-3 justify-content-center">
                                                <!-- User stat item -->
                                                <div>
                                                    <h6 class="mb-0">{{ $total->count() }}</h6>
                                                    <small>Eventos</small>
                                                </div>
                                                <!-- Divider -->
                                                <div class="vr"></div>
                                                <!-- User stat item -->
                                                <div>
                                                    <h6 class="mb-0">2</h6>
                                                    <small>Particpando</small>
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
                                                <a class="nav-link active" href="Perfil"> <img
                                                        class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/calendar-outline-filled.svg"
                                                        alt=""><span>Eventos </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="Configuracoes"> <img
                                                        class="me-2 h-20px fa-fw"
                                                        src="assets/images/icon/cog-outline-filled.svg"
                                                        alt=""><span>Configurações </span></a>
                                            </li>
                                        </ul>
                                        <!-- Side Nav END -->
                                    </div>
                                    <!-- Card body END -->
                                    <!-- Card footer -->
                                    <div class="card-footer text-center py-2">
                                        <a class="btn btn-link btn-sm" href="my-profile.html">Ver Profile </a>
                                    </div>
                                </div>
                                <!-- Card END -->

                                <!-- Helper link START -->
                                <ul class="nav small mt-4 justify-content-center lh-1">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/Sobre">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/Configuracoes">Configurações</a>
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
                                        href="https://www.webestica.com/"> {{ Config('app.name') }} </a></p>
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
                                        href="#tab-1"> Meus Eventos </a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-2"> Local
                                    </a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                                        Estas Semana </a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                                        Online </a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-5">
                                        Participando </a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-6">
                                        Following </a> </li>
                            </ul>
                            <!-- Tab content START -->
                            <div class="tab-content mb-0 pb-0">

                                <!-- Event top tab START -->
                                <div class="tab-pane fade show active" id="tab-1">
                                    <div class="row g-4">
                                        @foreach ($eventos as $evento)
                                            <div class="d-sm-flex align-items-center mb-2">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-xl">
                                                    <a href="#!"><img
                                                            class="avatar-img rounded border border-white border-3"
                                                            src="/{{ $evento->imagen }}" alt=""></a>
                                                </div>
                                                <div class="ms-sm-4 mt-2 mt-sm-0">
                                                    <!-- Info -->
                                                    <h5 class="mb-1"><a href="event-details.html">
                                                            {{ $evento->titulo }}
                                                        </a>
                                                    </h5>
                                                    <ul class="nav nav-stack small">
                                                        <li class="nav-item">
                                                            <i class="bi bi-calendar-check pe-1"></i>
                                                            {{ \Carbon\Carbon::parse($evento->dataInicio)->isoFormat('D MMM Y') }}
                                                            -
                                                            {{ $evento->hora }} Horas
                                                        </li>
                                                        <li class="nav-item">
                                                            <i class="bi bi-geo-alt pe-1"></i>
                                                            {{ $evento->cidades->nome }}
                                                        </li>
                                                        <li class="nav-item">
                                                            <i class="bi bi-people pe-1"></i> 77 going
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Button -->
                                                <div class="d-flex mt-3 ms-auto">
                                                    <div class="dropdown">
                                                        <!-- Card share action menu -->
                                                        <button class="icon-md btn btn-secondary-soft" type="button"
                                                            id="profileAction" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </button>
                                                        <!-- Card share action dropdown menu -->
                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="profileAction">
                                                            <li><a class="dropdown-item" href="#"> <i
                                                                        class="fa fa-edit fa-fw pe-2"></i>
                                                                    Editar</a></li>

                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"> <i
                                                                        class="bi bi-trash fa-fw pe-2"></i>Deletar</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                    {{ $eventos->links() }}
                                </div>

                                <!-- Event top tab END -->

                                <!-- Event local tab START -->
                                <div class="tab-pane fade" id="tab-2">
                                    <div class="row g-4">

                                        @forelse ($local as $evento)
                                            <div class="col-sm-6 col-xl-4">
                                                <!-- Event item START -->
                                                <div class="card h-100">
                                                    <div class="position-relative">
                                                        <img class="img-fluid rounded-top"
                                                            src="/{{ $evento->imagen }}" alt="">
                                                    </div>
                                                    <!-- Card body START -->
                                                    <div class="card-body position-relative pt-0">
                                                        <!-- Tag -->
                                                        <a class="btn btn-xs btn-primary mt-n3"
                                                            href="event-details.html">Live show</a>
                                                        <h6 class="mt-3"> <a href="event-details.html">
                                                                {{ $evento->titulo }} </a> </h6>
                                                        <!-- Date time -->
                                                        <p class="mb-0 small"> <i
                                                                class="bi bi-calendar-check pe-1"></i>
                                                            {{ \Carbon\Carbon::parse($evento->dataInicio)->isoFormat('D MMM Y') }}
                                                            -
                                                            {{ $evento->hora }} Horas</p>
                                                        <p class="small"> <i class="bi bi-geo-alt pe-1"></i>
                                                            {{ $evento->localizacao }}
                                                        </p>
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
                                                    </div>
                                                    <!-- Card body END -->
                                                </div>
                                                <!-- Event item END -->
                                            </div>
                                        @empty
                                            <div class="text-center">
                                                <div class="my-sm-5 py-sm-5">
                                                    <i class="display-1 text-muted bi bi-calendar2-event"> </i>
                                                    <h4 class="mt-2 mb-3 text-body">Nenhum evento encontrado</h4>
                                                    <button class="btn btn-primary-soft btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#modalCreateEvents"> clique aque para criar um
                                                        evento </button>
                                                </div>
                                            </div>
                                        @endforelse


                                    </div>
                                    {{ $local->links() }}
                                </div>
                                <!-- Event local tab END -->

                                <!-- Event This week tab START -->
                                <div class="tab-pane fade" id="tab-3">
                                    <div class="row g-4">
                                        @forelse ($estaSemana as $evento)
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
                                                        <p class="mb-0 small"> <i
                                                                class="bi bi-calendar-check pe-1"></i>
                                                            Wen, Dec 16, 2022 at 5:00 AM </p>
                                                        <p class="small"> <i class="bi bi-geo-alt pe-1"></i> London
                                                        </p>
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
                                                                                class="bi bi-envelope fa-fw pe-1"></i>
                                                                            Send
                                                                            via Direct Message</a></li>
                                                                    <li><a class="dropdown-item" href="#"> <i
                                                                                class="bi bi-bookmark-check fa-fw pe-1"></i>
                                                                            Share to News Feed </a></li>
                                                                    <li><a class="dropdown-item" href="#"> <i
                                                                                class="bi bi-people fa-fw pe-1"></i>
                                                                            Share
                                                                            to a group</a></li>
                                                                    <li><a class="dropdown-item" href="#"> <i
                                                                                class="bi bi-share fa-fw pe-1"></i>
                                                                            Share
                                                                            post via …</a></li>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="#"> <i
                                                                                class="bi bi-person fa-fw pe-1"></i>
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
                                        @empty
                                            <div class="text-center">
                                                <div class="my-sm-5 py-sm-5">
                                                    <i class="display-1 text-muted bi bi-calendar2-event"> </i>
                                                    <h4 class="mt-2 mb-3 text-body">Sem eventos para esta semana</h4>
                                                    <button class="btn btn-primary-soft btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#modalCreateEvents"> Click here to add
                                                    </button>
                                                </div>
                                            </div>
                                        @endforelse

                                    </div>
                                </div>
                                <!-- Event This week tab END -->

                                <!-- Event Online tab START -->
                                <div class="tab-pane fade" id="tab-4">
                                    <div class="row g-4">
                                        @forelse ($online as $evento)
                                            <div class="col-sm-6 col-xl-4">
                                                <!-- Event item START -->
                                                <div class="card h-100">
                                                    <div class="position-relative">
                                                        <img class="img-fluid rounded-top"
                                                            src="{{ $evento->imagen }}" alt="">
                                                        <div
                                                            class="badge bg-danger text-white mt-2 me-2 position-absolute top-0 end-0">
                                                            <i class="fa fa-map-pin"></i>
                                                            {{ $evento->localizacao }}
                                                        </div>
                                                    </div>
                                                    <!-- Card body START -->
                                                    <div
                                                        class="card-body
                                                                position-relative pt-0">
                                                        <!-- Tag -->
                                                        <a class="btn btn-xs btn-primary mt-n3"
                                                            href="event-details.html"><i
                                                                class="fa fa-video-camera"></i>
                                                            {{ $evento->categoria->nome }} <i
                                                                class=" fa fa-clock"></i>
                                                            {{ $evento->hora }} </a>
                                                        <h6 class="mt-3"> <a href="event-details.html">
                                                                {{ $evento->titulo }}
                                                            </a> </h6>
                                                        <!-- Date time -->
                                                        <p class="mb-0 small"> <i
                                                                class="bi bi-calendar-check pe-1"></i>
                                                            {{ \Carbon\Carbon::parse($evento->dataInicio)->isoFormat('D MMM Y') }}
                                                        </p>
                                                        <p class="small"> <i class="bi bi-geo-alt pe-1"></i>
                                                            {{ $evento->cidades->nome }} </p>
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
                                                                <div class="avatar-img rounded-circle bg-primary">
                                                                    <span
                                                                        class="smaller text-white position-absolute top-50 start-50 translate-middle">+46</span>
                                                                </div>
                                                            </li>
                                                            <li class="ms-3">
                                                                <small> are attending</small>
                                                            </li>
                                                        </ul>
                                                        <!-- Avatar group END -->
                                                    </div>
                                                    <!-- Card body END -->
                                                </div>
                                                <!-- Event item END -->
                                            </div>
                                        @empty
                                            <div class="text-center">
                                                <div class="my-sm-5 py-sm-5">
                                                    <i class="display-1 text-muted bi bi-calendar2-event"> </i>
                                                    <h4 class="mt-2 mb-3 text-body">No events found</h4>
                                                    <button class="btn btn-primary-soft btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#modalCreateEvents"> Click here to add
                                                    </button>
                                                </div>
                                            </div>
                                        @endforelse


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
    <!-- Modal criar events  -->
    <div class="modal fade" id="modalCreateEvents" aria-labelledby="modalLabelCreateEvents" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal feed header START -->
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabelCreateEvents">Criar evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal feed header END -->
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger role">
                            <div class="display">
                                <strong> {{ $error }}</strong>
                            </div>
                        </div>
                    @endforeach
                @endif
                <!-- Modal feed body START -->
                <div class="modal-body">
                    <!-- Form START -->
                    <form method="POST" action="{{ url('/Salvar') }}" enctype="multipart/form-data"
                        class="row g-4" id="file-upload-form" class="uploader">
                        @csrf


                        <!-- Title -->
                        <div class="col-12">
                            <label class="form-label">Titulo</label>
                            <input type="text" class="form-control @error('titulo') is-invalid @enderror"
                                value="{{ old('titulo') }}" name="titulo" placeholder="Titulo do evento">
                            @error('titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <!-- Description -->
                        <div class="col-12">
                            <label class="form-label">Descrição</label>
                            <textarea class="form-control" name="descricao" placeholder="Ex: topicos, Cronograma, etc."></textarea>
                        </div>
                        <!-- Duração -->
                        <div class="col-sm-6">
                            <label class="form-label">Data Inicial</label>
                            <input type="date" class="form-control flatpickr" name="dataInicio"
                                placeholder="Data a inicar">
                        </div>
                        <!-- Duração -->
                        <!-- Duração -->
                        <div class="col-sm-6">
                            <label class="form-label" disable:minDate="today">Data do final </label>
                            <input type="date" class="form-control flatpickr" name="dataFim"
                                placeholder="Data a terminar">
                        </div>

                        <!-- Duração -->
                        <!-- Date -->
                        <div class="col-sm-4">
                            <label class="form-label">Duração</label>
                            <input type="number" class="form-control" name="duracao" placeholder="Exemplo:6H">
                        </div>
                        <!-- Date final -->
                        <div class="col-sm-4">
                            <label class="form-label">Publico Ou Privado</label>
                            <select class="form-select form-select" name="privado"
                                aria-label=".form-select-lg example">
                                <option disabled selected>Selecione</option>
                                <option value="0">Publico</option>
                                <option value="1">Privado</option>

                            </select>
                        </div>
                        <!-- Time -->
                        <div class="col-sm-4">
                            <label class="form-label">Hora</label>
                            <input type="datetime-local" class="form-control flatpickr" name="hora"
                                data-enableTime="true" data-noCalendar="true" placeholder="Hora a Iniciar">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Localização</label>
                            <input type="text" class="form-control" name="localizacao"
                                placeholder="Ex:Beira-Moçambique, Munhava Rua Gross Gomes 47">
                        </div>
                        <!-- Location -->

                        <div class="col-md-12">
                            <label class="form-label">Cidade</label>
                            <div class="form-group">
                                <!-- Choice select -->
                                {{-- <select class="form-select" multiple name="cidade_id" id="cidade_id"> --}}
                                <select class="form-select js-choice" name="cidade_id" id="cidade_id"
                                    data-search-enabled="false" data-placeholder-val="Pesquisa por cidade" multiple
                                    data-remove-item-button="true" data-position="bottom" data-max-item-count="2"
                                    data-placeholder="true">

                                    @foreach ($cidades as $cidade)
                                        <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <!-- Location -->

                        <!-- Tipo de evento -->
                        <div class="col-12">
                            <label class="form-label">Tipo & categoria</label>
                            <div class="form-group">

                                <select name="categoria_id" style="width: 100%,height: 100%"
                                    class="form-select form-select">

                                    <option disabled selected>Escolha o tipo de evento</option>

                                    @foreach ($catergoria as $item)
                                        <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <!-- Tipo de evento -->
                        <!-- Add guests -->

                        <div class="col-md-12">
                            <label class="form-label">Addicionar Participantes</label>
                            <div class="form-group">

                                <select class="form-select form-select" style="width: 100%,height: 100%"
                                    name="participante">

                                    <option disabled selected>Exemplo:joaocarlos@gmail.com</option>
                                    @foreach ($participantes as $participante)
                                        <option value="{{ $participante->email }}">{{ $participante->email }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <!-- Avatar group START -->
                        <div class="col-12 mt-3">
                            <ul class="avatar-group list-unstyled align-items-center mb-0">
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                        alt="avatar">
                                </li>

                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                        alt="avatar">
                                </li>

                                <li class="ms-3">
                                    <small> +50 </small>
                                </li>
                            </ul>
                        </div>


                        <div class="mb-3">
                            <div class="dropzone  dropzone-default card shadow-none">
                                <a class="hiddenFileInput">

                                    <input class="hiddenFileInput" id="file-upload" type="file" name="imagen"
                                        accept="image/*" />
                                </a>
                                <label for="file-upload" id="file-drag">
                                    <div class="dz-message" id="start">
                                        <img id="file-image" src="#" alt="Preview" class="hidden">
                                        <div class="dz-message" id="notimage" id="response" class="hidden">
                                        </div>
                                        <div class="dz-message" id="response" class="hidden">
                                            <div id="messages">
                                                <i class="bi bi-images display-3">
                                                </i>
                                                <p> clique para carregar ou Solte a
                                                    image aqui.</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <!-- Dropzone photo START -->
                        <!-- Dropzone photo END -->

                        <div class="col-12">
                            <label class="form-label">Link Externos</label>
                            <input type="text" class="form-control" name="link"
                                placeholder="https://go.com/fwlink/?LinkID=219472&clcid=0x409">
                        </div>
                        <!-- Form END -->
                        {{-- FIle manger --}}
                        <div class="col-12">
                            <label class="form-label">Carregar anexo</label>
                            <input type="file" class="form-control" name="anexo">
                        </div>
                        {{-- FIle manger --}}

                </div>
                <!-- Modal feed body END -->
                <!-- Modal footer -->
                <!-- Button -->
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-danger-soft me-2" data-bs-dismiss="modal">
                        Cancelar</button>
                    <button type="submit" class="btn btn-success-soft">Criar Agora</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal criar events -->
    <!-- Modal create events END -->

    <!-- =======================
JS libraries, plugins and custom scripts -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/tiny-slider/dist/tiny-slider.js"></script>
    <script src="assets/vendor/OverlayScrollbars-master/js/OverlayScrollbars.min.js"></script>
    <script src="assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="assets/vendor/glightbox-master/dist/js/glightbox.min.js"></script>
    <script src="assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/vendor/plyr/plyr.js"></script>
    <script src="assets/vendor/dropzone/dist/min/dropzone.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from social.webestica.com/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 08:44:07 GMT -->

</html>
