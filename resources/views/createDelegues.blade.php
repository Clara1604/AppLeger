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

<h1 class="titre">Ajouter Visiteur</h1>

            <!---------------- Formulaire ------------------>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Identifiant</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a number">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nom</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Prénom</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Prénom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Numéro de téléphone</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Numéro de téléphone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mail</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mail">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Identifiant Délégués</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
      <option>16</option>
      <option>17</option>
      <option>18</option>
      <option>19</option>
      <option>20</option>
      <option>21</option>
      <option>22</option>
      <option>23</option>
      <option>24</option>
      <option>25</option>
      <option>26</option>
      <option>27</option>
      <option>28</option>
      <option>29</option>
      <option>30</option>
    </select>
  </div>
  <button type="submit" class="btn btn success">Submit</button>
</form>