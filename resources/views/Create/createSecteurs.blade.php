<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <!-- si on veut lier à un fichier css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="viewSecteurs.css" />

</head>

<tbody>
             <!----------------Barre de recherche ------------------>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">GSB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('goHome')}}">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('goSecteurs')}}">Secteurs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('goResponsables')}}">Responsables</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('goDelegues')}}">Délégués</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('goVisiteurs')}}">Visiteurs</a>
      </li>
    </ul>
  </div>
</nav>
             <!---------------- Fin Barre de recherche ------------------>

<h1 class="titre">Ajouter Secteurs</h1>

            <!---------------- Formulaire ------------------>

<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Identifiant</label>
    <input type="number" class="form-control" name="SectCode" placeholder="Enter a number">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nom</label>
    <input type="name" class="form-control" name="SectNom" placeholder="Nom">
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  <input type="submit" class="btn success" value="Valider"></input>
</form>
