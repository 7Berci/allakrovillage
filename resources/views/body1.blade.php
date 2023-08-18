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
    <div class="container">
        <div class="row">
        <!-- <div class="col-sm-12 col-md-12 col-lg-12">
                <a href="#"><img src="{{ asset ('img/Composition-final-2.gif') }}" alt="dgi" class="val1"></a>
            </div> -->
        </div>
    </div> 
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <img src="{{ asset ('img/télécharger (1).jpg') }}" alt="photo d'une fille" class="d-block w-100">
                            <div class="val2">
                                <a href="#">36ème conférence annuelle du CREDAF</a>
                            </div>
                            <div class="val3">
                                <p class="text-white">24/06/2023</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="{{ asset ('img/télécharger (2).jpg') }}" alt="photo d'une fille" class="d-block w-100">
                            <div class="val2">
                                <a href="#">Séminaire sur l’implémentation de la comptabilisation des recettes fiscales en droits constatés</a>
                            </div>
                            <div class="val3">
                                <p class="text-white">19/06/2023</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="{{ asset ('img/télécharger (3).jpg') }}" alt="photo d'une fille" class="d-block w-100">
                            <div class="val2">
                                <a href="#">Mission de la Direction générale des Impôts du Gabon</a>
                            </div>
                            <div class="val3">
                                <p class="text-white">08/06/2023</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="{{ asset ('img/télécharger (4).jpg') }}" alt="photo d'une fille" class="d-block w-00">
                            <div class="val2">
                                <a href="#">Séminaire bilan du 2ème trimestre et du 1er semestre 2023</a>
                            </div>
                            <div class="val3">
                                <p class="text-white">27/07/2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 val4">
                <div>
                    <div class="text-center">
                        <img src="{{ asset ('img/OSA.png') }}" alt="osa">
                    </div>
                    <div class="nom-dg text-center mt-2">Professeur KONE TIEMOMAN</div>
                    <div class="fonction-dg text-orange text-center">Directeur Général de l'UVCI</div>
                    <div class="mot-dg d-flex justify-content-center align-items-center">
                        <a href="{{ route('presentation') }}" class="px-2">Projet communautaire Allakro</a>
                        <!--<a href="#" class="px-2">CV du DG</a>
                        <a href="#" class="px-2">Ecrire au DG</a> -->
                    </div>
                </div>
               <!-- <div class="dga-igsf mt-2 px-4">
                    <div class="dga-1">
                        <div class="text-center">
                            <img src="{{ asset ('img/drbamba.jpg') }}" alt="dr">
                            <div class="mt-1">Dr BAMBA Maférima Epse M'BAHIA</div>
                        </div>
                    </div>
                    <div class="dga-2">
                        <div class="text-center">
                            <img src="{{ asset ('img/cissé aboubakari.jpg') }}" alt="cis">
                            <div class="mt-1">M. CISSE Aboubacari</div>
                        </div>
                    </div>
                    <div class="igsf">
                        <div class="text-center">
                            <img src="{{ asset ('img/lgsf.jpg') }}" alt="igsf">
                            <div class="mt-1">Mme KADJO Véronique Epse BAMBA</div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row titre-dga">
                        <div data-toggle="tooltip" data-placement="bottom" title="Directeur Général Adjoint" class="col text-center text-orange font-weight-bold">D.G.A.</div>
                        <div data-toggle="tooltip" data-placement="bottom" title="Directeur Général Adjoint" class="col text-center text-orange font-weight-bold">D.G.A.</div>
                        <div data-toggle="tooltip" data-placement="bottom" title="Inspecteur Général des Services Fiscaux" class="col text-center text-orange font-weight-bold">I.G.S.F.</div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>

    <!--   Mes fichier Bootstrap JS -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>