<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simplon-Burkina</title>
    </head>
    <body>
        @include('partials.header')
        <h1>Présentation de la fabrique</h1>
        


<div class="container">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../assets/img/simplon4.jpg" alt="Los Angeles" height="50%">
      </div>

      <div class="item">
        <img src="../assets/img/simplon3.jpg" alt="Chicago" height="50%" width="100%">
      </div>
    
      <div class="item">
        <img src="../assets/img/simplon1.jpg" alt="New york" height="50%">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>

    @include('partials.act')
    
    <h1>Localisation</h1>
    <p>La fabrique numérique Simplon est situé à l'agence Universitaire de la francophonie, au sein de l'université Ouaga 1.
        Pour vous y rendre, veuillez vous referrer à la carte ci-desssous</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.0959791143064!2d-1.5026646858703152!3d12.376502831006501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebe47e1af9855%3A0x1278af12903c216!2sCampus%20Num%C3%A9rique%20Francophone%20de%20Ouagadougou%20(AUF%20OUAGA)!5e0!3m2!1sfr!2sbf!4v1591313661549!5m2!1sfr!2sbf" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

       
    
    
    
    
    
    
    
    
    
    
    @include('partials.footer')

        <script>
        $('.carousel').carousel()
        </script>
    </body>
</html>
