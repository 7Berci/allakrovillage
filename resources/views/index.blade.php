<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/vizew/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 22:01:05 GMT -->
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<title>Allakro Village &amp; Le village au beau milieu d'Abidjan</title>

<link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script nonce="bad8bccf-c220-4159-b84a-86bd0fbb7625">(function(w,d){!function(j,k,l,m){j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz.q=[];j.zaraz._f=function(n){return function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const w of Object.entries(Object.entries(dataLayer).reduce(((x,y)=>({...x[1],...y[1]})),{})))zaraz.set(w[0],w[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const z=j.zaraz.q.shift();j[l].q.push(z)}r.defer=!0;for(const A of[localStorage,sessionStorage])Object.keys(A||{}).filter((C=>C.startsWith("_zaraz_"))).forEach((B=>{try{j[l]["z_"+B.slice(7)]=JSON.parse(A.getItem(B))}catch{j[l]["z_"+B.slice(7)]=A.getItem(B)}}));r.referrerPolicy="origin";r.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
@include('includes.header')
<!--<div class="preloader d-flex align-items-center justify-content-center">
<div class="lds-ellipsis"> -->
<div></div>
<div></div>
<div></div>
<div></div>
</div>
</div>

@include('body1')

<section class="trending-posts-area">
<div class="container">
<div class="row">
<div class="col-12">

<div class="section-heading">
<h4>Actualité</h4>
<div class="line"></div>
</div>
</div>
</div>
<div class="row">

<div class="col-12 col-md-4">
<div class="single-post-area mb-80">

<div class="post-thumbnail">
<img src="{{ asset('img/amenagement.jpg') }}" alt="">

</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Aménagement</a>
<a href="{{ route('demenagement1') }}" class="post-title">Mouvement Grandissant vers le Centre d'Allakro</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-4">
 <div class="single-post-area mb-80">

<div class="post-thumbnail">
<img src="{{ asset('img/nbirth.jpg') }}" alt="">

</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-danger">Naissance</a>
<a href="{{ route('single-post') }}" class="post-title">L'Aube d'une Nouvelle Génération à Allakro</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-4">
<div class="single-post-area mb-80">

<div class="post-thumbnail">
<img src="{{ asset('img/picarticlehome.png') }}" alt="">

</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-primary">Article</a>
<a href="{{ route('single-post') }}" class="post-title">Modernisation des Infrastructures à Allakro</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

@include('body2')

<section class="vizew-post-area mb-50">
<div class="container">
<div class="row">
<div class="col-12 col-md-7 col-lg-8">
<div class="all-posts-area">

<div class="section-heading style-2">
<h4>Espace Santé</h4>
<div class="line"></div>
</div>

<div class="featured-post-slides owl-carousel mb-30">

<div class="single-feature-post video-post bg-img" style="background-image: url(img/bg-img/14.jpg);">

<a href="{{ route('video-post') }}" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

<div class="post-content">
<a href="#" class="post-cata">Pharmacie</a>
<a href="{{ route('single-post') }}" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
</div>
</div>

</div>

<div class="single-feature-post video-post bg-img" style="background-image: url(img/bg-img/7.jpg);">

<a href="{{ route('video-post') }}" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

<div class="post-content">
<a href="#" class="post-cata">Sports</a>
<a href="{{ route('single-post') }}" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
</div>
</div>

<span class="video-duration">05.03</span>
</div>
</div>

<div class="row">

<div class="col-12 col-md-6">
<div class="single-post-area mb-80">

<div class="post-thumbnail">
<img src="http://127.0.0.1:8000/img/palque.jpg" alt="">

</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-danger">Voir plus</a>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-80">

<div class="post-thumbnail">
<img src="http://127.0.0.1:8000/img/bg-img/13" alt="">

 </div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-primary">Pharmacie</a>
<a href="http://127.0.0.1:8000/single-post" class="post-title">Pharmacie de la Plaque 2, dans les environs du village d'Allakro</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
</div>
</div>



<div class="row">

<div class="col-12 col-md-6">
<div class="single-post-area mb-80">

<div class="post-thumbnail">
<img src="{{ asset('img/cliniquepaulaholi.png') }}" alt="">

</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-danger">Voir plus</a>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-80">

<div class="post-thumbnail">
<img src="{{ asset('img/bg-img/13') }}" alt="">

 </div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-primary">Centre de santé</a>
<a href="{{ route('single-post') }}" class="post-title">Clinique Paul Aholi, un établissement sanitaire dans les environs d'Allakro</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
</div>
</div>

<div class="section-heading style-2">
<h4>Offres d'emploi</h4>
<div class="line"></div>
</div>

<div class="featured-post-slides owl-carousel mb-30">

<div class="single-feature-post video-post bg-img" style="background-image: url(img/bg-img/14.jpg);">

<a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

<div class="post-content">
<a href="#" class="post-cata">Sports</a>
<a href="{{ route('single-post') }}" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
</div>
</div>

<span class="video-duration">05.03</span>
</div>

<div class="single-feature-post video-post bg-img" style="background-image: url(img/bg-img/7.jpg);">

<a href="{{ route('video-post') }}" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

<div class="post-content">
<a href="#" class="post-cata">Sports</a>
<a href="{{ route('single-post') }}" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
</div>
</div>

<span class="video-duration">05.03</span>
</div>
</div>
 
<div class="single-post-area mb-30">
<div class="row align-items-center">
<div class="col-12 col-lg-6">

<div class="post-thumbnail">
<img src="{{ asset('img/picoffres-d-emploi-min.jpg') }}" alt="">

</div>
</div>
<div class="col-12 col-lg-6">

<div class="post-content mt-0">
<a href="#" class="post-cata cata-sm cata-success">Offre</a>
<a href="{{ route('single-post') }}" class="post-title mb-2">Gestionnaire Communautaire d'Allakro</a>
<div class="post-meta d-flex align-items-center mb-2">
<a href="#" class="post-author">By Berci</a>
<i class="fa fa-circle" aria-hidden="true"></i>
<a href="#" class="post-date">Sep 08, 2018</a>
</div>
<p class="mb-2">Rejoignez notre équipe dédiée et participez activement à la vie du village.</p>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
</div>
</div>
</div>
</div>
</div>

<div class="single-post-area mb-30">
<div class="row align-items-center">
<div class="col-12 col-lg-6">

</div>
<div class="col-12 col-lg-6">

<div class="post-content mt-0">
<a href="#" class="post-cata cata-sm cata-danger">Voir plus</a>

</div>
</div>
</div>
</div>

<div class="single-post-area mb-30">
<div class="row align-items-center">
<div class="col-12 col-lg-6">

</div>
<div class="col-12 col-lg-6">

<div class="post-content mt-0">
</div>
</div>
</div>
</div>

<div class="single-post-area mb-30">
<div class="row align-items-center">
<div class="col-12 col-lg-6">

</div>
<div class="col-12 col-lg-6">

</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-5 col-lg-4">
<div class="sidebar-area">

<div class="single-widget followers-widget mb-50">
<a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="counter">198</span><span>Fan</span></a>
<a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span class="counter">220</span><span>Followers</span></a>
<a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i><span class="counter">140</span><span>Subscribe</span></a>
</div>

<div class="single-widget latest-video-widget mb-50">

<div class="section-heading style-2 mb-30">
<h4>Centres commerciaux</h4>
<div class="line"></div>
</div>

<div class="single-post-area mb-30">

<div class="post-thumbnail">
<img src="{{ asset('img/bg-img/centrecommerciaux.png') }}" alt="">

</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Centre commercial</a>
<a href="{{ route('single-post') }}" class="post-title">Prosper Alla</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>

<div class="single-blog-post d-flex">
<div class="post-thumbnail">
<img src="{{ asset('img/bg-img/supermarche-sococe.png') }}" alt="">
</div>
<div class="post-content">
<a href="{{ route('single-post') }}" class="post-title">SACR Supermarché</a>
<div class="post-meta d-flex justify-content-between">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 29</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 08</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 23</a>
</div>
</div>
</div>

<div class="single-blog-post d-flex">

<div class="post-content">
<a href="{{ route('single-post') }}" class="post-title">Voir plus</a>
</div>
</div>

</div>


<div class="single-widget newsletter-widget mb-50">

<div class="section-heading style-2 mb-30">
<h4>Newsletter</h4>
<div class="line"></div>
</div>
<p>Souscris à notre newsletter et reçois des notifications à propos des nouveautés, relatives à la communauté d'Allakro.</p>

<div class="newsletter-form">
<form action="#" method="post">
<input type="email" name="nl-email" class="form-control mb-15" id="emailnl" placeholder="Enter your email">
<button type="submit" class="btn vizew-btn w-100">Subscribe</button>
</form>
</div>
</div>

</div>
</div>
</div>
</div>
</section>

<!--
<footer class="footer-area">
<div class="container">
<div class="row">

<div class="col-12 col-sm-6 col-xl-3">
<div class="footer-widget mb-70">

<a href="{{route ('index-2') }}" class="foo-logo d-block mb-4"><img src="{{asset ('img/core-img/logo2.png') }}" alt=""></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

<div class="footer-nl-area">
<form action="#" method="post">
<input type="email" name="nl-email" class="form-control" id="nlEmail" placeholder="Your email">
<button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
</form>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-xl-3">
<div class="footer-widget mb-70">
<h6 class="widget-title">Latest Twister</h6>

<div class="twitter-slides owl-carousel">

<div class="single--twitter-slide">

<div class="single-twit">
<p><i class="fa fa-twitter"></i> <span>@Leonard</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
</div>

<div class="single-twit">
<p><i class="fa fa-twitter"></i> <span>@Leonard</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
</div>
</div>

<div class="single--twitter-slide">
 
<div class="single-twit">
<p><i class="fa fa-twitter"></i> <span>@Colorlib</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
</div>

<div class="single-twit">
<p><i class="fa fa-twitter"></i> <span>@Colorlib</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
</div>
</div>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-xl-3">
<div class="footer-widget mb-70">
<h6 class="widget-title">Sport Videos</h6>

<div class="single-blog-post d-flex">
<div class="post-thumbnail">
<img src="{{asset ('img/bg-img/1.jpg') }}" alt="">
</div>
<div class="post-content">
<a href="{{route ('single-post') }}" class="post-title">DC Shoes: gymkhana the</a>
<div class="post-meta d-flex justify-content-between">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
</div>
</div>
</div>

<div class="single-blog-post d-flex">
<div class="post-thumbnail">
<img src="{{asset ('img/bg-img/2.jpg') }}" alt="">
</div>
<div class="post-content">
<a href="{{route ('single-post') }}" class="post-title">Sweet Yummy Chocolatea Tea</a>
<div class="post-meta d-flex justify-content-between">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
</div>
</div>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-xl-3">
<div class="footer-widget mb-70">
<h6 class="widget-title">Our Address</h6>

<div class="contact-address">
<p>101 E 129th St, East Chicago, <br>IN 46312, US</p>
<p>Phone: 001-1234-88888</p>
<p>Email: <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0e67606861206d6162617c62676c4e69636f6762206d6163">[email&#160;protected]</a></p>
</div>

<div class="footer-social-area">
<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>

<div class="copywrite-area">
<div class="container">
<div class="row align-items-center">

<div class="col-12 col-sm-6">
<p class="copywrite-text">
Copyright &copy;<script data-cfasync="false" src="{{asset ('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
</p>
</div>
<div class="col-12 col-sm-6">
<nav class="footer-nav">
<ul>
<li><a href="#">Advertise</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Disclaimer</a></li>
<li><a href="#">Privacy</a></li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</footer>
-->

@include('includes.footer')

<script src="{{asset ('js/jquery/jquery-2.2.4.min.js') }}"></script>

<script src="{{asset ('js/bootstrap/popper.min.js') }}"></script>

<script src="{{asset ('js/bootstrap/bootstrap.min.js') }}"></script>

<script src="{{asset ('js/plugins/plugins.js') }}"></script>

<script src="{{asset ('js/active.js') }}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7ed828afd9597755","version":"2023.7.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/vizew/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 22:01:20 GMT -->
</html>