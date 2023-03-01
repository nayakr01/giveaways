<?php require ('views/header.php') ?>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.php/index">
                            <i class="fas fa-home"></i>
                            <span class="ml-2">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/index.php/list">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <span class="ml-2">Listado</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php/raffles">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket" viewBox="0 0 16 16">
                                <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z" />
                            </svg>
                            <span class="ml-2">Crear Rifa</span>
                        </a>
                    </li>
                    <?php if($_SESSION['level'] == 2): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php/domino">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <span class="ml-2">Crear Dominó</span>
                        </a>
                    </li>
                    <?php endif; ?>
            </div>
        </nav>
        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
            <h1 class="h2">Gestión de Sorteos</h1>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="card border-0 shadow-lg pt-4 my-5 position-relative">
                        <div class="card-body p-10">
                            <div class="card-text pt-10">
                                <h1 class="text-center"><i class="fa fa-user-circle" aria-hidden="true"></i></h1>
                                <h5 class="member-name mb-0 text-center text-dark font-weight-bold">Bienvenid@ <?php echo $_SESSION['user']; ?>
                                </h5>
                                <div class="mb-3 text-center">Tu nivel de acceso es: <?php echo $_SESSION['level']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer theme-bg-primary border-0 text-center">
                            <ul class="social-list list-inline mb-0 mx-auto"> <i class="fa fa-trophy" aria-hidden="true"></i> Sorteos
                            </ul>
                        </div>
                    </div>
        </main>
    </div>
</div>
</body>
</html>