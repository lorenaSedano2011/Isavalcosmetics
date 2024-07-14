<!-- resources/views/layouts/app.blade.php -->

<html>

<head>
    <title>Isaval - @yield('title')</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <script src="https://kit.fontawesome.com/5556539836.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-expand-lg  bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="/"><img src="/img/isaval.png" style="width: 150px; height: 70px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{route('Clientes.index')}}">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{route('Productos.index')}}">Productos</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        @yield('contenido')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
