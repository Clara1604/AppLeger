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
    @include('partials.searchDelegues')
  </div>
</nav>

{{$viewDelegues->links()}}
             <!---------------- Fin Barre de recherche ------------------>

<h1 class="titre">Les Délégues</h1>
<a type=" button" class="btn success" href="{{ route('addDelegues') }}">Ajouter un Délégués</a>
<br></br>
            
             <!------------------- tableau ---------------------->

             @if(session()->has("echecAjout"))
    <div class="alert alert-danger">
        <h3>{{session()->get('echecAjout')}}</h3>
    </div>
    @endif
    
<table class="table table-striped" align="center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Tel</th>
      <th scope="col">Mail</th>
      <th scope="col">Id Responsables</th>
      <th scope="col">Modifier</th>
      <!-- <th scope="col">Supprimer</th> -->
    </tr>
  </thead>
  <tbody>
            @foreach($viewDelegues as $delegue)
            <tr>
            <td class="pt-3-half" > {{$delegue->getKey()}} </td>
            <td class="pt-3-half" >{{$delegue->DelNom}}</td>
            <td class="pt-3-half" >{{$delegue->DelPrenom}}</td>
            <td class="pt-3-half" >{{$delegue->DelTel}}</td>
            <td class="pt-3-half" >{{$delegue->DelMail}}</td>
            <td class="pt-3-half" >{{$delegue->IdResp}}</td>
            <!-- bouton modifer -->
            <td class="pt-3-half" class="MS" > 
              <a type=" button" class="btn success" href="{{ route('updateDelegues', ['delegue'=>$delegue->IdDel]) }}">M</a>
            </td>
            <!-- bouton supprimer 
            <td class="pt-3-half" class="MS" >
            <a href="#" class="btn success" onclick="if(confirm('Voulez-vous vraiment supprimer ce délègué ?')){document.getElementById('{{$delegue->IdDel}}').submit() }">S</a>
                <form id="{{$delegue->IdDel}}" action="{{route('deleteDelegues',['delegue'=>$delegue->IdDel])}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                </form>            
                </td> -->
          </tr>
          @endforeach
  </tbody>
</table>

</tbody>