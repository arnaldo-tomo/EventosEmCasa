<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from social.webestica.com/my-profile-events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 08:44:07 GMT -->

<head>
    <title>{{ $info->name }}</title>

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
    <link rel="stylesheet" type="text/css" href="assets/vendor/OverlayScrollbars-master/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/dist/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices.js/public/assets/styles/choices.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/glightbox-master/dist/css/glightbox.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/dropzone/dist/dropzone.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/flatpickr/dist/flatpickr.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/plyr/plyr.css" />

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GMKQ4P9YMZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-GMKQ4P9YMZ');
    </script>
</head>

<body>
    <!-- =======================
Header START -->
    <header class="navbar-light fixed-top header-static bg-mode">

        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="http://127.0.0.1:8000">
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

                    <!-- Nav Search END -->

                    <ul class="navbar-nav navbar-nav-scroll ms-auto">
                        <!-- Nav item 1 Demos -->


                        <!-- Nav item 4 Mega menu -->
                        <li class="nav-item">
                            <a class="nav-link" href="/Perfil">{{ Auth::user()->name }}</a>
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
                        <a class="nav-link btn icon-md p-0" href="#" id="profileDropdown" role="button"
                            data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="avatar-img rounded-2" src="assets/images/avatar/main.png" alt="">
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
                                    href="/Perfil">Visualizar perfil</a>
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
                                    <a data-bs-toggle="modal" class="avatar avatar-xxl mt-n5 mb-3">
                                        <img class="avatar-img rounded-circle border border-white border-3"
                                            src="assets/images/avatar/main.png" alt="">
                                    </a>
                                </div>


                                <div class="ms-sm-4 mt-sm-3">
                                    <!-- Info -->
                                    <h1 class="mb-0 h5">{{ $info->name }} <i
                                            class="bi bi-patch-check-fill text-success small"></i></h1>
                                    <p>250 conexões</p>
                                </div>
                                <!-- Button -->
                                <div class="d-flex mt-3 justify-content-center ms-sm-auto">
                                    <a href="Configuracoes" class="btn btn-danger-soft me-2" type="button"> <i
                                            class="bi bi-pencil-fill pe-1"></i> Editar perfil </a>
                                    <div class="dropdown">
                                        <!-- Card share action menu -->
                                        <button class="icon-md btn btn-light" type="button" id="profileAction2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <!-- Card share action dropdown menu -->
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileAction2">
                                            <li><a class="dropdown-item"href="#!" data-bs-toggle="modal"
                                                    data-bs-target="#feedActionPhoto"> <i
                                                        class="bi bi-bookmark fa-fw pe-2"></i>Actular foto de
                                                    perfil</a></li>
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
                                    30 nov 2022
                                </li>
                            </ul>
                        </div>
                        <!-- Card body END -->
                        <div class="card-footer mt-3 pt-2 pb-0">
                            <!-- Nav profile pages -->
                            <ul
                                class="nav nav-bottom-line align-items-center justify-content-center justify-content-md-start mb-0 border-0">

                                <li class="nav-item"> <a class="nav-link active" href="/Perfil">
                                        Meus Ventos</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="Sobre{{ $info->id }}"> Sobre
                                    </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="#">
                                        Conexões <span class="badge bg-success bg-opacity-10 text-success small">
                                            230</span> </a> </li>


                                <li class="nav-item"> <a class="nav-link" href="#">
                                        Atividade</a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card END -->

                    <!-- Events START -->
                    <div class="card">
                        <!-- Modal criar events  -->
                        <div class="modal fade" id="modalCreateEvents" tabindex="-1"
                            aria-labelledby="modalLabelCreateEvents" aria-hidden="true">
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
                                        <form method="POST" action="/Salvar" enctype="multipart/form-data"
                                            class="row g-4">
                                            <!-- Title -->
                                            @csrf
                                            <div class="col-12">
                                                <label class="form-label">Titulo</label>
                                                <input type="text" class="form-control" name="nome"
                                                    placeholder="Nome do evento">
                                            </div>
                                            <!-- Description -->
                                            <div class="col-12">
                                                <label class="form-label">Descrição</label>
                                                <textarea class="form-control" rows="2" name="descricao" placeholder="Ex: topicos, Cronograma, etc."></textarea>
                                            </div>
                                            <!-- Duração -->
                                            <div class="col-sm-6">
                                                <label class="form-label">Data Inicial</label>
                                                <input type="date" class="form-control flatpickr"
                                                    name="dataInicio" placeholder="Select date">
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
                                                <input type="duracao" class="form-control" name="duracao"
                                                    placeholder="1hr 23m">
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
                                                    data-enableTime="true" data-noCalendar="true"
                                                    placeholder="Select time">
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Localização</label>
                                                <input type="text" class="form-control" id="pac-inpute"
                                                    name="localizacao"
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
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/01.jpg" alt="avatar">
                                                    </li>
                                                    <li class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/02.jpg" alt="avatar">
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
                                                    <li class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/07.jpg" alt="avatar">
                                                    </li>
                                                    <li class="ms-3">
                                                        <small> +50 </small>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Carregar Fotografia</label>
                                                <input type="file" class="form-control" name="imagen">
                                            </div>

                                            <!-- Dropzone photo START -->
                                            <div class="mb-3">
                                                <label class="form-label">Carregar Anexo</label>
                                                <div name="anexo"
                                                    class="dropzone  dropzone-default card shadow-none"
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
                                        <button type="cancel" class="btn btn-danger-soft me-2"
                                            data-bs-dismiss="modal">
                                            Cancelar</button>
                                        <button type="submit" class="btn btn-success-soft">Criar Agora</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal criar events -->
                        <!-- Card header START -->
                        <div class="card-header d-sm-flex align-items-center justify-content-between border-0 pb-0">
                            <h5 class="card-title mb-sm-0">Descubra eventos</h5>
                            <!-- Button modal -->
                            <a class="btn btn-primary-soft" href="#" data-bs-toggle="modal"
                                data-bs-target="#modalCreateEvents"> <i class="fa-solid fa-plus pe-1"></i> Criar
                                evento</a>
                        </div>
                        <!-- Card header END -->
                        <!-- Card body START -->
                        <div class="card-body">

                            <!-- Events list START -->
                            <div class="row">
                                <div class="d-sm-flex align-items-center mb-2">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-xl">
                                        <a href="#!"><img class="avatar-img rounded border border-white border-3"
                                                src="/imagen/eventos/empresa.png" alt=""></a>
                                    </div>
                                    <div class="ms-sm-4 mt-2 mt-sm-0">
                                        <!-- Info -->
                                        <h5 class="mb-1"><a href="event-details.html">
                                                Saindo da Eleiete
                                            </a>
                                        </h5>
                                        <ul class="nav nav-stack small">
                                            <li class="nav-item">
                                                <i class="bi bi-calendar-check pe-1"></i>
                                                8 dez 2022
                                                -
                                                04:07:00 Horas
                                            </li>
                                            <li class="nav-item">
                                                <i class="bi bi-geo-alt pe-1"></i>
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
                                                id="profileAction" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <!-- Card share action dropdown menu -->
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="profileAction">
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-bookmark fa-fw pe-2"></i>Share profile
                                                        in
                                                        a
                                                        message</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-file-earmark-pdf fa-fw pe-2"></i>Save
                                                        your
                                                        profile to PDF</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-lock fa-fw pe-2"></i>Lock profile</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-gear fa-fw pe-2"></i>Profile
                                                        settings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="d-sm-flex align-items-center mb-2">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-xl">
                                        <a href="#!"><img class="avatar-img rounded border border-white border-3"
                                                src="/imagen/eventos/69077594_1215215648658234_6228177888913747369_n.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="ms-sm-4 mt-2 mt-sm-0">
                                        <!-- Info -->
                                        <h5 class="mb-1"><a href="event-details.html">
                                                DesignerMozDevz
                                            </a>
                                        </h5>
                                        <ul class="nav nav-stack small">
                                            <li class="nav-item">
                                                <i class="bi bi-calendar-check pe-1"></i>
                                                28 jan 2023
                                                -
                                                10:54:00 Horas
                                            </li>
                                            <li class="nav-item">
                                                <i class="bi bi-geo-alt pe-1"></i>
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
                                                id="profileAction" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <!-- Card share action dropdown menu -->
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="profileAction">
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-bookmark fa-fw pe-2"></i>Share profile
                                                        in
                                                        a
                                                        message</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-file-earmark-pdf fa-fw pe-2"></i>Save
                                                        your
                                                        profile to PDF</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-lock fa-fw pe-2"></i>Lock profile</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-gear fa-fw pe-2"></i>Profile
                                                        settings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="d-sm-flex align-items-center mb-2">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-xl">
                                        <a href="#!"><img class="avatar-img rounded border border-white border-3"
                                                src="/imagen/eventos/baixados.jpg" alt=""></a>
                                    </div>
                                    <div class="ms-sm-4 mt-2 mt-sm-0">
                                        <!-- Info -->
                                        <h5 class="mb-1"><a href="event-details.html">
                                                Feira do Livro
                                            </a>
                                        </h5>
                                        <ul class="nav nav-stack small">
                                            <li class="nav-item">
                                                <i class="bi bi-calendar-check pe-1"></i>
                                                5 jun 2023
                                                -
                                                10:44:00 Horas
                                            </li>
                                            <li class="nav-item">
                                                <i class="bi bi-geo-alt pe-1"></i>
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
                                                id="profileAction" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <!-- Card share action dropdown menu -->
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="profileAction">
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-bookmark fa-fw pe-2"></i>Share profile
                                                        in
                                                        a
                                                        message</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-file-earmark-pdf fa-fw pe-2"></i>Save
                                                        your
                                                        profile to PDF</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-lock fa-fw pe-2"></i>Lock profile</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-gear fa-fw pe-2"></i>Profile
                                                        settings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="d-sm-flex align-items-center mb-2">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-xl">
                                        <a href="#!"><img class="avatar-img rounded border border-white border-3"
                                                src="/imagen/eventos/02.jpg" alt=""></a>
                                    </div>
                                    <div class="ms-sm-4 mt-2 mt-sm-0">
                                        <!-- Info -->
                                        <h5 class="mb-1"><a href="event-details.html">
                                                Jejum de 22 dias
                                            </a>
                                        </h5>
                                        <ul class="nav nav-stack small">
                                            <li class="nav-item">
                                                <i class="bi bi-calendar-check pe-1"></i>
                                                1 dez 2022
                                                -
                                                16:43:00 Horas
                                            </li>
                                            <li class="nav-item">
                                                <i class="bi bi-geo-alt pe-1"></i>
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
                                                id="profileAction" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <!-- Card share action dropdown menu -->
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="profileAction">
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-bookmark fa-fw pe-2"></i>Share profile
                                                        in
                                                        a
                                                        message</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-file-earmark-pdf fa-fw pe-2"></i>Save
                                                        your
                                                        profile to PDF</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-lock fa-fw pe-2"></i>Lock profile</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-gear fa-fw pe-2"></i>Profile
                                                        settings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="d-sm-flex align-items-center mb-2">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-xl">
                                        <a href="#!"><img class="avatar-img rounded border border-white border-3"
                                                src="/imagen/eventos/04.jpg" alt=""></a>
                                    </div>
                                    <div class="ms-sm-4 mt-2 mt-sm-0">
                                        <!-- Info -->
                                        <h5 class="mb-1"><a href="event-details.html">
                                                Festas de djs afrika
                                            </a>
                                        </h5>
                                        <ul class="nav nav-stack small">
                                            <li class="nav-item">
                                                <i class="bi bi-calendar-check pe-1"></i>
                                                2 nov 2022
                                                -
                                                03:21:00 Horas
                                            </li>
                                            <li class="nav-item">
                                                <i class="bi bi-geo-alt pe-1"></i>
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
                                                id="profileAction" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <!-- Card share action dropdown menu -->
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="profileAction">
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-bookmark fa-fw pe-2"></i>Share profile
                                                        in
                                                        a
                                                        message</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-file-earmark-pdf fa-fw pe-2"></i>Save
                                                        your
                                                        profile to PDF</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-lock fa-fw pe-2"></i>Lock profile</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-gear fa-fw pe-2"></i>Profile
                                                        settings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="d-sm-flex align-items-center mb-2">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-xl">
                                        <a href="#!"><img class="avatar-img rounded border border-white border-3"
                                                src="/imagen/eventos/03.jpg" alt=""></a>
                                    </div>
                                    <div class="ms-sm-4 mt-2 mt-sm-0">
                                        <!-- Info -->
                                        <h5 class="mb-1"><a href="event-details.html">
                                                Explosao Profetica
                                            </a>
                                        </h5>
                                        <ul class="nav nav-stack small">
                                            <li class="nav-item">
                                                <i class="bi bi-calendar-check pe-1"></i>
                                                30 jan 2023
                                                -
                                                01:48:00 Horas
                                            </li>
                                            <li class="nav-item">
                                                <i class="bi bi-geo-alt pe-1"></i>
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
                                                id="profileAction" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <!-- Card share action dropdown menu -->
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="profileAction">
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-bookmark fa-fw pe-2"></i>Share profile
                                                        in
                                                        a
                                                        message</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-file-earmark-pdf fa-fw pe-2"></i>Save
                                                        your
                                                        profile to PDF</a></li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-lock fa-fw pe-2"></i>Lock profile</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#"> <i
                                                            class="bi bi-gear fa-fw pe-2"></i>Profile
                                                        settings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <nav>
                                    <ul class="pagination">

                                        <li class="page-item disabled" aria-disabled="true"
                                            aria-label="&laquo; Anterior">
                                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                        </li>





                                        <li class="page-item active" aria-current="page"><span
                                                class="page-link">1</span></li>
                                        <li class="page-item"><a class="page-link"
                                                href="http://127.0.0.1:8000/Perfil?page=2">2</a></li>


                                        <li class="page-item">
                                            <a class="page-link" href="http://127.0.0.1:8000/Perfil?page=2"
                                                rel="next" aria-label="Próximo &raquo;">&rsaquo;</a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                            <!-- Events list END -->

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
                        <!-- Card START -->
                        <div class="col-md-6 col-lg-12">
                            <div class="card">
                                <!-- Card header START -->
                                <div class="card-header d-sm-flex justify-content-between align-items-center border-0">
                                    <h5 class="card-title">Conexoes <span
                                            class="badge bg-danger bg-opacity-10 text-danger">4</span>
                                    </h5>
                                    <a class="btn btn-primary-soft btn-sm" href="#!"> Ver Todas Conexoes</a>
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
                                                    <div class="avatar avatar-xl">
                                                        <a href="#!"><img class="avatar-img rounded-circle"
                                                                src="assets/images/avatar/04.jpg" alt=""></a>
                                                    </div>
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#">
                                                            Arnaldo Tomo
                                                        </a></h6>
                                                    <p class="mb-0 small lh-sm">1 mutual connection</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0">
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Send message"> <i
                                                            class="bi bi-chat-left-text"></i>
                                                    </button>
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
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#">
                                                            Celso Julio Jose
                                                        </a></h6>
                                                    <p class="mb-0 small lh-sm">1 mutual connection</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0">
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Send message"> <i
                                                            class="bi bi-chat-left-text"></i>
                                                    </button>
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
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#">
                                                            Mauro Peniel
                                                        </a></h6>
                                                    <p class="mb-0 small lh-sm">1 mutual connection</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0">
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Send message"> <i
                                                            class="bi bi-chat-left-text"></i>
                                                    </button>
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
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#">
                                                            Rivaldo tomo
                                                        </a></h6>
                                                    <p class="mb-0 small lh-sm">1 mutual connection</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0">
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Send message"> <i
                                                            class="bi bi-chat-left-text"></i>
                                                    </button>
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

<!-- Mirrored from social.webestica.com/my-profile-events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 08:44:07 GMT -->

</html>
