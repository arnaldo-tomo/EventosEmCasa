@extends('layouts.corpo')


@section('content')
    {{-- Segundo Moda --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Segundo Moda --}}
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

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
                            @if (session('status'))
                                <script>
                                    $('#myModal').modal('show')
                                </script>
                            @endif
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
                                                placeholder="Oque ">
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
                                    <a href="{{ route('categoria') }}" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                                        <img class="h-40px mb-3" src="assets/images/icon/badge-outline-filled.svg"
                                            alt="">
                                        <h6>Artes e entretenimento</h6>
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
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="eventActionShare2">
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
                                <a class="btn btn-xs btn-primary mt-n3" href="{{ route('detalhes') }}">Conferência</a>
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
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="eventActionShare3">
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
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="eventActionShare4">
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

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <script>
        @error('email')
            // alert('Alert aboss')
            $('#exampleModalCenter').modal('show');
        @enderror
    </script>
@endsection
