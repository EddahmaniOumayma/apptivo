<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajouter</title>
</head>
<body>
    <h2>Ajouter Appareil</h2>
    <form action="{{route('corps.store') }}"method="POST">
  
      @csrf

      <div class="">
        <label >libelle </label>
        <input type="text" class="form-control"   name="libelle" >
      </div>
             <input  type="submit"  class="btn btn-primary "  value="ajouter">

    </form>
    
</body>
</html>