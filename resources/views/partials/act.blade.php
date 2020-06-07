
<main role="main">

        <section class="jumbotron text-center">
          <div class="container">
            <h1 style="text-decoration:underline red;">Nos actualités</h1>
            <p class="lead text-muted">Informez vous dès a present grace a nos recentes actualites.</p>
            
          </div>
        </section>
      
        <div class="album py-5 bg-light">
          <div class="container">
          
            <div class="row">

                @if ($actualities ->count()>0)
              @foreach ($actualities  as $actuality )
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img src="images/{{ Session::get('photo') }}" width="100%" height="225" >
                  
                  <div class="card-body">
                    <h6> {{$actuality->newsactu}} </h6>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                          <h3> {{  $actuality->titre }} </h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p> {{$actuality->date}} </p>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
              
                  {{-- @if ($actualities ?? ''->count()>0)
                      @foreach ($actualities ?? '' as $actualitie )
                              <p> {{$actualitie->titre}} </p>
                              <p> {{$actualitie->photo}} </p>
                              <p> {{$actualitie->date}} </p>
                              <p> {{$actualitie->newsactu}} </p>
                          
                      @endforeach --}}
                  
                  @endforeach
                  @else
                  <p>aucune actualite pour l'instant</p>
                  @endif
      
            </div>
           
          </div>
        </div>
      
      </main>
      
      
      
     
<main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1 style="text-decoration:underline red;">Nos Evenements</h1>
        <p class="lead text-muted"></p>
        
      </div>
    </section>
  
    {{-- <div class="album py-5 bg-light">
        <div class="container">
        
          <div class="row">

              @if ($evenements ->count()>0)
            @foreach ($evenements  as $evenement )
            <div class="jumbotron">
                <h1 class="display-4">{{$evenement->titre}}</h1>
                <p class="lead">{{$evenement->evencontenu}}</p>
                <hr class="my-4">
                <p>{{$evenement->date}} - {{$evenement->lieu}} - {{$evenement->heure}}</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
              </div>
            
                {{-- @if ($actualities ?? ''->count()>0)
                    @foreach ($actualities ?? '' as $actualitie )
                            <p> {{$actualitie->titre}} </p>
                            <p> {{$actualitie->photo}} </p>
                            <p> {{$actualitie->date}} </p>
                            <p> {{$actualitie->newsactu}} </p>
                        
                    @endforeach --}}
{{--                 
                @endforeach
                @else
                <p>aucun evenement pour l'instant</p>
                @endif --}}
  
        {{-- </div>
       
      </div> 
    </div> --}}
  
  </main>
  
  
  
 