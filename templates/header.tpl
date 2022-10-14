<!DOCTYPE html>
<html lang="en">

<head>
  <base href="{BASE_URL}">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>The Circus Tour</title>
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
  <link href="img/carpa-circo.png" rel="icon" type="image/x-icon" />
</head>

<body class="p-3 mb-2 bg-dark text-white">
  <header>
    <nav class="navbar navbar-expand-lg p-3 mb-2 bg-danger text-white">
      <div class="container-fluid">
        <a class="navbar-brand font-weight-bold" href="home">The CIRCUS Tour</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shows">Tour</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="artists">Artists</a>
            </li>
            {if !isset($smarty.session.USER_ID)}
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="login">Login</a>
              </li>
            {else}
              <li class="nav-item ml-auto">
                <a class="nav-link" aria-current="page" href="logout">Logout ({$smarty.session.USER_EMAIL})</a>
              </li>
            {/if}

          </ul>
        </div>
      </div>
      </div>
    </nav>
    <img class="banner" src="img/banner.jpg" alt="Circo">
  </header>
  <!-- inicio main container -->
<main class="container">