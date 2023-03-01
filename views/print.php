<?php require ('views/header.php') ?>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/index.php/index">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-ticket" viewBox="0 0 16 16">
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
            <h1 class="h2">Tickets del Sorteo</h1>
            <div class="row my-4">
                <?php 
                foreach ($giveaways as $num => $giveaway) {
                    if($giveaways[$index] instanceof Raffle) {
                    for ($i=$giveaways[$index]->firstTicket; $i <= $giveaways[$index]->lastTicket; $i++) { 
                    ?>
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-4">
                    <div class="card">
                        <h5 style="background-color: #000;" class="card-header text-center text-light">
                            <?php echo $giveaways[$index]->title?>
                        </h5>
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <?php echo $i; ?>
                            </h5>
                            <div class="card-footer theme-bg-warning border-0 text-center">
                                <ul class="social-list list-inline mb-0 mx-auto"> <i class="fa fa-trophy"
                                        aria-hidden="true"></i> Sorteos
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                        }
                    } else {
                        if($num == $index) {
                        for ($i=0; $i <= $giveaways[$index]->number; $i++) { 
                            for ($j=0; $j <= $giveaways[$index]->number; $j++) { 
                            ?>
                <div class="col-1 col-md-1 col-lg-1 mb-1 mb-lg-4">
                    <div class="domino">
                        <?php
                            switch ($i) {
                                case 0:
                                    echo "<span class=\"line\"></span>";
                                    break;
                                case 1:
                                    echo "
                                    <span class=\"TC135\"></span>
                                    <span class=\"line\"></span>";
                                    break;
                                case 2:
                                    echo "
                                    <span class=\"TL23456\"></span>
                                    <span class=\"TR23456\"></span>
                                    <span class=\"line\"></span>";
                                    break;
                                case 3:
                                    echo "
                                    <span class=\"TL23456\"></span>
                                    <span class=\"TC135\"></span>
                                    <span class=\"TR23456\"></span>
                                    <span class=\"line\"></span>";
                                    break;
                                case 4:
                                    echo "
                                    <span class=\"TL456\"></span>
                                    <span class=\"TL23456\"></span>
                                    <span class=\"TR23456\"></span>
                                    <span class=\"TR456\"></span>
                                    <span class=\"line\"></span>";
                                    break;
                                case 5:
                                    echo "
                                    <span class=\"TL456\"></span>
                                    <span class=\"TL23456\"></span>
                                    <span class=\"TC135\"></span>	
                                    <span class=\"TR23456\"></span>
                                    <span class=\"TR456\"></span>
                                    <span class=\"line\"></span>";
                                    break;
                                case 6:
                                    echo "
                                    <span class=\"TL456\"></span>
                                    <span class=\"TL23456\"></span>
                                    <span class=\"TL6\"></span>
                                    <span class=\"TR23456\"></span>
                                    <span class=\"TR6\"></span>
                                    <span class=\"TR456\"></span>
                                    <span class=\"line\"></span>";
                                    break;
                            }

                            switch ($j) {
                                case 0:
                                    echo "<span class=\"line\"></span>";
                                    break;
                                case 1:
                                    echo "<span class=\"BC135\"></span>";
                                    break;
                                case 2:
                                    echo "
                                    <span class=\"BL23456\"></span>
                                    <span class=\"BR23456\"></span>";
                                    break;
                                case 3:
                                    echo "
                                    <span class=\"BL23456\"></span>
                                    <span class=\"BC135\"></span>
                                    <span class=\"BR23456\"></span>";
                                    break;
                                case 4:
                                    echo "
                                    <span class=\"BL456\"></span>
                                    <span class=\"BL23456\"></span>
                                    <span class=\"BR23456\"></span>
                                    <span class=\"BR456\"></span>";
                                    break;
                                case 5:
                                    echo "
                                    <span class=\"BL456\"></span>
                                    <span class=\"BL23456\"></span>
                                    <span class=\"BC135\"></span>	
                                    <span class=\"BR23456\"></span>
                                    <span class=\"BR456\"></span>";
                                    break;
                                case 6:
                                    echo "
                                    <span class=\"BL456\"></span>
                                    <span class=\"BL6\"></span>
                                    <span class=\"BL23456\"></span>
                                    <span class=\"BR6\"></span>		
                                    <span class=\"BR23456\"></span>
                                    <span class=\"BR456\"></span>";
                                    break;
                            }
                        ?>
                    </div>
                </div>
                <?php
                                }
                            }
                        } 
                    }
                }
                ?>
        </main>
    </div>
</div>
</body>
</html>