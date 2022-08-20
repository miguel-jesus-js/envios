<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENVIOS</title>
    <link rel="stylesheet" href="{{ asset('assets/css/tabler.min.css') }}">
</head>

<body>

    <header class="navbar navbar-expand-md navbar-dark d-print-none">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href="/">
                    <h1>Envios Fast</h1>
                </a>
            </h1>
            <div class="navbar-nav flex-row order-md-last">
                <div class="d-none d-md-flex">
                    <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                        <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z">
                            </path>
                        </svg>
                    </a>
                    <a href="?theme=light" class="nav-link px-0 hide-theme-light" data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                        <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="4"></circle>
                            <path
                                d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7">
                            </path>
                        </svg>
                    </a>
                    <div class="nav-item dropdown d-none d-md-flex me-3">
                        <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                            aria-label="Show notifications">
                            <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                                </path>
                                <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                            </svg>
                            <span class="badge bg-red"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Notificaciones</h3>
                                </div>
                                <div class="list-group list-group-flush list-group-hoverable">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto"><span
                                                    class="status-dot status-dot-animated bg-red d-block"></span></div>
                                            <div class="col text-truncate">
                                                <a href="#" class="text-body d-block">Ejemplo 1</a>
                                                <div class="d-block text-dark text-truncate mt-n1">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="list-group-item-actions">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                        aria-label="Open user menu" aria-expanded="false">
                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003f.jpg)"></span>
                        <div class="d-none d-xl-block ps-2">
                            <div>Jesús López</div>
                            <div class="mt-1 small text-muted">winalllpz@gmail.com</div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <a href="#" class="dropdown-item">Mi perfil</a>
                        <a href="#" class="dropdown-item">Ajustes</a>
                        <a href="#" class="dropdown-item">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar navbar-light">
                <div class="container-xl">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="./#">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Registrar clientes
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aviso-privacidad">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Aviso de privacidad
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                        <form action="." method="get">
                            <div class="input-icon">
                                <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="10" cy="10" r="7"></circle>
                                        <line x1="21" y1="21" x2="15" y2="15"></line>
                                    </svg>
                                </span>
                                <input type="text" value="" class="form-control" placeholder="Buscar..."
                                    aria-label="Search in website">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container-fluid">
        <h1>Registrar clientes</h1>
        <hr>
        <form action="" id="add-clientes">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label required">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required value="miguel de jesus lopez lopez">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label required">Correo</label>
                    <input type="email" class="form-control" name="correo" placeholder="Correo" required value="winalllpz@gmail.com">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label required">Telefono</label>
                    <input type="text" class="form-control" name="telefono" placeholder="Telefono" required value="9191513420">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label required">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" required value="México">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label required">Estado</label>
                    <input type="text" class="form-control" name="estado" placeholder="Estado" required value="Chiapas">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label required">Municipio</label>
                    <input type="text" class="form-control" name="municipio" placeholder="Municipio" required value="Ocosingo">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label required">Colonia</label>
                    <input type="text" class="form-control" name="colonia" placeholder="Colonia" required value="bonampack">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Calle</label>
                    <input type="text" class="form-control" name="calle" placeholder="Calle" required value="yaxchilan">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">N° de casa</label>
                    <input type="number" class="form-control" name="n_casa" placeholder="N° de casa" value="18">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Código postal</label>
                    <input type="number" class="form-control" name="cp" placeholder="Código postal" value="29950">
                </div>

            </div>
            <button type="button" class="btn btn-success">Registrar</button>
            <button id="calcular" type="submit" class="btn btn-info">Calcular envío</button>
        </form>
        <br>
        <h1 id="calculando" class="d-none">Calculando distancia<span class="animated-dots"></span></h1>
        <div id="mapa-content" class="card d-none">
            <iframe id="mapa" width="100%" height="450" src="" frameborder="0"></iframe>
            <ul>
                <li class="h1">Distancia: <b id="distancia"></b></li>
                <li class="h1">Costo de envío: <b id="costo"></b></li>
            </ul>
        </div>
    </div>
    <br>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/tabler.min.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $('#add-clientes').submit(function(e){
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                'type': 'POST',
                'url': 'api/calcularEnvio',
                'data': data,
                beforeSend: function(){
                    $('#calculando').removeClass('d-none');
                },
                success: function(response){
                    let datos = JSON.parse(response);
                    $('#mapa').prop('src', 'https://www.google.com/maps/embed/v1/directions?key=AIzaSyAd5Qg9GBMiDwcVAz9ZyWKc1TjNi-zoU1Q&origin='+datos.origen+'&destination='+datos.destino+'&mode=driving');
                    $('#distancia').html(datos.distancia);
                    let arryDistancia = datos.distancia.split(' ');
                    let distancia = arryDistancia[0].replace(',','');
                    if(distancia <= 100){
                        $('#costo').html('$100');
                    }else if(distancia > 100 & distancia <= 200){
                        $('#costo').html('$130');
                    }else if(distancia > 200 & distancia <= 400){
                        $('#costo').html('$170');
                    }else if(distancia > 400 & distancia <= 700){
                        $('#costo').html('$210');
                    }else if(distancia > 700 & distancia <= 1000){
                        $('#costo').html('$250');
                    }else if(distancia > 1000){
                        $('#costo').html('$350');
                    }
                    $('#calculando').addClass('d-none');
                    $('#mapa-content').removeClass('d-none');
                }
            })
        })
    </script>
</body>
</html>