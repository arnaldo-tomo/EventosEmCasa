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
    <script src="{{ URL::asset('assets/js/functions.js') }}"></script>


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
                                <a class="nav-link icon-md btn btn-light p-0" href="settings.html">
                                    <i class="bi bi-gear-fill fs-6"> </i>
                                </a>
                            </li>
                            <li class="nav-item dropdown ms-2">
                                <a class="nav-link icon-md btn btn-light p-0" href="#" id="notifDropdown"
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
                                                                <p class="small mb-2">Wish <b>Amanda Reed</b> a happy
                                                                    birthday
                                                                    (Nov 12)
                                                                </p>
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
                        <form id="login_recuperar" method="POST" action="{{ route('password.email') }}" @csrf
                            class="row g-4">
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
        <div class="modal fade" id="modalCreateEvents" tabindex="-1" aria-labelledby="modalLabelCreateEvents"
            aria-hidden="true">
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
                        <form method="POST" action="{{ route('salvar') }}" enctype="multipart/form-data"
                            class="row g-4">
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


        @yield('app')





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
    <script src="{{ asset('assets/js/jquery-3.2.1.slim.min.js') }}"></script>

    {{-- <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR9La_0xlSLF4KpbnVnooIJTsl_tkycFM&libraries=places&callback=initialize"
        async defer></script> --}}

    {{-- <script>
        $(document).ready(function() {
            var autocomplete;
            var to = 'criarlocalizacao';
            Autocomplete = new google.maps.places.Autocomplete((document.getElementById(to)), {
                types: ['geocode'],
            });
        });
    </script> --}}

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


    {{-- GOOGLE MAPS AIzaSyCH3OWhlyC6S28ThKEU4u8kIFkOFkBek5U --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCH3OWhlyC6S28ThKEU4u8kIFkOFkBek5U">
    </script>

    {{-- <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDfc3rDzZBc_PjmIbQF1xMEsuDS5H681po">
    </script> --}}
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
                /*********************************************************************/
                /* var address contain your autocomplete address *********************/
                /* place.geometry.location.lat() && place.geometry.location.lat() ****/
                /* will be used for current address latitude and longitude************/
                /*********************************************************************/
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
                /*********************************************************************/
                /* var address contain your autocomplete address *********************/
                /* place.geometry.location.lat() && place.geometry.location.lat() ****/
                /* will be used for current address latitude and longitude************/
                /*********************************************************************/
                document.getElementById('lat').innerHTML = place.geometry.location.lat();
                document.getElementById('long').innerHTML = place.geometry.location.lng();
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    {{-- GOOGLE MAPS --}}
</body>

</html>
