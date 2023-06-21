<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/estilos.css">
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
        <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <li><a class="nav-link" href="{$BASE_URL}home">home</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  categorias
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{$BASE_URL}categorias">categorias</a></li>
                  <li><a class="dropdown-item" href="{$BASE_URL}modelos">modelos</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">desactivado</a>
              </li>
              <li><a class="nav-link" href="{$BASE_URL}login">login</a></li>
              <li><a class="nav-link" href="{$BASE_URL}contenido">contenido</a></li>
              </ul>
          </div>
        </div>
      </nav>