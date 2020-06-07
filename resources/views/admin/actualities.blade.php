<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simplon-Burkina</title>
    </head>
    <body>
@include('partials.header')

<form class="container"  action="{{route('actualities.store')}}"  method="POST" >
    {{ csrf_field() }}
      <h1>Enregistrer une actualite</h1> <br>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationServer01">Titre</label>
        <input type="text" class="form-control is-valid" id="validationServer01" name="titre" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6 mb-3">
        
          <label class="custom-file-label" for="customFile">Choose file</label>
        <input type="file" class="custom-file-input" id="customFile" name="photo" required>
       

       
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationServer01">Date</label>
        <input type="date" class="form-control is-valid" id="validationServer01" name="date" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationServer02">Description</label>
        <input type="text" class="form-control is-valid" id="validationServer02" name="newsactu" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>

  <br><br><br>
  <form class="container"  action="{{route('actualities.store')}}"  method="POST" >
    {{ csrf_field() }}
      <h1>Enregistrer une actualite</h1> <br>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationServer01">Titre</label>
        <input type="text" class="form-control is-valid" id="validationServer01" name="titre" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6 mb-3">
            <label for="validationServer01">Date</label>
            <input type="date" class="form-control is-valid" id="validationServer01" name="evendate" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationServer01">Heure</label>
        <input type="time" class="form-control is-valid" id="validationServer01" name="heure" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationServer02">Lieu</label>
        <input type="text" class="form-control is-valid" id="validationServer02" name="lieu" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-6 mb-3">
            <label for="validationServer02">Desc ription</label>
            <input type="text" class="form-control is-valid" id="validationServer02" name="evencontenu" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>

</body>
</html>