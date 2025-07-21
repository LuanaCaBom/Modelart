<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Agenda de contatos</a>
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
                        <a class="nav-link" href="{{route('indexObras')}}">
                            <span data-feather="file"></span>
                            Exibir Contatos Cadastrados
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('novoContato')}}">
                            <span data-feather="shopping-cart"></span>
                            Cadastro de Contatos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pesquisarContato')}}">
                            <span data-feather="users"></span>
                            Pesquisar Contato
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

