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
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket" viewBox="0 0 16 16">
                <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z" />
              </svg>
              <span class="ml-2">Crear Rifa</span>
            </a>
          </li>
          <?php if($_SESSION['level'] == 2): ?>
          <li class="nav-item">
            <a class="nav-link active" href="/index.php/domino">
              <i class="fa fa-plus" aria-hidden="true"></i>
              <span class="ml-2">Crear Dominó</span>
            </a>
          </li>
          <?php endif; ?>
      </div>
    </nav>
    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
      <div class="col-12 col-md-15 mb-4 mb-lg-0 col-lg-50">
        <h1 class="h2">Crear un Dominó</h1>
        <br>
        <form action="" method="post">
          <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="" required>
          </div>
          <div class="form-group">
            <label for="number">Número más alto de la ficha</label>
            <input type="number" name="number" id="number" class="form-control" aria-describedby="" placeholder="" min="0" max="6" required/>
          </div>
          <div class="form-group">
            <p class="text-center"></p>
          </div>
          <div class="col-md-12 text-center ">
          <input type="submit" class=" btn btn-block mybtn btn-success tx-tfm" value="Crear">
          </div>
          <hr class="hr-or">
        </form>
      </div>
    </main>
  </div>
</div>
</body>
</html>