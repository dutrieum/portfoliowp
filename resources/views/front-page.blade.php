@extends('layouts.app')

@section('content')
  <h1 id="front">Accueil</h1>
  <div class="home_content">
    <img src="{{ get_template_directory_uri() }}/assets/images/unnamed.jpg" alt="Portrait" class="home_picture">
      <div class="home_text">
        <h2>Qui suis-je ?</h2>
        <p>À l'ère du corona, on se présente avec un masque (je suis à gauche, au cas où). Bienvenue dans ce portfolio un peu spécial qui retrace les différentes réalisations que j'ai eu l'occasion de faire durant mon DUT MMI. Je suis donc étudiante, bientôt alternante et surtout développeuse web en devenir. PS : je viens de Haute-Savoie, j'ai 19 ans et mon nom est écrit un peu partout sur ce site. PS 2 : ce site ne compte clairement pas comme une de mes réalisations.
        </p>      
      </div>
  </div>
  <div class="see_projects">
      <h2 id="pssst">Pssst, viens voir par ici</h2>
      <img src="{{ get_template_directory_uri() }}/assets/images/left-arrow.svg" alt="Back arrow" class="arrow_frontpage">
      <a href="{{ home_url('/projet/') }}">Découvrir mes oeuvres</a>
  </div>
@endsection
