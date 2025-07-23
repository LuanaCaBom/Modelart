<nav class="navbar navbar-dark navbar-centro fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand" href="#">Galeria de Obras de Arte</a>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('inicio')}}">
                            <span data-feather="home"></span>
                            Página inicial <span class="sr-only">(atual)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/obras">
                            <span data-feather="file"></span>
                            Exibir Obras Cadastrados
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('novaObra')}}">
                            <span data-feather="shopping-cart"></span>
                            Cadastro de Obras
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pesquisarObra')}}">
                            <span data-feather="users"></span>
                            Pesquisar Obras
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

