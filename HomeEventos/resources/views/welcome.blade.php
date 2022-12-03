@extends('layouts.app')

@section('app')
    {{--  --}}

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
                                            placeholder="Oque" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <!-- Where -->


                                    <div class="input-group">
                                        <input class="form-control form-control-lg me-1 pe-5" type="text"
                                            placeholder="Onde" id="pac-input" class="controls">
                                        {{-- <div id="lat"></div>
                                            <div id="long"></div> --}}
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
                                <a href="{{ route('categoria') }}" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                                    <img class="h-40px mb-3" src="assets/images/icon/badge-outline-filled.svg"
                                        alt="">
                                    <h6>Artes e entretenimento </h6>
                                </a>
                                <!-- Category item -->
                                <a href="{{ route('categoria') }}" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                                    <img class="h-40px mb-3" src="assets/images/icon/clipboard-outline-filled.svg"
                                        alt="">
                                    <h6> Negócios e conferências</h6>
                                </a>
                                <!-- Category item -->
                                <a href="{{ route('categoria') }}" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                                    <img class="h-40px mb-3" src="assets/images/icon/home-outline-filled.svg"
                                        alt="">
                                    <h6>PNY E-Gaming Fest</h6>
                                </a>
                                <!-- Category item -->
                                <a href="{{ route('categoria') }}" class="card card-body mb-3 mb-lg-0 p-3 text-center">
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
                                <img class="img-fluid rounded-top"
                                    @auth
href="" data-bs-toggle="modal"
                                    data-bs-target="#modalCreateEvents{{ $evento->id }}" @endauth
                                    src="/{{ $evento->imagen }}" alt="">
                                <div class="badge bg-danger text-white mt-2 me-2 position-absolute top-0 end-0">
                                    {{ $evento->localizacao }}
                                </div>
                            </div>
                            <!-- Card body START -->
                            <div class="card-body position-relative pt-0">
                                <!-- Tag -->
                                <a class="btn btn-xs btn-primary mt-n3">{{ $evento->tipo_categoria }}
                                </a>
                                <h5 class="mt-3"> <a href="" data-bs-toggle="modal"
                                        data-bs-target="#modalCreateEvents{{ $evento->id }}">
                                        {{ $evento->titulo }}
                                    </a>
                                </h5>
                                <!-- Data hora -->
                                <p class="mb-0 small"> <i class="bi bi-calendar-check pe-1"></i>
                                    {{ \Carbon\Carbon::parse($evento->dataInicio)->isoFormat('DD MMM Y') }} -
                                    {{ $evento->hora }} Horas</p>
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
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="eventActionShare">
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
                                                <a class="text-white" href="https://github.com/arnaldo-tomo"
                                                    target="_blank">https://github.com/arnaldo-tomo</a>
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
                                            <p class="small mb-0">Inicio :: {{ $evento->dataInicio }}</p>
                                            <p class="small mb-0">Fim :: {{ $evento->dataFim }}</p>
                                        </div>
                                        <!-- Entry Fees -->
                                        <div class="col-sm-6 col-lg-4">
                                            <h5>Taxas de entrada</h5>
                                            <p class="small mb-0"> <a href="#!"> Free Ticket </a>For photography
                                                professionals check official website</p>
                                        </div>
                                        <!-- Category & Type -->
                                        <div class="col-sm-6 col-lg-4">
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
                                        <button class="btn btn-danger-soft btn-sm"> <i class="fa fa-file-pdf"></i>
                                            Download enexo</button>
                                        <div class="col-sm-12 col-lg-12">
                                            <!-- Interested -->
                                            <div class="d-flex">
                                                <button class="btn btn-success-soft btn-sm">Interessado?</button>
                                                <h6> <i class="bi bi-hand-thumbs-up-fill text-success"></i> 50 </h6>
                                                <p class="small"> pessoas demonstraram interesse recentemente</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mt-4">
                                    <div class="row align-items-center">
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

                <a href="/Todos" role="button" class="btn btn-loader btn-primary-soft">
                    <span class="load-text"> Ver todos os eventos </span>
                    <div class="load-icon">
                        <div class="spinner-grow spinner-grow-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </a>
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
                    <a><img class="rounded" src="assets/images/events/06.jpg" alt=""></a>
                    <!-- Info -->
                    <h5 class="mt-4"> <a> Conferência global </a></h5>
                    <p>Ele luar difícil absorvê-lo, desportistas. Interessado tem todas as dificuldades de
                        Devonshire gay
                        alegria de assistência.</p>
                    <!-- Avatar group -->
                    <ul class="avatar-group list-unstyled align-items-center mb-0">
                        <li class="avatar avatar-xs">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
                        </li>
                        <li class="avatar avatar-xs">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
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
                                        <a class="btn btn-white" href="#"><i class="bi bi-share-fill pe-2"></i>
                                            Compartilhe </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center">
                                <div class="ticket-border">
                                    <!-- QR code -->
                                    <img class="w-200px mx-auto" src="assets/images/qr-code.png" alt="">
                                    <a class="btn btn-primary mt-3" href="#"><i class="bi bi-ticket-fill pe-2"></i>
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
                                <h5 class="text-white"><a href="#" class="btn-link text-reset stretch-link">Los
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
                            <ul class="avatar-group list-unstyled align-items-center justify-content-center mb-0 mt-3">
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
                            <ul class="avatar-group list-unstyled align-items-center justify-content-center mb-0 mt-3">
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
                            <ul class="avatar-group list-unstyled align-items-center justify-content-center mb-0 mt-3">
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
@endsection
