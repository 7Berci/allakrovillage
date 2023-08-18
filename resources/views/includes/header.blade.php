<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/header/header.css">
    <title>Document</title>


    <!--   Mes fichier Bootstrap   -->
    <link rel="stylesheet" href="css/header/bootstrap.css">
    <link rel="stylesheet" href="css/header/bootstrap.min.css">
</head>
<header>
    <!--   DEBUT PREMIERE PARTIE   -->
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="col-sm-12 col-md-12 col-lg-12 head1">
                    <a href="#">20531 visiteurs <img src="{{ asset('img/467965-removebg-preview (2).png') }}" alt="logo_visibilité" style="width: 30px;"></a>
                    <a href="{{ route('login') }}">Messagerie professionelle <img src="{{ asset('img/logo_messagerie.png') }}" alt="logo_messagerie" style="width: 25px;"></a>
                </div>
            </div>
        </div>
    </div>
    <!--    FIN PREMIERE PARTIE   -->
    

    <!--    DEBUT DEUXIEME PARTIE  -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <a href="#"><img src="{{ asset('img/PbannerDepotPlainte3valid.png.jpg') }}" alt="dgi" class="head2"></a>
            </div>
        </div>
    </div>
    <!--   FIN DEUXIEME PARTIE  -->


    <!--   DEBUT TROISIEME PARTIE  -->
    <div class="container">
        <div class="row">
           <a href="#"> <img src="{{ asset('img/banniereDGI1VERIFIEReeeModif2.jpg') }}" alt="dgi" class="head3"> </a>
        </div>
    </div>
    <!--  FIN TROISIEME PARTIE  -->


    <!--  DEBUT QUATRIEME PARTIE  -->
    <div class="sticky-top">
      <nav class="navbar navbar-expand-lg bg-white head4">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="{{ asset('img\télécharger__2_-removebg-preview.png') }}" alt="logo_maison" style="width: 30px;" class="rounded-pill val"></a>
          <button class="navbar-toggler val5" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('presentation') }}"><span class="head6">Présentation</span></a>
              </li>
              <li class="nav-item dropdown head5">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" href="#"><span class="head6">Offre d'emploi</span></a>
                <ul class="dropdown-menu head7">
                    <li><a class="dropdown-item" href="{{ route('offredemploi/offres') }}"><span class="head8">Voir les offres</span></a></li>
                    <li><a class="dropdown-item" href="{{ route('offredemploi/profils') }}"><span class="head8">Voir les profils</span></a></li>
                    <li><a class="dropdown-item" href="{{ route('offredemploi/nouvelleoffre-demande') }}"><span class="head8">Nouvelle offre/demande</span></a></li>
                    </ul>
              </li>
              <li class="nav-item dropdown head5">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" href="#"><span class="head6">Espace santé</span></a>
                <ul class="dropdown-menu head7">
                    <li><a class="dropdown-item" href="{{ route('espacesante/pharmacie') }}"><span class="head8">Pharmacie</span></a></li>
                    <li>
                      <a class="dropdown-item" href="#"><span class="head8">Espace santé </span></a>
                        <ul class="dropright-menu head7">
                          <li><a class="dropdown-item" href="{{ route('espacesante/centredesante') }}"><span class="head8">Centres de santé</span></a></li>
                          <li><a class="dropdown-item" href="{{ route('espacesante/maladiesepidemies') }}"><span class="head8">Maladies et épidemies </span></a></li>
                    </ul>
                    </li>
                </ul>
              </li>
              <li class="nav-item dropdown head5">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" href="#"><span class="head6">Actualité</span></a>
                <ul class="dropdown-menu head7">
                    <li><a class="dropdown-item" href="{{ route('actualite/amenagement-demenagement') }}"><span class="head8">Amenagement/Déménagement</span></a></li>
                    <li><a class="dropdown-item" href="{{ route('actualite/naissance-deces') }}"><span class="head8">Naissance/Décès</span></a></li>
                    <li><a class="dropdown-item" href="{{ route('actualite/projetdemairie') }}"><span class="head8">Projets de mairie</span></a></li>
                  </ul>
              </li>
              <!-- <li class="nav-item dropdown head5">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" href="#"><span class="head6">Acteurs d'Allakro</span></a>
                <ul class="dropdown-menu head7">
                    <li><a class="dropdown-item" href="{{ route('acteurs/acteurslist') }}"><span class="head8">Les acteurs</span></a></li>
                    <li><a class="dropdown-item" href="{{ route('acteurs/centredinteret') }}"><span class="head8">Centre d'intérêt</span></a></li>
                    <li><a class="dropdown-item" href="{{ route('acteurs/competences') }}"><span class="head8">Compétences</span></a></li>
                    <li><a class="dropdown-item" href="{{ route('acteurs/centrescommerciaux') }}"><span class="head8">Centres commerciaux</span></a></li>
                  </ul>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('acteurs/acteurslist') }}"><span class="head6">Les acteurs</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('acteurs/centrescommerciaux') }}"><span class="head6">Centres commerciaux</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}"><span class="head6">Contacts</span></a>
              </li>
              <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Recherche">
                <a href="#">
                  <img src="{{ asset ('img/télécharger-removebg-preview.png') }}" alt="logo_recherche" style="width: 40px;">
                </a>
              </form>
            </ul>
          </div>
        </div>
      </nav>
    </div>
      <!--   FIN QUATRIEME PARTIE  -->
<!-- <script> 
.sticky-top{
  position: fixed;
  top: 0;
  width: 100%;
}
</script> -->
    

    <!--   Mes fichier Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset ('js/header/js-style.js') }}"></script>
    <script src="{{ asset ('js/header/bootstrap.js') }}"></script>
    <script src="{{ asset ('js/header/bootstrap.min.js') }}"></script>
</header>
</html>