<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
 
  <div class="container">
      
    <a class="navbar-brand" href="#">
    <img style="width:40px; margin-right:12px" src="{{URL::asset('/assets/img/favicon.png
')}}" alt="">
    Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
  </div>
</nav>

@yield('content')

<footer class="footer border border-top py-5 bg-light">
<div class="container">
<div class="footer-main u-pt50 u-pb50">
<div class="row">
<div class="col-sm-4">
<a class="text-decoration-none" style="color:black"; href="/"><div class="footer__logo">
<h3>
<img style="width:40px; margin-right:12px" src="{{URL::asset('/assets/img/favicon.png')}}">

ArfanYoga
</h3>
</div>
</a></div>
<div class="col-sm-2">
<h4>LAYANAN</h4>
<ul class="footer__menus list-unstyled text-decoration-none">
<li><a class="text-decoration-none" style="color:black" href="/courses">Pelajaran</a></li>
<li><a class="text-decoration-none" style="color:black" href="/plans/for_users">Paket</a></li>
<li><a class="text-decoration-none" style="color:black" href="/dashboard">Dasbor</a></li>
<li><a class="text-decoration-none" style="color:black" href="/success_stories">Kisah Sukses</a></li>
<li><a class="text-decoration-none" style="color:black" target="_blank" href="https://medium.com/progate">Blog</a></li>
<li><a class="text-decoration-none" style="color:black" href="/faqs">Bantuan</a></li>
</ul>
</div>
<div class="col-sm-2">
<h4>DUKUNGAN</h4>
<ul class="footer__menus list-unstyled text-decoration-none">
<li><a class="text-decoration-none" style="color:black" target="_blank" href="/about">Tentang Progate</a></li>
<li><a class="text-decoration-none" style="color:black" href="/policy">Ketentuan</a></li>
<li><a class="text-decoration-none" style="color:black" href="/privacy_policy">Kebijakan Privasi</a></li>
</ul>
</div>
<div class="col-sm-4">
<h4>IKUTI KAMI DI</h4>
<ul class="footer__menus footer__menus-sns list-unstyled text-decoration-none">
<li><a class="text-decoration-none" style="color:black" target="_blank" href="https://www.instagram.com/progateID/">Instagram</a></li>
<li><a class="text-decoration-none" style="color:black" target="_blank" href="https://twitter.com/progateID">Twitter</a></li>
<li><a class="text-decoration-none" style="color:black" target="_blank" href="https://www.facebook.com/ProgateID/">Facebook</a></li>
</ul>
</div>
<div class="footer__copyright col-sm-12">© 2021 Ayogaan.</div>
</div>
</div>
</div>
</footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>