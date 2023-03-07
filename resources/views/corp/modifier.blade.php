<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modifierCorp</title>
</head>
<body>
    <h2>Ajouter Appareil</h2>
    <form action="{{Route('corps.update',$corp->id)}}"method="POST">
  
      @csrf
      @method('PUT')

      <div class="">
        <label >libelle </label>
        <input type="text" class="form-control"   name="libelle" value={{$corp->libelle}} >
      </div>
             <input  type="submit"  class="btn btn-primary "  value="modier">

    </form>
    
</body>
</html>