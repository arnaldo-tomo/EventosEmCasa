<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from social.webestica.com/events-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 08:44:07 GMT -->

<head>
    <title>Todos - HomeEventos </title>

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
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices.js/public/assets/styles/choices.min.css" />

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
                        <a class="nav-link icon-md btn btn-light p-0" href="settings.html">
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
                            <div class="card h-100">
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
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/main.png"
                                            alt="avatar">
                                    </div>
                                    <div>
                                        <a class="h6 stretch-link"
                                            href="{{ route('perfil') }}">{{ Auth::user()->email }}</a>
                                        <p class="small m-0">Desenvolvedor Web</p>
                                    </div>
                                </div>
                                <a class="dropdown-item btn btn-primary-soft btn-sm my-2 text-center"
                                    href="{{ route('perfil') }}">Visualizar perfil</a>
                            </li>
                            <!-- Links -->
                            <li><a class="dropdown-item" href="settings.html"><i
                                        class="bi bi-gear fa-fw me-2"></i>Configurações e privacidade</a></li>
                            <li>
                                <a class="dropdown-item" href="" target="_blank">
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

        <!-- Hero event START -->
        <section class="pt-5 pb-0 position-relative"
            style="background-image: url(assets/images/bg/07.jpg); background-repeat: no-repeat; background-size: cover; background-position: top center;">
            <div class="bg-overlay bg-dark opacity-8"></div>
            <!-- Container START -->
            <div class="container">
                <div class="py-5">
                    <div class="row position-relative">
                        <div class="col-lg-9 mx-auto">
                            <div class="text-center">
                                <!-- Title -->
                                <h1 class="text-white">Encontre eventos perto de você</h1>
                                <p class="text-white">Vamos descobrir os melhores lugares para comer, relaxar e fazer
                                    compras mais perto de
                                    você.</p>
                            </div>
                            <div class="mx-auto bg-mode shadow rounded p-4 mt-5">
                                <!-- Form START -->
                                <form class="row align-items-end g-4">
                                    <!-- Duration -->
                                    <div class="col-sm-6 col-lg-3">
                                        <label class="form-label">Selecione o gênero</label>
                                        <select class="form-select js-choice choice-select-text-none"
                                            data-position="bottom" data-search-enabled="false">
                                            <option selected disabled value="category">Categoria</option>
                                            <option value="culto">culto</option>
                                            <option value="comedy">Comédia</option>
                                            <option value="dance">Dança</option>
                                            <option value="family">Família</option>
                                            <option value="music">Música</option>
                                            <option value="workshop">Oficina</option>
                                        </select>
                                    </div>
                                    <!-- Date -->
                                    <div class="col-sm-6 col-lg-3">
                                        <label class="form-label">Formulário de data</label>
                                        <input type="text" class="form-control flatpickr" value="12/10/2022">
                                    </div>
                                    <!-- Tempo -->
                                    <div class="col-sm-6 col-lg-3">
                                        <label class="form-label">Data até</label>
                                        <input type="text" class="form-control flatpickr" value="14/10/2022">
                                    </div>
                                    <!-- Tempo -->
                                    <div class="col-sm-6 col-lg-3">
                                        <a class="btn btn-primary w-100" href="#">Filtra datas</a>
                                    </div>
                                </form>
                                <!-- Formulário END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero event END -->

        <section class="pt-5">
            <!-- Container START -->
            <div class="container">


                <div class="row g-4">

                    <!-- Main content START -->
                    <div class="col-12 vstack gap-4">

                        <!-- Card START -->
                        <div class="card">
                            <!-- Card header START -->
                            <div
                                class="card-header d-sm-flex align-items-center text-center justify-content-sm-between border-0 pb-0">
                                <h2 class="h4 card-title">Descubra eventos</h2>
                                <!-- Botão modal -->
                                <a class="btn btn-primary-soft" href="#" data-bs-toggle="modal"
                                    data-bs-target="#modalCreateEvents"> <i class="fa-solid fa-plus pe-1"></i> Criar
                                    evento</a>
                            </div>
                            <!-- Card header START -->
                            <!-- Card body START -->
                            <div class="card-body">
                                <div class="row g-4">
                                    @foreach ($eventos as $evento)
                                        <div class="col-sm-6 col-xl-4">
                                            <!-- Event item START -->
                                            <div class="card h-100">
                                                <div class="position-relative">
                                                    <img class="img-fluid rounded-top" href=""
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalCreateEvents{{ $evento->id }}"
                                                        src="/{{ $evento->imagen }}" alt="/{{ $evento->imagen }}">
                                                    <div
                                                        class="badge bg-danger text-white mt-2 me-2 position-absolute top-0 end-0">
                                                        {{ $evento->localizacao }}
                                                    </div>
                                                </div>
                                                <!-- Card body START -->
                                                <div class="card-body position-relative pt-0">
                                                    <!-- Tag -->
                                                    <a class="btn btn-xs btn-primary mt-n3">{{ $evento->tipo_categoria }}
                                                    </a>
                                                    <h6 class="mt-3"> <a href="" data-bs-toggle="modal"
                                                            data-bs-target="#modalCreateEvents{{ $evento->id }}">
                                                            {{ $evento->titulo }}
                                                        </a>
                                                    </h6>
                                                    <!-- Date time -->
                                                    <p class="mb-0 small"> <i class="bi bi-calendar-check pe-1"></i>
                                                        {{ \Carbon\Carbon::parse($evento->dataInicio)->isoFormat('DD MMM Y') }}
                                                        -
                                                        {{ $evento->hora }} Horas</p>
                                                    <p class="small"> <i class="bi bi-geo-alt pe-1"></i>
                                                        {{ $evento->cidade }} </p>
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
                                                                    class="smaller text-white position-absolute top-50 start-50 translate-middle">+78</span>
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
                                                                id="Interested1">
                                                            <label class="btn btn-sm btn-outline-success d-block"
                                                                for="Interested1"><i
                                                                    class="fa-solid fa-thumbs-up me-1"></i>
                                                                Interested</label>
                                                        </div>
                                                        <div class="dropdown ms-3">
                                                            <a href="#" class="btn btn-sm btn-primary-soft"
                                                                id="eventActionShare" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="bi bi-share-fill"></i>
                                                            </a>
                                                            <!-- Dropdown menu -->
                                                            <ul class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="eventActionShare">
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-envelope fa-fw pe-1"></i> Send
                                                                        via
                                                                        Direct Message</a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-bookmark-check fa-fw pe-1"></i>
                                                                        Share to News Feed </a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-people fa-fw pe-1"></i> Share
                                                                        to a
                                                                        group</a></li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-share fa-fw pe-1"></i> Share
                                                                        post
                                                                        via …</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="bi bi-person fa-fw pe-1"></i> Share
                                                                        on a
                                                                        friend's profile</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Card body END -->
                                            </div>
                                            <!-- Event item END -->
                                        </div>



                                        {{-- ver events --}}
                                        <div class="modal fade col-12" id="modalCreateEvents{{ $evento->id }}"
                                            tabindex="-1" aria-labelledby="modalLabelCreateEvents"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">

                                                    <!-- Modal feed header START -->
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="modalLabelCreateEvents{{ $evento->id }}">
                                                            {{ $evento->titulo }}
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <!-- Modal feed header END -->



                                                    <!-- Modal feed body START -->
                                                    <div class="modal-body">
                                                        <div class="card card-body card-overlay-bottom border-0"
                                                            style="background-image:url(/{{ $evento->imagen }}); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                            <!-- Card body START -->
                                                            <div class="row g-3 justify-content-between">
                                                                <!-- Date START -->
                                                                <div class="col-lg-2">
                                                                    <div
                                                                        class="bg-mode text-center rounded overflow-hidden p-1 d-inline-block">
                                                                        <div
                                                                            class="bg-primary p-2 text-white rounded-top small lh-1">
                                                                            {{ $evento->hora }}Hora
                                                                        </div>
                                                                        <h6 class="mb-0 py-2 lh-1">
                                                                            {{ \Carbon\Carbon::parse($evento->dataInicio)->isoFormat('DD MMM Y') }}
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Event name START -->
                                                            <div
                                                                class="row g-3 justify-content-between align-items-center mt-5 pt-5 position-relative z-index-9">
                                                                <div class="col-lg-9">
                                                                    <h1 class="h3 mb-1 text-white">
                                                                        {{ $evento->titulo }} </h1>
                                                                    <a class="text-white"
                                                                        href="https://github.com/arnaldo-tomo"
                                                                        target="_blank">https://github.com/arnaldo-tomo</a>
                                                                </div>
                                                                <!-- Button -->
                                                                <div class="col-lg-3 text-lg-end">
                                                                    <a class="btn btn-primary-soft" href="#!">
                                                                        Comprar </a>
                                                                </div>
                                                            </div>
                                                            <!-- Event name END -->
                                                        </div>
                                                        <!-- Card END -->
                                                    </div>

                                                    <!-- Card About START -->
                                                    <div class="card card-body">
                                                        <!-- Card body START -->
                                                        <div class="row g-4">
                                                            <!-- info -->
                                                            <div class="col-12">
                                                                <p class="mb-0">{{ $evento->descricao }}</p>
                                                            </div>
                                                            <div class="col-sm-6 col-lg-5">
                                                                <!-- Timings -->
                                                                <h5>Horários</h5>
                                                                <p class="small mb-0"><i class=" fa fa-calendar"></i>
                                                                    Inicio :
                                                                    {{ $evento->dataInicio }}</p>
                                                                <p class="small mb-0"> <i class=" fa fa-calendar"></i>
                                                                    Terminio : {{ $evento->dataFim }}
                                                                </p>
                                                            </div>
                                                            <!-- Entry Fees -->
                                                            <div class="col-sm-6 col-lg-4">
                                                                <h5>Taxas de entrada</h5>
                                                                <p class="small mb-0"> <a href="#!"> Free Ticket
                                                                    </a>For photography
                                                                    professionals check official website</p>
                                                            </div>
                                                            <!-- Category & Type -->
                                                            <div class="col-sm-6 col-lg-3">
                                                                <h5>Categoria e tipo</h5>
                                                                <p class="small mb-0">Trade Show</p>
                                                                <p class="small mb-0"> Photography & Prewedding</p>
                                                            </div>
                                                            <!-- Estimated Turnout -->
                                                            {{-- <div class="col-sm-6 col-lg-4">
                                            <h5>Afluência estimada</h5>
                                            <p class="small mb-0">140000 Visitors</p>
                                            <p class="small mb-0"> 1800 Exhibitors</p>
                                            <span class="badge bg-danger text-danger bg-opacity-10 small">Estimated
                                                Count</span>
                                        </div> --}}
                                                            <button class="btn btn-danger-soft btn-sm"> <i
                                                                    class="fa fa-file-pdf"></i>
                                                                Download enexo</button>
                                                            <div class="col-sm-12 col-lg-12">
                                                                <!-- Interested -->
                                                                <div class="d-flex">
                                                                    <button
                                                                        class="btn btn-success-soft btn-sm">Interessado?</button>
                                                                    <h6> <i
                                                                            class="bi bi-hand-thumbs-up-fill text-success"></i>
                                                                        50 </h6>
                                                                    <p class="small"> pessoas demonstraram interesse
                                                                        recentemente</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="mt-4">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4">
                                                                <h5>Participantes</h5>
                                                                <!-- Avatar group START -->
                                                                <ul
                                                                    class="avatar-group list-unstyled align-items-center">
                                                                    <li class="avatar avatar-xs">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/01.jpg"
                                                                            alt="avatar">
                                                                    </li>
                                                                    <li class="avatar avatar-xs">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/03.jpg"
                                                                            alt="avatar">
                                                                    </li>
                                                                    <li class="avatar avatar-xs">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="assets/images/avatar/04.jpg"
                                                                            alt="avatar">
                                                                    </li>
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
                                                                    <li class="ms-4">
                                                                        <small> 148.9K</small>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <!-- Avatar group END -->
                                                                <div class="row g-2">
                                                                    <div class="col-sm-4">
                                                                        <!-- Visitors -->
                                                                        <div class="d-flex">
                                                                            <i class="bi bi-globe fs-4"></i>
                                                                            <div class="ms-3">
                                                                                <h5 class="mb-0">125</h5>
                                                                                <p class="mb-0">Visitantes</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <!-- Registred -->
                                                                        <div class="d-flex">
                                                                            <i class="bi bi-person-plus fs-4"></i>
                                                                            <div class="ms-3">
                                                                                <h5 class="mb-0">356</h5>
                                                                                <p class="mb-0">registrado</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <!-- Attendance -->
                                                                        <div class="d-flex">
                                                                            <i class="bi bi-people fs-4"></i>
                                                                            <div class="ms-3">
                                                                                <h5 class="mb-0">350</h5>
                                                                                <p class="mb-0"> Confirmado</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Card About END -->

                                                </div>
                                            </div>
                                        </div>
                                        {{-- ver events --}}
                                    @endforeach
                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Card END -->
                    </div>

                </div> <!-- Row END -->
            </div>
            <!-- Container END -->
        </section>

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Modal criar events  -->
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
                                    <p>Solte a Apresentação e o documento aqui ou clique para carregar.</p>
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
    <!-- Modal criar events -->
    {{-- Modal --}}

    <!-- =======================
JS libraries, plugins and custom scripts -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/dropzone/dist/dropzone.js"></script>
    <script src="assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from social.webestica.com/events-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 08:44:07 GMT -->

</html>
