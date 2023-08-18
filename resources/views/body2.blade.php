<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset ('css/body/body.css') }}">
    <title>Document</title>


    <!--   Mes fichier Bootstrap   -->
    <link rel="stylesheet" href="{{ asset ('css/body/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/body/bootstrap.min.css') }}">
</head>
<body>
    <div class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-center">
                    <div class="val5">
                        <app-carte>
                            <img src="{{ asset ('img/humanite-numerique-uvci-allakro-1.jpg') }}" alt="carte" class="img-fluid pt-2">
                            <div class="pt-4">
                                <a href="#"><img src="{{ asset ('img/bouton.png') }}" alt="banniere" class="img-fluid"></a>
                            </div>
                        </app-carte>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="val6">
                        <div class="titre pl-4 pt-4">
                            <h4>Espace publicité </h4>
                        </div>
                        <div class="px-4 mt-2">
                         <app-espace-pub>
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="3000">
                                        <img src="{{ asset ('img/affiche_annexe_fiscale_2023.jpg') }}" alt="photo d'une fille" class="d-block w-500">
                                        <div class="titre-pub mt-2 py-2">
                                            <a href="#"><h5>L'annexe fiscale 2023</h5></a>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="3000">
                                        <img src="{{ asset ('img/bulletin_2023.jpg') }}" alt="photo d'une fille" class="d-block w-500">
                                        <div class="titre-pub mt-2 py-2">
                                            <a href="#"><h5>Le bulletin officiel de la DGI édition 2023</h5></a>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="3000">
                                        <img src="{{ asset ('img/code_2023.png') }}" alt="photo d'une fille" class="d-block w-500">
                                        <div class="titre-pub mt-2 py-2">
                                            <a href="#"><h5>Le code général des Impôts</h5></a>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="3000">
                                        <img src="{{ asset('img/ligne-verte.jpg') }}" alt="photo d'une fille" class="d-block w-500">
                                        <div class="titre-pub mt-2 py-2">
                                            <a href="#"><h5>Ligne verte de la Direction Générale des Impôts</h5></a>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="{{ asset('img/campagne_lutte_cheques_portrait.jpg') }}" alt="photo d'une fille" class="d-block w-500">
                                        <div class="titre-pub mt-2 py-2">
                                            <a href="#"><h5>Campagne de lutte contre les incidents de paiements liés aux chèques</h5></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </app-espace-pub>
                         <div class="d-flex justify-content-center">
                            <a href="#" class="val7">Voir plus</a>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Mes fichier Bootstrap JS -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>