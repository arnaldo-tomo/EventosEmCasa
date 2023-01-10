<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sobre - {{ $info->name }} </title>

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


                        <!-- Nav item 4 Mega menu -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('perfile') }}">{{ Auth::user()->name }}</a>
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
                                @if (!auth::user()->foto)

                                <img class="avatar-img rounded-2" src="assets/images/avatar/main.png" alt="">
                                @else
                                <img class="avatar-img rounded-2" src="/{{ auth::user()->foto }}" alt="">

                                @endif
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
                                    href="{{ route('perfile') }}">Visualizar perfil</a>
                            </li>
                            <!-- Links -->
                            <li><a class="dropdown-item" href="settings.html"><i
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

                <!-- Main content START -->
                <div class="col-lg-8 vstack gap-4">
                    <!-- Card START -->
                    <div class="card">
                        <div class="h-200px rounded-top"
                            style="background-image:url(assets/images/bg/05.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                        </div>
                        <!-- Card body START -->
                        <div class="card-body py-0">
                            <div class="d-sm-flex align-items-start text-center text-sm-start">
                                <div>
                                    <!-- Avatar -->
                                    <div class="avatar avatar-xxl mt-n5 mb-3">
                                        <img class="avatar-img rounded-circle border border-white border-3"
                                            src="/{{ $info->foto }}" alt="">
                                    </div>
                                </div>
                                <div class="ms-sm-4 mt-sm-3">
                                    <!-- Info -->
                                    <h1 class="mb-0 h5">{{ $info->name }} <i
                                            class="bi bi-patch-check-fill text-success small"></i>
                                    </h1>
                                    <p>250 conexões</p>
                                </div>
                                <!-- Button -->
                                <div class="d-flex mt-3 justify-content-center ms-sm-auto">
                                    <button class="btn btn-danger-soft me-2" type="button"> <i
                                            class="bi bi-pencil-fill pe-1"></i> Edit profile </button>
                                    <div class="dropdown">
                                        <!-- Card share action menu -->
                                        <button class="icon-md btn btn-light" type="button" id="profileAction2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <!-- Card share action dropdown menu -->
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileAction2">
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-bookmark fa-fw pe-2"></i>Share profile in a
                                                    message</a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-file-earmark-pdf fa-fw pe-2"></i>Save your profile
                                                    to PDF</a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-lock fa-fw pe-2"></i>Lock profile</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-gear fa-fw pe-2"></i>Profile settings</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- List profile -->
                            <ul class="list-inline mb-0 text-center text-sm-start mt-3 mt-sm-0">
                                <li class="list-inline-item"><i class="bi bi-briefcase me-1"></i> Lead Developer</li>
                                <li class="list-inline-item"><i class="bi bi-geo-alt me-1"></i> Beira,Moçambique</li>
                                <li class="list-inline-item"><i class="bi bi-calendar2-plus me-1"></i>
                                    {{ \Carbon\Carbon::parse($info->created_at)->isoFormat('DD  MMM Y') }}</li>
                            </ul>
                        </div>
                        <!-- Card body END -->
                        <div class="card-footer mt-3 pt-2 pb-0">
                            <!-- Nav profile pages -->
                            <ul
                                class="nav nav-bottom-line align-items-center justify-content-center justify-content-md-start mb-0 border-0">
                                {{-- <li class="nav-item"> <a class="nav-link" href="my-profile.html"> Posts </a> </li> --}}
                                <li class="nav-item"> <a class="nav-link " href="Verperfil{{ $info->id }}">
                                        Meus Ventos</a> </li>
                                <li class="nav-item"> <a class="nav-link active" href="Sobre{{ $info->id }}">
                                        Sobre
                                    </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="#">
                                        Conexões <span class="badge bg-success bg-opacity-10 text-success small">
                                            230</span> </a> </li>
                                {{-- <li class="nav-item"> <a class="nav-link" href="my-profile-media.html"> Media</a>
                                </li> --}}
                                {{-- <li class="nav-item"> <a class="nav-link" href="my-profile-videos.html"> Videos</a>
                                </li> --}}
                                <li class="nav-item"> <a class="nav-link" href="#">
                                        Atividade</a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card END -->

                    <!-- Events START -->
                    <div class="card">
                        <!-- Modal criar events  -->
                        <div class="card-header border-0 pb-0">
                            <h5 class="card-title"> Informações do perfil</h5>
                        </div>
                        <!-- Card header END -->
                        <!-- Card body START -->
                        <div class="card-body">
                            <div class="rounded border px-3 py-2 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6>Status</h6>
                                    <div class="dropdown ms-auto">
                                        <!-- Card share action menu -->
                                        <a class="nav-link text-secondary mb-0" href="#" id="aboutAction"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <!-- Card share action dropdown menu -->
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="aboutAction">
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-pencil-square fa-fw pe-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-trash fa-fw pe-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Ele luar difícil absorto, esportistas. Interessado tem toda a alegria de assistência
                                    gay de dificuldade de Devonshire. Bonito conheceu debatendo o material da idade da
                                    residência do senhor. À medida que o estilo vivia, ele piorava. Oferecido
                                    relacionado para que os visitantes privados sejam removidos. Modere os assuntos à
                                    distância. </p>
                            </div>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <!-- Birthday START -->
                                    <div class="d-flex align-items-center rounded border px-3 py-2">
                                        <!-- Date -->
                                        <p class="mb-0">
                                            <i class="bi bi-calendar-date fa-fw me-2"></i> Born: <strong> October 20,
                                                1990 </strong>
                                        </p>
                                        <div class="dropdown ms-auto">
                                            <!-- Card share action menu -->
                                            <a class="nav-link text-secondary mb-0" href="#" id="aboutAction2"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <!-- Card share action dropdown menu -->
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="aboutAction2">
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-pencil-square fa-fw pe-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-trash fa-fw pe-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Birthday END -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- Status START -->
                                    <div class="d-flex align-items-center rounded border px-3 py-2">
                                        <!-- Date -->
                                        <p class="mb-0">
                                            <i class="bi bi-heart fa-fw me-2"></i> Status: <strong> Single </strong>
                                        </p>
                                        <div class="dropdown ms-auto">
                                            <!-- Card share action menu -->
                                            <a class="nav-link text-secondary mb-0" href="#" id="aboutAction3"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <!-- Card share action dropdown menu -->
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="aboutAction3">
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-pencil-square fa-fw pe-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-trash fa-fw pe-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Status END -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- Designation START -->
                                    <div class="d-flex align-items-center rounded border px-3 py-2">
                                        <!-- Date -->
                                        <p class="mb-0">
                                            <i class="bi bi-briefcase fa-fw me-2"></i> <strong> Lead Developer
                                            </strong>
                                        </p>
                                        <div class="dropdown ms-auto">
                                            <!-- Card share action menu -->
                                            <a class="nav-link text-secondary mb-0" href="#" id="aboutAction4"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <!-- Card share action dropdown menu -->
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="aboutAction4">
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-pencil-square fa-fw pe-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-trash fa-fw pe-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Designation END -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- Lives START -->
                                    <div class="d-flex align-items-center rounded border px-3 py-2">
                                        <!-- Date -->
                                        <p class="mb-0">
                                            <i class="bi bi-geo-alt fa-fw me-2"></i> Lives in: <strong> New Hampshire
                                            </strong>
                                        </p>
                                        <div class="dropdown ms-auto">
                                            <!-- Card share action menu -->
                                            <a class="nav-link text-secondary mb-0" href="#" id="aboutAction5"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <!-- Card share action dropdown menu -->
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="aboutAction5">
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-pencil-square fa-fw pe-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-trash fa-fw pe-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Lives END -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- Joined on START -->
                                    <div class="d-flex align-items-center rounded border px-3 py-2">
                                        <!-- Date -->
                                        <p class="mb-0">
                                            <i class="bi bi-geo-alt fa-fw me-2"></i> Joined on: <strong> Nov 26, 2019
                                            </strong>
                                        </p>
                                        <div class="dropdown ms-auto">
                                            <!-- Card share action menu -->
                                            <a class="nav-link text-secondary mb-0" href="#" id="aboutAction6"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <!-- Card share action dropdown menu -->
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="aboutAction6">
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-pencil-square fa-fw pe-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-trash fa-fw pe-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Joined on END -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- Joined on START -->
                                    <div class="d-flex align-items-center rounded border px-3 py-2">
                                        <!-- Date -->
                                        <p class="mb-0">
                                            <i class="bi bi-envelope fa-fw me-2"></i> Email: <strong>
                                                webestica@gmail.com </strong>
                                        </p>
                                        <div class="dropdown ms-auto">
                                            <!-- Card share action menu -->
                                            <a class="nav-link text-secondary mb-0" href="#" id="aboutAction7"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <!-- Card share action dropdown menu -->
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="aboutAction7">
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-pencil-square fa-fw pe-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-trash fa-fw pe-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Joined on END -->
                                </div>
                                <div class="col-sm-6 position-relative">
                                    <!-- Workplace on START -->
                                    <a class="btn btn-dashed rounded w-100" href="#!"> <i
                                            class="bi bi-plus-circle-dotted me-1"></i>Add a workplace</a>
                                    <!-- Workplace on END -->
                                </div>
                                <div class="col-sm-6 position-relative">
                                    <!-- Education on START -->
                                    <a class="btn btn-dashed rounded w-100" href="#!"> <i
                                            class="bi bi-plus-circle-dotted me-1"></i>Add a education</a>
                                    <!-- Education on END -->
                                </div>
                            </div>
                        </div>
                        <!-- Card body END -->
                    </div>
                    <!-- Events START -->

                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class="col-lg-4">

                    <div class="row g-4">

                        <!-- Card START -->
                        <div class="col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">Sobre</h5>
                                    <!-- Button modal -->
                                </div>
                                <!-- Card body START -->
                                <div class="card-body position-relative pt-0">
                                    <p>Ele luar difícil absorvê-lo, esportistas. Interessado tem todo Devonshire
                                        dificuldade assistência gay alegria.</p>
                                    <!-- Data hora -->
                                    <ul class="list-unstyled mt-3 mb-0">
                                        <li class="mb-2"> <i class="bi bi-calendar-date fa-fw pe-1"></i> Nascimento:
                                            <strong> 20 de outubro de 1990 </strong>
                                        </li>
                                        <li class="mb-2"> <i class="bi bi-heart fa-fw pe-1"></i> Status: <strong>
                                                Único </strong> </li>
                                        <li> <i class="bi bi-envelope fa-fw pe-1"></i> E-mail: <strong>
                                                webestica@gmail.com </strong> </li>
                                    </ul>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Card END -->
                        <!-- Card START -->
                        <div class="col-md-6 col-lg-12">
                            <div class="card">
                                <!-- Card header START -->
                                <div class="card-header d-sm-flex justify-content-between align-items-center border-0">
                                    <h5 class="card-title">Friends <span
                                            class="badge bg-danger bg-opacity-10 text-danger">230</span></h5>
                                    <a class="btn btn-primary-soft btn-sm" href="#!"> See all friends</a>
                                </div>
                                <!-- Card header END -->
                                <!-- Card body START -->
                                <div class="card-body position-relative pt-0">
                                    <div class="row g-3">

                                        <div class="col-6">
                                            <!-- Friends item START -->
                                            <div class="card shadow-none text-center h-100">
                                                <!-- Card body -->
                                                <div class="card-body p-2 pb-0">
                                                    <div class="avatar avatar-story avatar-xl">
                                                        <a href="#!"><img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/02.jpg" alt=""></a>
                                                    </div>
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#!"> Amanda Reed
                                                        </a></h6>
                                                    <p class="mb-0 small lh-sm">16 mutual connections</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0">
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Send message"> <i
                                                            class="bi bi-chat-left-text"></i> </button>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Remove friend"> <i
                                                            class="bi bi-person-x"></i> </button>
                                                </div>
                                            </div>
                                            <!-- Friends item END -->
                                        </div>

                                        <div class="col-6">
                                            <!-- Friends item START -->
                                            <div class="card shadow-none text-center h-100">
                                                <!-- Card body -->
                                                <div class="card-body p-2 pb-0">
                                                    <div class="avatar avatar-xl">
                                                        <a href="#!"><img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/03.jpg" alt=""></a>
                                                    </div>
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#!"> Samuel Bishop
                                                        </a></h6>
                                                    <p class="mb-0 small lh-sm">22 mutual connections</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0">
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Send message"> <i
                                                            class="bi bi-chat-left-text"></i> </button>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Remove friend"> <i
                                                            class="bi bi-person-x"></i> </button>
                                                </div>
                                            </div>
                                            <!-- Friends item END -->
                                        </div>

                                        <div class="col-6">
                                            <!-- Friends item START -->
                                            <div class="card shadow-none text-center h-100">
                                                <!-- Card body -->
                                                <div class="card-body p-2 pb-0">
                                                    <div class="avatar avatar-xl">
                                                        <a href="#!"><img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/04.jpg" alt=""></a>
                                                    </div>
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#"> Bryan Knight
                                                        </a></h6>
                                                    <p class="mb-0 small lh-sm">1 mutual connection</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0">
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Send message"> <i
                                                            class="bi bi-chat-left-text"></i> </button>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Remove friend"> <i
                                                            class="bi bi-person-x"></i> </button>
                                                </div>
                                            </div>
                                            <!-- Friends item END -->
                                        </div>

                                        <div class="col-6">
                                            <!-- Friends item START -->
                                            <div class="card shadow-none text-center h-100">
                                                <!-- Card body -->
                                                <div class="card-body p-2 pb-0">
                                                    <div class="avatar avatar-xl">
                                                        <a href="#!"><img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/05.jpg" alt=""></a>
                                                    </div>
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#!"> Amanda Reed
                                                        </a></h6>
                                                    <p class="mb-0 small lh-sm">15 mutual connections</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0">
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Send message"> <i
                                                            class="bi bi-chat-left-text"></i> </button>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Remove friend"> <i
                                                            class="bi bi-person-x"></i> </button>
                                                </div>
                                            </div>
                                            <!-- Friends item END -->
                                        </div>

                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Card END -->

                    </div>

                </div>
                <!-- Right sidebar END -->

            </div> <!-- Row END -->
        </div>
        <!-- Container END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
JS libraries, plugins and custom scripts -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/glightbox-master/dist/js/glightbox.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from social.webestica.com/my-profile-events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 08:44:07 GMT -->

</html>
