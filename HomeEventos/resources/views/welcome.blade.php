<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="arnaldotomo.epizy.com">
    <meta name="description" content="Bootstrap 5 based Social Media Network and Community Theme">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
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
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


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
                <ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
                    <!-- Nav right START -->
                    <ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
                        {{-- messaging --}}
                        <!-- Main navbar START -->
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav navbar-nav-scroll ms-auto">
                                <li class="nav-item">
                                    @guest
                                        <a class="btn btn-primary btn-sm" href="#login_Modal" data-bs-toggle="modal"
                                            data-bs-target="#login_Modal"> <i class="fa-solid fa-sign-in pe-1"></i>
                                            Entrar</a>
                                    @endguest
                                    @auth
                                        <a class="nav-link" href="{{ route('perfil') }}">{{ Auth::user()->name }}</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav right START -->
                            {{-- <li class="nav-item ms-2">
                            <a class="nav-link icon-md btn btn-light p-0" href="messaging.html">
                                <i class="bi bi-chat-left-text-fill fs-6"> </i>
                            </a>
                        </li> --}}
                            <li class="nav-item ms-2">
                                <a class="nav-link icon-md btn btn-dark p-0" href="{{ route('Configuracoes') }}">
                                    <i class="bi bi-gear-fill fs-6"> </i>
                                </a>
                            </li>
                            <li class="nav-item dropdown ms-2">
                                <a class="nav-link icon-md btn btn-dark p-0" href="#" id="notifDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                    data-bs-auto-close="outside">
                                    <span class="badge-notif animation-blink"></span>
                                    <i class="bi bi-bell-fill fs-6"> </i>
                                </a>
                                <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0"
                                    aria-labelledby="notifDropdown">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h6 class="m-0">Notifications <span
                                                    class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span>
                                            </h6>
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
                                                                <p class="small mb-2">Wish <b>Amanda Reed</b> a happy
                                                                    birthday
                                                                    (Nov 12)
                                                                </p>
                                                                <button class="btn btn-sm btn-outline-dark py-1 me-2">Say
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
                                                                <p class="small mb-2">Webestica has 15 like and 1 new
                                                                    activity
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
                                                                giant’s parent company, Alphabet, just joined an exclusive
                                                                club
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
                                    <li><a class="dropdown-item" href="{{ route('Configuracoes') }}"><i
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
        @endauth
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
                            {{-- {{ csrf_field() }} --}}
                            @csrf
                            <!-- Title -->
                            <div class="col-12">
                                <label class="form-label">Seu Email</label>
                                <input type="text" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" placeholder="exempla@gmail.com" required autofocus>
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
                                    value="{{ old('password') }}" placeholder="*****************" required autofocus>
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
                            @csrf
                            {{-- {{ csrf_field() }} --}}
                            <!-- Title -->
                            <div class="col-12">
                                <label class="form-label">Seu Email</label>
                                <input type="text" required autofocus autofocus name="email" id="email"
                                    class="form-control @error('recuperar') is-invalid @enderror"
                                    value="{{ old('email') }}" placeholder="exempla@gmail.com">
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
                        <form id="login_registar" method="POST" action="{{ route('register') }}" class="row g-4">
                            @csrf
                            {{-- {{ csrf_field() }} --}}
                            <!-- Title -->
                            <div class="col-12">
                                <label class="form-label">Seu nome</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" placeholder="EX:John Doe" required autofocus>
                                @error('name2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Seu Email</label>
                                <input type="text" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" placeholder="exempla@gmail.com" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">Sua senha </label>
                                <input type="password" id="passworde" name="passworde"
                                    class="form-control  @error('passworde') is-invalid @enderror"
                                    value="{{ old('passworde') }}" placeholder="*****************" required
                                    autofocus>
                                @error('passworde')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Confirme a sua senha </label>
                                <input type="password" name="password_confirmation"
                                    value="{{ old('password_confirmation') }}"
                                    class="form-control  @error('password_confirmation') is-invalid @enderror"
                                    value="{{ old('password_confirmation') }}" placeholder="*****************"
                                    required autofocus>
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
                        <p>Nao sou nova na plataforma</p>
                        <button class="btn btn-info btn-sm " href="#login_Modal" data-bs-toggle="modal"
                            data-bs-target="#login_Modal">
                            Login</button>

                        <button type="submit" class="btn btn-success btn-sm">Criar Conta</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Registar --}}

        <!-- Modal criar events  -->
        <div class="modal fade" id="modalCreateEvents" aria-labelledby="modalLabelCreateEvents" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal feed header START -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabelCreateEvents">Criar evento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <!-- Modal feed header END -->
                    <!-- Modal feed body START -->
                    <div class="modal-body">
                        <!-- Form START -->


                        <form method="POST" name="imagen" action="{{ route('salvar') }}"
                            enctype="multipart/form-data" class="row g-4">
                            @csrf
                            <!-- Title -->
                            <div class="col-12">
                                <label class="form-label">Titulo</label>
                                <input type="text" class="form-control" name="nome"
                                    placeholder="Nome do evento">
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
                                    <option disabled selected>-Selecione-</option>
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

                            <div class="col-md-12">
                                <label class="form-label">Cidade</label>
                                <div class="form-group">

                                    <select class="form-select form-select" style="width: 100%,height: 100%"
                                        id="month" name="cidade[]">

                                        <option disabled selected>Escolha o cidade </option>
                                        @foreach ($cidades as $cidade)
                                            <option value="{{ $cidade->nome }}">{{ $cidade->nome }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <!-- Location -->

                            <!-- Tipo de evento -->
                            <div class="col-12">
                                <label class="form-label">Tipo & categoria</label>
                                <div class="form-group">

                                    <select name="tipo_categoria" style="width: 100%,height: 100%"
                                        class="form-select form-select">

                                        <option disabled selected>Escolha o tipo de evento</option>

                                        @foreach ($catergoria as $item)
                                            <option value="{{ $item->nome }}">{{ $item->nome }}</option>
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
                                        id="month" name="cidade[]">

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

                            <!-- Dropzone photo START -->
                            <div class="mb-3">
                                <label class="form-label">Carregar Fotografia</label>
                                <div t ype="file" name="imagen"
                                    class="dropzone  dropzone-default card shadow-none"
                                    data-dropzone='{"maxFiles":1}'>
                                    <div name="imagen" class="dz-message">
                                        <i class="bi bi-file-earmark-text display-3"></i>
                                        <p>Solte a Apresentação e o documento aqui ou clique para carregar.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Dropzone photo END -->

                            <div class="col-12">
                                <label class="form-label">Link Externos</label>
                                <input type="text" class="form-control" id="link" name="link"
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
        {{-- Modal --}}

        {{--  --}}
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

                            </select>
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
                                            <select required autofocus class="form-control form-control-lg me-1 pe-5">
                                                <option disabled selected>O que</option>
                                                @foreach ($catergoria as $item)
                                                    <option> {{ $item->nome }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <input class="form-control form-control-lg me-1 pe-5" type="text"
                                                placeholder="Oque" required autofocus> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        {{-- <div id="the-basics">
                                            <input class="form-control form-control-lg me-1 pe-5 typeahead"
                                                type="text" placeholder="segundo teste">
                                        </div> --}}
                                        <!-- Where -->
                                        <div class="input-group">
                                            <input class="form-control typeahead  form-control-lg me-1 pe-5"
                                                type="text" placeholder="Onde" class="controls">

                                            <a class="position-absolute top-50 end-0 translate-middle-y text-secondary px-3 z-index-9"
                                                href="#"> <i class="fa-solid fa-crosshairs"></i> </a>
                                        </div>
                                        {{-- <div class="input-group">
                                            <input class="form-control form-control-lg me-1 pe-5" class="typeahead"
                                                type="text" placeholder="Onde" class="controls">
                                            <a class="position-absolute top-50 end-0 translate-middle-y text-secondary px-3 z-index-9"
                                                href="#"> <i class="fa-solid fa-crosshairs"></i> </a>
                                        </div> --}}
                                    </div>
                                    <div class="col-md-2 d-grid">
                                        <!-- Search -->
                                        <a class="btn btn-lg btn-primary" href="#">Buscar</a>
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
                                    <a href="" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                                        <img class="h-40px mb-3" src="assets/images/icon/badge-outline-filled.svg"
                                            alt="">
                                        <h6>Artes e entretenimento </h6>
                                    </a>
                                    <!-- Category item -->
                                    <a href="" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                                        <img class="h-40px mb-3" src="assets/images/icon/clipboard-outline-filled.svg"
                                            alt="">
                                        <h6> Negócios e conferências</h6>
                                    </a>
                                    <!-- Category item -->
                                    <a href="" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                                        <img class="h-40px mb-3" src="assets/images/icon/home-outline-filled.svg"
                                            alt="">
                                        <h6>PNY E-Gaming Fest</h6>
                                    </a>
                                    <!-- Category item -->
                                    <a href="" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                                        <img class="h-40px mb-3" src="assets/images/icon/clock-outline-filled.svg"
                                            alt="">
                                        <h6>Eventos e festas</h6>
                                    </a>
                                    <!-- Category item -->
                                    <a href="events.html" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                                        <img class="h-40px mb-3" src="assets/images/icon/imac-outline-filled.svg"
                                            alt="">
                                        <h6>Tecnologias</h6>
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
                        @if (session('interessante'))
                            <!-- Event alert START -->
                            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                <strong>Upcoming event:</strong> {{ session('interessante') }}
                                <a href="event-details.html" class="btn btn-xs btn-success mt-2 mt-lg-0 ms-lg-4">View
                                    event</a>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <!-- Event alert END -->
                        @endif

                        <div class="d-sm-flex justify-content-between">

                            <!-- Title -->
                            <h4>Descubra eventos </h4>
                            @auth
                                <a class="btn btn-primary-soft" href="#" data-bs-toggle="modal"
                                    data-bs-target="#modalCreateEvents"> <i class="fa-solid fa-plus pe-1"></i> Criar
                                    evento</a>
                            @endauth
                            @guest
                                <a class="btn btn-primary-soft" href="#login_Modal" data-bs-toggle="modal"
                                    data-bs-target="#login_Modal"> <i class="fa-solid fa-sign-in pe-1"></i>
                                    Entrar</a>
                            @endguest
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    @foreach ($eventos as $evento)
                        <div class="col-sm-6 col-lg-3">
                            <!-- Event item START -->
                            <div class="card h-100">
                                <div class="position-relative">
                                    @auth
                                        <img class="img-fluid rounded-top" href="" data-bs-toggle="modal"
                                            data-bs-target="#modalCreateEvents{{ $evento->id }}"
                                            src="/{{ $evento->imagen }}" alt="">
                                    @endauth

                                    @guest
                                        <img class="img-fluid rounded-top" href="#login_Modal" data-bs-toggle="modal"
                                            data-bs-target="#login_Modal" src="/{{ $evento->imagen }}" alt="">
                                    @endguest
                                    <div class="badge bg-danger text-white mt-2 me-2 position-absolute top-0 end-0">
                                        {{ $evento->localizacao }}
                                    </div>
                                </div>
                                <!-- Card body START -->
                                <div class="card-body position-relative pt-0">
                                    <!-- Tag -->
                                    <a class="btn btn-xs btn-primary mt-n3">{{ $evento->tipo_categoria }}
                                    </a>
                                    @auth
                                        <h5 class="mt-3"> <a href="" data-bs-toggle="modal"
                                                data-bs-target="#modalCreateEvents{{ $evento->id }}">
                                                {{ $evento->titulo }}
                                            </a>
                                        </h5>
                                    @endauth

                                    @guest
                                        <h5 class="mt-3"> <a href="#login_Modal" data-bs-toggle="modal"
                                                data-bs-target="#login_Modal">
                                                {{ $evento->titulo }}
                                            </a>
                                        </h5>
                                    @endguest



                                    <!-- Data hora -->
                                    <p class="mb-0 small"> <i class="bi bi-calendar-check pe-1"></i>
                                        {{ \Carbon\Carbon::parse($evento->dataInicio)->isoFormat('DD MMM Y') }}
                                        <i class=" fa fa-clock"></i>
                                        {{ $evento->hora }} Horas
                                    </p>
                                    <p class="small"> <i class="bi bi-geo-alt pe-1"></i> {{ $evento->cidade }} </p>
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
                                            @auth
                                                <form method="POST" action="gosto{{ $evento->id }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-outline-success d-block"
                                                        for="Interested1"><i class="fa-solid fa-thumbs-up me-1"></i>
                                                        Interessante </button>

                                                </form>
                                            @endauth
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


                        {{-- ver events --}}
                        <div class="modal fade col-12" id="modalCreateEvents{{ $evento->id }}" tabindex="-1"
                            aria-labelledby="modalLabelCreateEvents" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal feed header START -->
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabelCreateEvents{{ $evento->id }}">
                                            {{ $evento->titulo }}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
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
                                                        <div class="bg-primary p-2 text-white rounded-top small lh-1">
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
                                                    <h1 class="h3 mb-1 text-white"> {{ $evento->titulo }} </h1>
                                                    <a class="text-white" href="{{ $evento->link }}"
                                                        target="_blank">{{ $evento->link }}</a>
                                                </div>
                                                <!-- Button -->
                                                <div class="col-lg-3 text-lg-end">
                                                    <a class="btn btn-primary-soft" href="#!"> Comprar </a>
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
                                            <div class="col-sm-6 col-lg-4">
                                                <!-- Timings -->
                                                <h5>Horários</h5>
                                                @if ($evento->dataInicio == $evento->dataFim)
                                                    <p class="small mb-0"><i class=" fa fa-calendar"></i>
                                                        Inicio :
                                                        {{ $evento->dataInicio }}</p>
                                                    <p class="small mb-0"><i class=" fa fa-clock"></i>
                                                        Hora :
                                                        {{ $evento->hora }}</p>
                                                    <p class="small mb-0"><i class="fa fa-hourglass-end"></i>
                                                        Duração :
                                                        {{ $evento->duracao }} Horas</p>
                                                @else
                                                    <p class="small mb-0"><i class=" fa fa-calendar"></i>
                                                        Inicio :
                                                        {{ $evento->dataInicio }}</p>
                                                    <p class="small mb-0"> <i class="fa fa-calendar"
                                                            aria-hidden="true"></i>
                                                        Terminio : {{ $evento->dataFim }}
                                                    </p>
                                                    <p class="small mb-0"><i class=" fa fa-clock"></i>
                                                        Hora :
                                                        {{ $evento->hora }}</p>
                                                    <p class="small mb-0"><i class="fa fa-hourglass-end"></i>
                                                        Duração :
                                                        {{ $evento->duracao }} Horas </p>
                                                @endif
                                            </div>
                                            <!-- Entry Fees -->
                                            <div class="col-sm-6 col-lg-4">
                                                <h5>Taxas de entrada</h5>
                                                <p class="small mb-0"> <a href="#!"> {{ $evento->privado }} </a>
                                                </p>
                                            </div>
                                            <!-- Category & Type -->
                                            <div class="col-sm-6 col-lg-4">
                                                <h5>Categoria e tipo</h5>
                                                <p class="small mb-0"><i class="fa fa-bullseye"> </i>
                                                    {{ $evento->tipo_categoria }}
                                                </p>
                                            </div>
                                            <div class="col-sm-3 col-lg-3">
                                                <h5>Cidade</h5>
                                                <p class="small mb-0"><i class="fa fa-building"></i>
                                                    {{ $evento->cidade }}
                                                </p>

                                            </div>
                                            <div class="col-sm-7 col-lg-7">
                                                <h5>Localização</h5>
                                                <p class="small mb-0"><i class="fa fa-map-marker"></i>
                                                    {{ $evento->localizacao }} </p>
                                            </div>
                                            <!-- Estimated Turnout -->
                                            {{-- <div class="col-sm-6 col-lg-4">
                                            <h5>Afluência estimada</h5>
                                            <p class="small mb-0">140000 Visitors</p>
                                            <p class="small mb-0"> 1800 Exhibitors</p>
                                            <span class="badge bg-danger text-danger bg-opacity-10 small">Estimated
                                                Count</span>
                                        </div> --}}
                                            <div class="col-sm-6">

                                                <a class="btn btn-info-soft btn-sm"> <i class="fa fa-cloud-download"
                                                        aria-hidden="true"></i>
                                                    Download enexo</a>
                                            </div>
                                            <div class="col-sm-12 col-lg-12">
                                                <!-- Interested -->
                                                <div class="d-flex">
                                                    <button class="btn btn-success-soft btn-sm">Interessado?</button>
                                                    <h6> <i class="bi bi-hand-thumbs-up-fill text-success"></i> 50
                                                    </h6>
                                                    <p class="small"> pessoas demonstraram interesse recentemente</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mt-4">
                                        <div class="row ">
                                            <div class="col-lg-8">
                                                <div class="col-lg-8">
                                                    <h5>Proprietário</h5>
                                                    <!-- Avatar group START -->
                                                    <ul class="avatar-group list-unstyled align-items-center">
                                                        <li class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/01.jpg" alt="avatar">
                                                        </li>
                                                        <li class="ms-3">
                                                            <a href="Verperfil{{ $evento->dono->id }}">
                                                                {{ $evento->dono->name }}
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <h5>Participantes</h5>
                                                <!-- Avatar group START -->
                                                <ul class="avatar-group list-unstyled align-items-center">
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
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/05.jpg" alt="avatar">
                                                    </li>
                                                    <li class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/06.jpg" alt="avatar">
                                                    </li>
                                                    <li class="ms-3">
                                                        <small>16+</small>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Card About END -->

                                </div>
                            </div>
                        </div>
                        {{-- ver events --}}
                    @endforeach
                    {{ $eventos->links() }}
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
                        <a><img class="rounded" src="assets/images/events/maputo.jpg" alt=""></a>
                        <!-- Info -->
                        <h5 class="mt-4"> <a> Kotlin Night Maputo </a></h5>
                        <p>um evento onde desenvolvedores com experiência em Kotlin irão mostrar-nos algumas das
                            funcionalidades
                            principais da linguagem.</p>
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
                                            <h6>Quarta-feira, dia 24 de Abril,2023 </h6>
                                        </div>
                                        <!-- Tempo -->
                                        <div class="col-6">
                                            <small>Tempo</small>
                                            <h6>🌞Manhã 10h</h6>
                                        </div>
                                        <!-- Endereço -->
                                        <div class="col-12">
                                            <small>Endereço</small>
                                            <h6>Incubadora do Standard Bank.</h6>
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
                                                class="bi bi-ticket-fill pe-2"></i>
                                            Agende agora</a>
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
                                            class="btn-link text-reset stretch-link">Beira</a></h5>
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
                                            class="btn-link text-reset stretch-link">Nampula</a></h5>
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
                                            class="btn-link text-reset stretch-link">Tete</a></h5>
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
                                            class="btn-link text-reset stretched-link">Maputo</a></h5>
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
                        <h4>Explorar Comunidades </h4>
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
                                    <a href="#"><img
                                            class="avatar-img rounded-circle border border-white border-3 bg-mode"
                                            src="assets/images/logo/c3.png" alt=""></a>
                                </div>
                                <!-- Info -->
                                <h5 class="mb-0"> <a href="https://github.com/mozdevz">MozDevz Community</a> </h5>
                                <small> <i class="bi bi-github pe-1"></i>mozdevz</small>
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
                                    <a href="#"><img
                                            class="avatar-img rounded-circle border border-white border-3 bg-mode"
                                            src="assets/images/logo/c2.png" alt=""></a>
                                </div>
                                <!-- Info -->
                                <h5 class="mb-0"><a href="https://github.com/paymentsds">paymentsds</a></h5>
                                <small> <i class="bi bi-github pe-1"></i> paymentsds</small>
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
                                    <a href="#"><img
                                            class="avatar-img rounded-circle border border-white border-3 bg-mode"
                                            src="assets/images/logo/c1.png" alt=""></a>
                                </div>
                                <!-- Info -->
                                <h5 class="mb-0"> <a href="https://github.com/LCAV">Audiovisual Communications
                                        Laboratory</a>
                                </h5>
                                <small> <i class="bi bi-github pe-1"></i> LCAV</small>
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
                    <p class="mt-3">HomePoste e um projecto que,fiz com objectivo de crir uma plataforma para a
                        publicacao de eventos a nivel nacional. </p>
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
                                href="http://arnaldotomo.epizy.com//"> ArnaldoTomo </a>All rights reserved.</p>
                        <!-- Copyright END -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>


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
    <!-- Styles -->
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- API DA GOOGLE  --}}
    {{-- <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCH3OWhlyC6S28ThKEU4u8kIFkOFkBek5U">
    </script> --}}

    {{-- SELECT2 --}}
    <script>
        $('#month').select2({
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: true,
            dropdownParent: '#modalLabelCreateEvents',
            language: 'pt-BR',
            closeOnSelect: false
        });
    </script>


    {{-- SELECT2 --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#month1').select2({
                placeholder: "escolha cidade",
                allowClear: true,
                closeOnSelect: false
            });
        });
    </script>
    {{-- script de campo multiselect --}


    {{-- <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR9La_0xlSLF4KpbnVnooIJTsl_tkycFM&libraries=places&callback=initialize"
        async defer></script> --}} {{-- <script>
        $(document).ready(function() {
            var autocomplete;
            var to = 'criarlocalizacao';
            Autocomplete = new google.maps.places.Autocomplete((document.getElementById(to)), {
                types: ['geocode'],
            });
        });
    </> --}}

    {{-- <script type="text/javascript">
        var criarlocalizacao = document.getElementById("criarlocalizacao");
        var autocomplete;

        function initAutocomplete() {
            autocomplete = new google.maps.places.Autocomplete(
                criarlocalizacao, {
                    types: ['(cities)'],
                    componentRestrictions: {
                        'country': ['US']
                    },
                    fields: ['place_id', 'geometry', 'name']
                });
        }
    </script> --}}

    {{-- este comando chama o modal caso aga error  --}}
    @error('passworde')
        <script type="text/javascript">
            window.onload = function() {
                OpenBootstrapPopup();
            };

            function OpenBootstrapPopup() {
                $("#login_registar").modal('show');
            }
        </script>
    @enderror

    @error('password_confirmation')
        <script type="text/javascript">
            window.onload = function() {
                OpenBootstrapPopup();
            };

            function OpenBootstrapPopup() {
                $("#login_registar").modal('show');
            }
        </script>
    @enderror

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

    <script>
        function initializes() {
            var addresss = (document.getElementById('pac-inpute'));
            var autocomplete = new google.maps.places.Autocomplete(addresss);
            autocomplete.setTypes(['geocode']);
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    return;
                }

                var addresss = '';
                if (place.address_components) {
                    addresss = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }

                document.getElementById('lat').innerHTML = place.geometry.location.lat();
                document.getElementById('long').innerHTML = place.geometry.location.lng();
            });
        }

        google.maps.event.addDomListener(window, 'load', initializes);
    </script>

    <script>
        function initialize() {
            var address = (document.getElementById('pac-input'));
            var autocomplete = new google.maps.places.Autocomplete(address);
            autocomplete.setTypes(['geocode']);
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    return;
                }

                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }
                document.getElementById('lat').innerHTML = place.geometry.location.lat();
                document.getElementById('long').innerHTML = place.geometry.location.lng();
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


    <script>
        var path = "{{ url('autocomplete') }}";

        $('#typeahead').typeahead({
            source: function(terms, process) {
                return $.get(path, {
                    terms: terms
                }, function(data) {
                    return process(data);
                });
            }
        });
    </script>

    {{-- <script>
        var substringMatcher = function(strs) {
            return function findMatches(q, cb) {
                var matches, substringRegex;

                // an array that will be populated with substring matches
                matches = [];

                // regex used to determine if a string contains the substring `q`
                substrRegex = new RegExp(q, 'i');

                // iterate through the pool of strings and for any string that
                // contains the substring `q`, add it to the `matches` array
                $.each(strs, function(i, str) {
                    if (substrRegex.test(str)) {
                        matches.push(str);
                    }
                });

                cb(matches);
            };
        };

        var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
            'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
            'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
            'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
            'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
            'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
            'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
            'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
            'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
        ];

        $('#the-basics .typeahead').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'states',
            source: substringMatcher(states)
        });
    </script> --}}
</body>

</html>
