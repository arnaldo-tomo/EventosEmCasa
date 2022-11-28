<!DOCTYPE html>
<html lang="en">

<head>
    <title>HomeEvento</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Bootstrap 5 based Social Media Network and Community Theme">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    <header class="navbar-dark navbar-transparent header-static">

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
                            @auth
                                <a class="nav-link" href="#" id="profileDropdown" data-bs-auto-close="outside"
                                    data-bs-display="static" data-bs-toggle="dropdown"
                                    aria-expanded="false">{{ Auth::user()->name }}</a>
                            @endauth
                            @guest
                                <a class="btn btn-primary-soft btn-sm" href="#login_Modal" data-bs-toggle="modal"
                                    data-bs-target="#login_Modal"> <i class="fa-solid fa-sign-in pe-1"></i>
                                    Entrar</a>
                            @endguest
                        </li>
                    </ul>
                </div>
                <!-- Nav right START -->

                <ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
                    <!-- Notification dropdown END -->
                    <li class="nav-item ms-2 dropdown">
                        <a class="nav-link btn icon-md p-0" href="#" id="profileDropdown" role="button"
                            data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="avatar-img rounded-2" src="assets/images/avatar/07.jpg" alt="">
                        </a>
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
                                    href="my-profile.html">Visualizar perfil</a>
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
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        {{-- Modal --}}

        <!-- login"-->
        <div class="modal fade" id="login_Modal" tabindex="-1" aria-labelledby="login_Modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal feed header START -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="login_Modal">Enforme as suas credencias. </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <!-- Modal feed header END -->
                    <!-- Modal feed body START -->
                    <div class="modal-body">
                        <!-- Form START -->
                        <form id="login_Modal" method="POST" action="{{ route('login') }}" class="row g-4">
                            {{ csrf_field() }}
                            <!-- Title -->
                            <div class="col-12">
                                <label class="form-label">Seu Email</label>
                                <input type="text" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" placeholder="exempla@gmail.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Sua senha </label>
                                <input type="password" id="password" name="password"
                                    class="form-control  @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" placeholder="*****************">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Form END -->
                            <a href="#login_recuperar" data-bs-toggle="modal"
                                data-bs-target="#login_recuperar">Esqueceu a
                                sua senha?</a>
                    </div>
                    <!-- Modal feed body END -->
                    <!-- Modal footer -->
                    <!-- Button -->
                    <div class="modal-footer">
                        <p>Novo em nossa plataforma?</p>
                        <a class="btn btn-info btn-sm " href="#login_registar" data-bs-toggle="modal"
                            data-bs-target="#login_registar">
                            Crie uma conta</a>

                        <button type="submit" class="btn btn-success btn-sm">Entrar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- login-->

        <!-- Criar Conta"-->
        <div class="modal fade" id="login_recuperar" tabindex="-1" aria-labelledby="login_recuperar"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal feed header START -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="login_recuperar">Redefinir senha </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <!-- Modal feed header END -->

                    <!-- Modal feed body START -->
                    <div class="modal-body">
                        <p>Se você esqueceu sua senha, bem, enviaremos um e-mail com instruções para redefinir sua
                            senha.</p>
                        <!-- Form START -->
                        <form id="login_recuperar" method="POST" action="{{ route('password.email') }}"
                            class="row g-4">
                            {{ csrf_field() }}
                            <!-- Title -->
                            <div class="col-12">
                                <label class="form-label">Seu Email</label>
                                <input type="text" required autofocus name="email" id="email"
                                    class="form-control @error('recuperar') is-invalid @enderror"
                                    value="{{ old('recuperar') }}" placeholder="exempla@gmail.com">
                                @error('recuperar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-lg btn-primary btn-sm">Enviar link de
                                redefinição</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Criar Conta"-->

        {{-- Registar --}}
        <div class="modal fade" id="login_registar" tabindex="-1" aria-labelledby="login_registar"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal feed header START -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="login_registar">Registro </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <!-- Modal feed header END -->
                    <!-- Modal feed body START -->
                    <div class="modal-body">
                        <p>Criar nova conta em HomeEvento</p>
                        <!-- Form START -->
                        <form id="login_registar" method="POST" action="{{ route('login') }}" class="row g-4">
                            {{ csrf_field() }}
                            <!-- Title -->
                            <div class="col-12">
                                <label class="form-label">Seu nome</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" placeholder="EX:John Doe">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Seu Email</label>
                                <input type="text" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" placeholder="exempla@gmail.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">Sua senha </label>
                                <input type="password" id="password" name="password"
                                    class="form-control  @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" placeholder="*****************">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Sua senha </label>
                                <input type="password" name="password_confirmation"
                                    value="{{ old('password_confirmation') }}"
                                    class="form-control  @error('password_confirmation') is-invalid @enderror"
                                    value="{{ old('password_confirmation') }}" placeholder="*****************">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <!-- Modal feed body END -->
                    <!-- Modal footer -->
                    <!-- Button -->
                    <div class="modal-footer">
                        <p>Nao sou nova na plataforma?</p>
                        <button class="btn btn-info btn-sm " href="#login_Modal" data-bs-toggle="modal"
                            data-bs-target="#login_Modal">
                            Ja tenho Uma Conta</button>

                        <button type="submit" class="btn btn-success btn-sm">Entrar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Registar --}}

        {{-- Modal --}}




        <!-- Hero event START -->
        <section class="pt-5 pb-0 position-relative"
            style="background-image: url(assets/images/bg/07.jpg); background-repeat: no-repeat; background-size: cover; background-position: top center;">
            <div class="bg-overlay bg-dark opacity-8"></div>
            <!-- Container START -->
            <div class="container">
                <div class="pt-5">
                    <div class="row position-relative">
                        <div class="col-xl-8 col-lg-10 mx-auto pt-sm-5 text-center">
                            <!-- Title -->

                            <h1 class="text-white">Encontre eventos perto de você</h1>
                            <p class="text-white">Vamos descobrir os melhores lugares para comer, beber e fazer
                                compras
                                mais perto de você.
                            </p>
                            <div class="mx-auto bg-mode shadow rounded p-4 mt-5">
                                <h5 class="mb-3 text-start">Ajudaremos você a encontrar tudo</h5>
                                <!-- Form START -->
                                <form class="row g-3 justify-content-center">
                                    <div class="col-md-5">
                                        <!-- What -->
                                        <div class="input-group">
                                            <input class="form-control form-control-lg me-1 pe-5" type="text"
                                                placeholder="Oque" id="location" name="location" required>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <!-- Where -->
                                        <div class="input-group">
                                            <input class="form-control form-control-lg me-1 pe-5" type="text"
                                                placeholder="Onde">
                                            <a class="position-absolute top-50 end-0 translate-middle-y text-secondary px-3 z-index-9"
                                                href="#"> <i class="fa-solid fa-crosshairs"></i> </a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-grid">
                                        <!-- Search -->
                                        <a class="btn btn-lg btn-primary" href="#">Search</a>
                                    </div>
                                </form>
                                <!-- Form END -->
                            </div>
                        </div>
                        <div class="mb-n5 mt-3 mt-lg-5">
                            <div class="col-xl-9 col-lg-11 mx-auto">
                                <!-- Category START -->
                                <div class="d-md-flex gap-3 mt-5">
                                    <!-- Category item -->
                                    <a href="{{ route('categoria') }}"
                                        class="card card-body mb-3 mb-lg-0 p-3 text-center">
                                        <img class="h-40px mb-3" src="assets/images/icon/badge-outline-filled.svg"
                                            alt="">
                                        <h6>Artes e entretenimento</h6>
                                    </a>
                                    <!-- Category item -->
                                    <a href="{{ route('categoria') }}"
                                        class="card card-body mb-3 mb-lg-0 p-3 text-center">
                                        <img class="h-40px mb-3" src="assets/images/icon/clipboard-outline-filled.svg"
                                            alt="">
                                        <h6> Negócios e conferências</h6>
                                    </a>
                                    <!-- Category item -->
                                    <a href="{{ route('categoria') }}"
                                        class="card card-body mb-3 mb-lg-0 p-3 text-center">
                                        <img class="h-40px mb-3" src="assets/images/icon/home-outline-filled.svg"
                                            alt="">
                                        <h6>PNY E-Gaming Fest</h6>
                                    </a>
                                    <!-- Category item -->
                                    <a href="{{ route('categoria') }}"
                                        class="card card-body mb-3 mb-lg-0 p-3 text-center">
                                        <img class="h-40px mb-3" src="assets/images/icon/clock-outline-filled.svg"
                                            alt="">
                                        <h6>Eventos e festas</h6>
                                    </a>
                                    <!-- Category item -->
                                    <a href="events.html" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                                        <img class="h-40px mb-3" src="assets/images/icon/imac-outline-filled.svg"
                                            alt="">
                                        <h6>Esportes e bem-estar</h6>
                                    </a>
                                </div>
                                <!-- Category END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero event END -->

        <!-- Discover Events START -->
        <section class="bg-mode py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="d-sm-flex justify-content-between">
                            <!-- Title -->
                            <h4>Descubra eventos </h4>
                            <a class="btn btn-link" href="{{ route('todos') }}">Ver todos os eventos</a>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-sm-6 col-lg-3">
                        <!-- Event item START -->
                        <div class="card h-100">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="assets/images/events/01.jpg" alt="">
                                <div class="badge bg-danger text-white mt-2 me-2 position-absolute top-0 end-0">
                                    Online
                                </div>
                            </div>
                            <!-- Card body START -->
                            <div class="card-body position-relative pt-0">
                                <!-- Tag -->
                                <a class="btn btn-xs btn-primary mt-n3" href="{{ route('detalhes') }}">Treinamento em
                                    spa
                                </a>
                                <h5 class="mt-3"> <a href="{{ route('detalhes') }}"> Bone thugs-n-harmony </a>
                                </h5>
                                <!-- Data hora -->
                                <p class="mb-0 small"> <i class="bi bi-calendar-check pe-1"></i> segunda-feira, 25
                                    de
                                    setembro de 2020 às
                                    9h30 </p>
                                <p class="small"> <i class="bi bi-geo-alt pe-1"></i> São Francisco </p>
                                <!-- Avatar group START -->
                                <ul class="avatar-group list-unstyled align-items-center mb-0">
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
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
                                        <div class="avatar-img rounded-circle bg-primary"><span
                                                class="menor text-white position-absolute top-50 start-50 translate-middle">+78</span>
                                        </div>
                                    </li>
                                    <li class="ms-3">
                                        <small> estão participando</small>
                                    </li>
                                </ul>
                                <!-- Avatar group END -->
                                <!-- Button -->
                                <div class="d-flex mt-3 justify-content-between">
                                    <!-- Interested button -->
                                    <div class="w-100">
                                        <input type="checkbox" class="btn-check d-block" id="Interested1">
                                        <label class="btn btn-sm btn-outline-success d-block" for="Interested1"><i
                                                class="fa-solid fa-thumbs-up me-1"></i> Interessante</label>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="btn btn-sm btn-primary-soft" id="eventActionShare"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-share-fill"></i>
                                        </a>
                                        <!-- Dropdown menu -->
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="eventActionShare">
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-envelope fa-fw pe-1"></i> Enviar via Direct
                                                    Mensagem</a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-bookmark-check fa-fw pe-1"></i> Compartilhar
                                                    no
                                                    feed de notícias
                                                </a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-pessoas fa-fw pe-1"></i> Compartilhar em um
                                                    grupo</a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-share fa-fw pe-1"></i> Compartilhar postagem
                                                    via
                                                    …</a></li>
                                            <li>
                                                <hr class="divisor suspenso">
                                            </li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-person fa-fw pe-1"></i> Compartilhar no de um
                                                    amigo perfil</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Event item END -->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!-- Event item START -->
                        <div class="card h-100">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="assets/images/events/02.jpg" alt="">
                                <div class="badge bg-danger text-white mt-2 me-2 position-absolute top-0 end-0">
                                    Hotel
                                </div>
                            </div>
                            <!-- Card body START -->
                            <div class="card-body position-relative pt-0">
                                <!-- Etiqueta -->
                                <a class="btn btn-xs btn-primary mt-n3" href="{{ route('detalhes') }}">Fotografia
                                    Oficina</a>
                                <h5 class="mt-3"> <a href="{{ route('detalhes') }}"> Revista Decibel </a> </h5>
                                <!-- Data hora -->
                                <p class="mb-0 small"> <i class="bi bi-calendar-check pe-1"></i> Seg, 10 de agosto
                                    de
                                    2022 às
                                    9h30 </p>
                                <p class="small"> <i class="bi bi-geo-alt pe-1"></i> Londres </p>
                                <!-- Grupo de avatar START -->
                                <ul class="avatar-group list-unstyled align-items-center mb-0">
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-xs">
                                        <div class="avatar-img rounded-circle bg-primary"><span
                                                class="menor text-white position-absolute top-50 start-50 translate-middle">+34</span>
                                        </div>
                                    </li>
                                    <li class="ms-3">
                                        <small> estão participando</small>
                                    </li>
                                </ul>
                                <!-- Avatar group END -->
                                <!-- Button -->
                                <div class="d-flex mt-3 justify-content-between">
                                    <!-- Interested button -->
                                    <div class="w-100">
                                        <input type="checkbox" class="btn-check d-block" id="Interested2" checked>
                                        <label class="btn btn-sm btn-outline-success d-block" for="Interested2"><i
                                                class="fa-solid fa-thumbs-up me-1"></i> Interessante</label>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="btn btn-sm btn-primary-soft" id="eventActionShare2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-share-fill"></i>
                                        </a>
                                        <!-- Dropdown menu -->
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="eventActionShare2">
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-envelope fa-fw pe-1"></i> Enviar via Direct
                                                    Mensagem</a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-bookmark-check fa-fw pe-1"></i> Compartilhar
                                                    no
                                                    feed de notícias
                                                </a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-pessoas fa-fw pe-1"></i> Compartilhar em um
                                                    grupo</a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-share fa-fw pe-1"></i> Compartilhar postagem
                                                    via
                                                    …</a></li>
                                            <li>
                                                <hr class="divisor suspenso">
                                            </li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-person fa-fw pe-1"></i> Compartilhar no de um
                                                    amigo
                                                    perfil</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Event item END -->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!-- Event item START -->
                        <div class="card h-100">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="assets/images/events/03.jpg" alt="">
                                <div class="badge bg-danger text-white mt-2 me-2 position-absolute top-0 end-0">
                                    Online
                                </div>
                            </div>
                            <!-- Card body START -->
                            <div class="card-body position-relative pt-0">
                                <!-- Tag -->
                                <a class="btn btn-xs btn-primary mt-n3"
                                    href="{{ route('detalhes') }}">Conferência</a>
                                <h5 class="mt-3"> <a href="{{ route('detalhes') }}"> Illenium: tour das brasas
                                        caídas
                                    </a>
                                </h5>
                                <!-- Data hora -->
                                <p class="mb-0 small"> <i class="bi bi-calendar-check pe-1"></i> Dom, 23 de
                                    setembro
                                    de 2022 às
                                    12h </p>
                                <p class="small"> <i class="bi bi-geo-alt pe-1"></i> Mumbai </p>
                                <!-- Avatar group START -->
                                <ul class="avatar-group list-unstyled align-items-center mb-0">
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-xs">
                                        <div class="avatar-img rounded-circle bg-primary"><span
                                                class="menor text-white position-absolute top-50 start-50 translate-middle">+65</span>
                                        </div>
                                    </li>
                                    <li class="ms-3">
                                        <small> estão participando</small>
                                    </li>
                                </ul>
                                <!-- Avatar group END -->
                                <!-- Button -->
                                <div class="d-flex mt-3 justify-content-between">
                                    <!-- Interested button -->
                                    <div class="w-100">
                                        <input type="checkbox" class="btn-check d-block" id="Interested3">
                                        <label class="btn btn-sm btn-outline-success d-block" for="Interested3"><i
                                                class="fa-solid fa-thumbs-up me-1"></i> Interessante</label>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="btn btn-sm btn-primary-soft" id="eventActionShare3"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-share-fill"></i>
                                        </a>
                                        <!-- Dropdown menu -->
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="eventActionShare3">
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-envelope fa-fw pe-1"></i> Enviar via Direct
                                                    Mensagem</a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-bookmark-check fa-fw pe-1"></i> Compartilhar
                                                    no
                                                    feed de notícias
                                                </a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-pessoas fa-fw pe-1"></i> Compartilhar em um
                                                    grupo</a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-share fa-fw pe-1"></i> Compartilhar postagem
                                                    via
                                                    …</a></li>
                                            <li>
                                                <hr class="divisor suspenso">
                                            </li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-person fa-fw pe-1"></i> Compartilhar no de um
                                                    amigo
                                                    perfil</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Event item END -->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!-- Event item START -->
                        <div class="card h-100">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="assets/images/events/04.jpg" alt="">
                            </div>
                            <!-- Card body START -->
                            <div class="card-body position-relative pt-0">
                                <!-- Tag -->
                                <a class="btn btn-xs btn-primary mt-n3" href="{{ route('detalhes') }}">Apresentação
                                    ao
                                    vivo</a>
                                <h5 class="mt-3"> <a href="{{ route('detalhes') }}"> Comédia no verde </a>
                                </h5>
                                <!-- Data hora -->
                                <p class="mb-0 small"> <i class="bi bi-calendar-check pe-1"></i> Sexta, 05 de
                                    outubro
                                    de 2022 às
                                    1h </p>
                                <p class="small"> <i class="bi bi-geo-alt pe-1"></i> Miami </p>
                                <!-- Avatar group START -->
                                <ul class="avatar-group list-unstyled align-items-center mb-0">
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-xs">
                                        <div class="avatar-img rounded-circle bg-primary"><span
                                                class="menor text-white position-absolute top-50 start-50 translate-middle">+56</span>
                                        </div>
                                    </li>
                                    <li class="ms-3">
                                        <small> estão participando</small>
                                    </li>
                                </ul>
                                <!-- Avatar group END -->
                                <!-- Button -->
                                <div class="d-flex mt-3 justify-content-between">
                                    <!-- Interested button -->
                                    <div class="w-100">
                                        <input type="checkbox" class="btn-check d-block" id="Interested4" checked>
                                        <label class="btn btn-sm btn-outline-success d-block" for="Interested4"><i
                                                class="fa-solid fa-thumbs-up me-1"></i> Interessante</label>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="btn btn-sm btn-primary-soft" id="eventActionShare4"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-share-fill"></i>
                                        </a>
                                        <!-- Dropdown menu -->
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="eventActionShare4">
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-envelope fa-fw pe-1"></i> Enviar via Direct
                                                    Mensagem</a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-bookmark-check fa-fw pe-1"></i> Compartilhar
                                                    no
                                                    feed de notícias
                                                </a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-pessoas fa-fw pe-1"></i> Compartilhar em um
                                                    grupo</a></li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-share fa-fw pe-1"></i> Compartilhar postagem
                                                    via
                                                    …</a></li>
                                            <li>
                                                <hr class="divisor suspenso">
                                            </li>
                                            <li><a class="dropdown-item" href="#"> <i
                                                        class="bi bi-person fa-fw pe-1"></i> Compartilhar no de um
                                                    amigo
                                                    perfil</a></li>
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
        </section>
        <!-- Discover Events END -->

        <!-- Book conference START -->
        <section class="bg-mode pt-0 pt-lg-5">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-lg-5">
                        <!-- Global conference START -->
                        <!-- Image -->
                        <a href="{{ route('detalhes') }}"><img class="rounded" src="assets/images/events/06.jpg"
                                alt=""></a>
                        <!-- Info -->
                        <h5 class="mt-4"> <a href="{{ route('detalhes') }}"> Conferência global </a></h5>
                        <p>Ele luar difícil absorvê-lo, desportistas. Interessado tem todas as dificuldades de
                            Devonshire gay
                            alegria de assistência.</p>
                        <!-- Avatar group -->
                        <ul class="avatar-group list-unstyled align-items-center mb-0">
                            <li class="avatar avatar-xs">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg"
                                    alt="avatar">
                            </li>
                            <li class="avatar avatar-xs">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg"
                                    alt="avatar">
                            </li>
                            <li class="avatar avatar-xs">
                                <div class="avatar-img rounded-circle bg-primary"><span
                                        class="smaller text-white position-absolute top-50 start-50 translate-middle">+34</span>
                                </div>
                            </li>
                            <li class="ms-3">
                                <small> estão participando</small>
                            </li>
                        </ul>
                        <!-- Global conference END -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Book a conference START -->
                        <h4 class="mb-4">Agende uma conferência</h4>
                        <div class="bg-light dashed p-4 rounded">
                            <div class="row g-4 justify-content-between">
                                <div class="col-sm-7">
                                    <div class="row g-3">
                                        <!-- Date -->
                                        <div class="col-6">
                                            <small>Data</small>
                                            <h6>12 de junho de 2022</h6>
                                        </div>
                                        <!-- Tempo -->
                                        <div class="col-6">
                                            <small>Tempo</small>
                                            <h6>🌞Manhã 10h</h6>
                                        </div>
                                        <!-- Endereço -->
                                        <div class="col-12">
                                            <small>Endereço</small>
                                            <h6>2492 Centennial NW, Acworth, GA, 30102</h6>
                                        </div>
                                        <div class="col-12">
                                            <a class="btn btn-white" href="#"><i
                                                    class="bi bi-share-fill pe-2"></i>
                                                Compartilhe </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 text-center">
                                    <div class="ticket-border">
                                        <!-- QR code -->
                                        <img class="w-200px mx-auto" src="assets/images/qr-code.png" alt="">
                                        <a class="btn btn-primary mt-3" href="#"><i
                                                class="bi bi-ticket-fill pe-2"></i> Agende agora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Book a conference END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Book conference END -->

        <!-- Top Destinations START -->
        <section class="bg-mode pb-5 pt-0 pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3">
                        <!-- Title -->
                        <h4>Principais destinos </h4>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-sm-6 col-lg-3">
                        <!-- Card START -->
                        <div class="card card-overlay-bottom card-img-scale">
                            <!-- Card Image -->
                            <img class="card-img" src="assets/images/albums/02.jpg" alt="">
                            <!-- Card Image overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3 p-sm-4">
                                <div class="w-100 mt-auto">
                                    <!-- Card title -->
                                    <h5 class="text-white"><a href="#"
                                            class="btn-link text-reset stretch-link">Califórnia</a></h5>
                                    <!-- Informações do cartão -->
                                    <span class="text-white small">Negócios e conferências</span>
                                </div>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!-- Card START -->
                        <div class="card card-overlay-bottom card-img-scale">
                            <!-- Card Image -->
                            <img class="card-img" src="assets/images/albums/04.jpg" alt="">
                            <!-- Card Image overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3 p-sm-4">
                                <div class="w-100 mt-auto">
                                    <!-- Card title -->
                                    <h5 class="text-white"><a href="#"
                                            class="btn-link text-reset stretch-link">Los
                                            Angeles</a></h5>
                                    <!-- Informações do cartão -->
                                    <span class="text-white small">Eventos e festas</span>
                                </div>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!-- Card START -->
                        <div class="card card-overlay-bottom card-img-scale">
                            <!-- Card Image -->
                            <img class="card-img" src="assets/images/albums/05.jpg" alt="">
                            <!-- Card Image overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3 p-sm-4">
                                <div class="w-100 mt-auto">
                                    <!-- Card title -->
                                    <h5 class="text-white"><a href="#"
                                            class="btn-link text-reset stretch-link">Londres</a></h5>
                                    <!-- Informações do cartão -->
                                    <span class="text-white small">Artes e entretenimento</span>
                                </div>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!-- Card START -->
                        <div class="card card-overlay-bottom card-img-scale">
                            <!-- Card Image -->
                            <img class="card-img" src="assets/images/albums/01.jpg" alt="">
                            <!-- Card Image overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3 p-sm-4">
                                <div class="w-100 mt-auto">
                                    <!-- Card title -->
                                    <h5 class="text-white"><a href="#"
                                            class="btn-link text-reset stretched-link">London</a></h5>
                                    <!-- Card info -->
                                    <span class="text-white small">Arts & Entertainment</span>
                                </div>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Top Destinations END -->

        <!-- Explore Groups START -->
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3">
                        <!-- Title -->
                        <h4>Explore Groups </h4>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <!-- Card START -->
                        <div class="card">
                            <div class="h-80px rounded-top"
                                style="background-image:url(assets/images/bg/01.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <!-- Card body START -->
                            <div class="card-body text-center pt-0">
                                <!-- Avatar -->
                                <div class="avatar avatar-lg mt-n5 mb-3">
                                    <a href="group-details.html"><img
                                            class="avatar-img rounded-circle border border-white border-3 bg-mode"
                                            src="assets/images/logo/08.svg" alt=""></a>
                                </div>
                                <!-- Info -->
                                <h5 class="mb-0"> <a href="group-details.html">All in the Mind</a> </h5>
                                <small> <i class="bi bi-lock pe-1"></i> Private Group</small>
                                <!-- Group stat START -->
                                <div class="hstack gap-2 gap-xl-3 justify-content-center mt-3">
                                    <!-- Group stat item -->
                                    <div>
                                        <h6 class="mb-0">32k</h6>
                                        <small>Members</small>
                                    </div>
                                    <!-- Divider -->
                                    <div class="vr"></div>
                                    <!-- Group stat item -->
                                    <div>
                                        <h6 class="mb-0">20</h6>
                                        <small>Post per day</small>
                                    </div>
                                </div>
                                <!-- Group stat END -->
                                <!-- Avatar group START -->
                                <ul
                                    class="avatar-group list-unstyled align-items-center justify-content-center mb-0 mt-3">
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
                                        <div class="avatar-img rounded-circle bg-primary"><span
                                                class="smaller text-white position-absolute top-50 start-50 translate-middle">+22</span>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Avatar group END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Card END -->
                    </div>
                    <div class="col-md-4">
                        <!-- Card START -->
                        <div class="card">
                            <div class="h-80px rounded-top"
                                style="background-image:url(assets/images/bg/02.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <!-- Card body START -->
                            <div class="card-body text-center pt-0">
                                <!-- Avatar -->
                                <div class="avatar avatar-lg mt-n5 mb-3">
                                    <a href="group-details.html"><img
                                            class="avatar-img rounded-circle border border-white border-3 bg-mode"
                                            src="assets/images/logo/02.svg" alt=""></a>
                                </div>
                                <!-- Info -->
                                <h5 class="mb-0"><a href="group-details.html">Beauty queens</a></h5>
                                <small> <i class="bi bi-globe pe-1"></i> Public Group</small>
                                <!-- Group stat START -->
                                <div class="hstack gap-2 gap-xl-3 justify-content-center mt-3">
                                    <!-- Group stat item -->
                                    <div>
                                        <h6 class="mb-0">23k</h6>
                                        <small>Members</small>
                                    </div>
                                    <!-- Divider -->
                                    <div class="vr"></div>
                                    <!-- Group stat item -->
                                    <div>
                                        <h6 class="mb-0">12</h6>
                                        <small>Post per day</small>
                                    </div>
                                </div>
                                <!-- Group stat END -->
                                <!-- Avatar group START -->
                                <ul
                                    class="avatar-group list-unstyled align-items-center justify-content-center mb-0 mt-3">
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-xs">
                                        <div class="avatar-img rounded-circle bg-primary"><span
                                                class="smaller text-white position-absolute top-50 start-50 translate-middle">+13</span>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Avatar group END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Card END -->
                    </div>
                    <div class="col-md-4">
                        <!-- Card START -->
                        <div class="card">
                            <div class="h-80px rounded-top"
                                style="background-image:url(assets/images/bg/03.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <!-- Card body START -->
                            <div class="card-body text-center pt-0">
                                <!-- Avatar -->
                                <div class="avatar avatar-lg mt-n5 mb-3">
                                    <a href="group-details.html"><img
                                            class="avatar-img rounded-circle border border-white border-3 bg-mode"
                                            src="assets/images/logo/09.svg" alt=""></a>
                                </div>
                                <!-- Info -->
                                <h5 class="mb-0"> <a href="group-details.html">Eternal triangle</a></h5>
                                <small> <i class="bi bi-globe pe-1"></i> Public Group</small>
                                <!-- Group stat START -->
                                <div class="hstack gap-2 gap-xl-3 justify-content-center mt-3">
                                    <!-- Group stat item -->
                                    <div>
                                        <h6 class="mb-0">45k</h6>
                                        <small>Members</small>
                                    </div>
                                    <!-- Divider -->
                                    <div class="vr"></div>
                                    <!-- Group stat item -->
                                    <div>
                                        <h6 class="mb-0">16</h6>
                                        <small>Post per day</small>
                                    </div>
                                </div>
                                <!-- Group stat END -->
                                <!-- Avatar group START -->
                                <ul
                                    class="avatar-group list-unstyled align-items-center justify-content-center mb-0 mt-3">
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-xs">
                                        <div class="avatar-img rounded-circle bg-primary"><span
                                                class="smaller text-white position-absolute top-50 start-50 translate-middle">+12</span>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Avatar group END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Card END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Explore Groups END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
    <footer class="pt-5 bg-mode">
        <div class="container pt-4">
            <div class="row g-4">
                <div class="col-sm-6 col-lg-3">
                    <!-- Footer Widget -->
                    <img src="assets/images/logo.svg" alt="">
                    <p class="mt-3">Combinar com isso ela evita ver a morte tirar a gordura deles. </p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Footer Widget -->
                    <h5 class="mb-4">Baixar</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link pt-0" href="#"> <i
                                    class="bi bi-globe fa-fw pe-2"></i>Navegador da Web</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> <i
                                    class="bi bi-janelas fa-fw pe-2"></i>Windows</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> <i
                                    class="bi bi-apple fa-fw pe-2"></i>macOS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> <i
                                    class="bi bi-phone fa-fw pe-2"></i>iOS e
                                Android</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Footer Widget -->
                    <h5 class="mb-4">About</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link pt-0" href="#"> About social</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> Security</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> Customer Support</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> Partners</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> Careers - <b> Join Us! </b></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Footer Widget -->
                    <h5 class="mb-4">Recursos</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link pt-0" href="#"> Participe</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> Central de Ajuda</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> Desenvolvedores</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> Status</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> Comunidades </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="mb-0 mt-5">
        <div class="bg- light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Footer nav START -->
                        <ul class="nav justify-content-center justify-content-lg-start lh-1">
                            <li class="nav-item">
                                <a class="nav-link ps-0" href="#">Support </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" target="_blank" href="docs/index.html">Docs </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms of Use</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy &amp; terms</a>
                            </li>
                        </ul>
                        <!-- Footer nav START -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Copyright START -->
                        <p class="text-center text-lg-end mb-0">©2022 <a class="text-body" target="_blank"
                                href="http://arnaldotomo.epizy.com//"> Webestica </a>All rights reserved.</p>
                        <!-- Copyright END -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.2.1.slim.min.js') }}"></script>

    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR9La_0xlSLF4KpbnVnooIJTsl_tkycFM&libraries=places&callback=initialize"
        async defer></script>

    <script>
        $(document).ready(function() {
            var autocomplete;
            var to = 'location';
            Autocomplete = new google.maps.places.Autocomplete((document.getElementById(to)), {
                types: ['geovode'],
            });
        });
    </script>

    {{--
    <script type="text/javascript">
        var location = document.getElementById("location");
        var autocomplete;

        function initAutocomplete() {
            autocomplete = new google.maps.places.Autocomplete(
                location, {
                    types: ['(cities)'],
                    componentRestrictions: {
                        'country': ['US']
                    },
                    fields: ['place_id', 'geometry', 'name']
                });
        }
    </script> --}}


    @error('email')
        <script type="text/javascript">
            window.onload = function() {
                OpenBootstrapPopup();
            };

            function OpenBootstrapPopup() {
                $("#login_Modal").modal('show');
            }
        </script>
    @enderror

    {{-- chama modal de error na parte de recuprar senha --}}
    @error('recuperar')
        <script type="text/javascript">
            window.onload = function() {
                OpenBootstrapPopup();
            };

            function OpenBootstrapPopup() {
                $("#login_recuperar").modal('show');
            }
        </script>
    @enderror
</body>

</html>
