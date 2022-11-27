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
                                <a class="btn btn-primary-soft btn-sm" href="#" data-bs-toggle="modal"
                                    data-bs-target="#myModal"> <i class="fa-solid fa-sign-in pe-1"></i>
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



    {{-- Segundo Moda --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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

    <!-- Modal create events START tabindex="-1"-->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal feed header START -->
                <div class="modal-header">
                    <h5 class="modal-title" id="myModal">Enforme as suas credencias. </h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal feed header END -->
                <!-- Modal feed body START -->
                <div class="modal-body">
                    <!-- Form START -->
                    <form id="myModal" method="POST" action="{{ route('login') }}" class="row g-4">
                        {{ csrf_field() }}
                        <!-- Title -->
                        <div class="col-12">
                            <label class="form-label">Seu Email</label>
                            <input type="text" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                placeholder="exempla@gmail.com">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label">Sua senha</label>
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
                </div>
                <!-- Modal feed body END -->
                <!-- Modal footer -->
                <!-- Button -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger-soft me-2" data-bs-dismiss="modal">
                        Cancelar</button>
                    <button type="submit" class="btn btn-success-soft">Entrar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal create events START tabindex="-1"-->





    @yield('content')









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
    <script src="jquery.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="jquery.appear.js"></script>
    <script>
        @error('email')
            // alert('Alert aboss')
            $('#exampleModalCenter').modal('show');
        @enderror
    </script>
</body>

</html>
