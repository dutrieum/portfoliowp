@extends('layouts.app')

@section('content')
  <h1 id="front">Accueil</h1>
  <div class="home_content">
    <img src="{{ get_template_directory_uri() }}/assets/images/unnamed.jpg" alt="Portrait" class="home_picture">
      <div class="home_text">
        <h2>Qui suis-je ?</h2>
        <p>À l'ère du corona, on se présente avec un masque (je suis celle de gauche au cas où). Bienvenue dans ce portfolio un peu spécial qui retrace mes différentes réalisations faites durant mon DUT MMI. Je suis donc étudiante, bientôt alternante et surtout développeuse web en devenir.
        </p>      
      </div>
  </div>
  <div class="see_projects">
      <h2 id="pssst">Pssst, viens voir par ici</h2>
      <a href="{{ home_url('/projet/') }}">Découvrir mes oeuvres</a>
  </div>
@endsection
